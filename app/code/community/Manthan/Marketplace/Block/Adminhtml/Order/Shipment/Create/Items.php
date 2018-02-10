<?php  
class Manthan_Marketplace_Block_Adminhtml_Order_Shipment_Create_Items extends Mage_Adminhtml_Block_Template {

	public function __construct()
	{
		$this->setTemplate('marketplace/sales/order/shipment/create/items.phtml');
		 parent::__construct();
	}
	/**
     * Retrieve invoice order
     *
     * @return Mage_Sales_Model_Order
     */
    public function getOrder()
    {
        return $this->getShipment()->getOrder();
    }

    /**
     * Retrieve source
     *
     * @return Mage_Sales_Model_Order_Invoice
     */
    public function getSource()
    {
        return $this->getShipment();
    }

    /**
     * Retrieve shipment model instance
     *
     * @return Mage_Sales_Model_Order_Shipment
     */
    public function getShipment()
    {
        return Mage::registry('current_shipment');
    }

    /**
     * Prepare child blocks
     */
    protected function _beforeToHtml()
    {
        $this->setChild(
            'submit_button',
            $this->getLayout()->createBlock('adminhtml/widget_button')->setData(array(
                'label'     => Mage::helper('sales')->__('Submit Shipment'),
                'class'     => 'save submit-button',
                'onclick'   => 'submitShipment(this);',
            ))
        );

        return parent::_beforeToHtml();
    }

    /**
     * Format given price
     *
     * @param float $price
     * @return string
     */
    public function formatPrice($price)
    {
        return $this->getShipment()->getOrder()->formatPrice($price);
    }

    /**
     * Retrieve HTML of update button
     *
     * @return string
     */
    public function getUpdateButtonHtml()
    {
        return $this->getChildHtml('update_button');
    }

    /**
     * Get url for update
     *
     * @return string
     */
    public function getUpdateUrl()
    {
        return $this->getUrl('*/*/updateQty', array('order_id'=>$this->getShipment()->getOrderId()));
    }

    /**
     * Check possibility to send shipment email
     *
     * @return bool
     */
    public function canSendShipmentEmail()
    {
        return Mage::helper('sales')->canSendNewShipmentEmail($this->getOrder()->getStore()->getId());
    }

    /**
     * Checks the possibility of creating shipping label by current carrier
     *
     * @return bool
     */
    public function canCreateShippingLabel()
    {
        $shippingCarrier = $this->getOrder()->getShippingCarrier();
        return $shippingCarrier && $shippingCarrier->isShippingLabelsAvailable();
    }
	public function getItemHtml($_item)
	{
		$items = Mage::app()->getLayout()->createBlock('marketplace/adminhtml_order_shipment_create_items_renderer_default')
				->setItem($_item)
				->setAdminComission($this->getAdminCommission($_item))
				->setSellerItemAmount($this->getSellerItemAmount($_item))
				->toHtml();
		return $items;
	}

    public function getCurrentOrder() 
	{
        return Mage::registry('current_order');
    }
	
    public function getItemsCollection() 
	{
		$isSeller = Mage::getModel('marketplace/seller')->isSeller();
		if(!is_null($isSeller))
		{	 
		 return $itemCollection = Mage::getModel('sales/order_item')->getCollection()
						->addFieldToFilter('order_id',$this->getCurrentOrder()->getId())
						->addFieldToFilter('seller_id',$isSeller);
		}
		 
	   return null;
    }
    public function getAdminCommission($item) {
		if(!$item)
			return 0;
                
				$commission = $item->getAdminOrderCommission();
				if($item->getCommissionType()=="fixed") // if: commission type Percentage
				{
					return $commission;
				}
				
                $total_price = $item->getRowTotalInclTax();
                $adminCommissionAmount = ($total_price * $commission) / 100;
		return $adminCommissionAmount;
    }

    public function getSellerItemAmount($item) 
	{	
		 if(!$item)
			return 0;
		
				$sellerItemAmount = $item->getRowTotalInclTax() - $item->getAdminOrderCommission();
				if($item->getCommissionType()=="percentage") // if: commission type Percentage
				{
					$commission = $item->getAdminOrderCommission();
					$total_price = $item->getRowTotalInclTax();
					$sellerItemAmount = $total_price - $this->getAdminCommission($item);
				}
              return round($sellerItemAmount,2); 
    }
}


