<?php
class Manthan_Marketplace_Block_Adminhtml_Order_Shipment_Create_Form extends Mage_Adminhtml_Block_Sales_Order_Abstract
{
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

    protected function _prepareLayout()
    {
//        $infoBlock = $this->getLayout()->createBlock('adminhtml/sales_order_view_info')
//            ->setOrder($this->getShipment()->getOrder());
//        $this->setChild('order_info', $infoBlock);

        $this->setChild(
            'items',
            $this->getLayout()->createBlock('adminhtml/sales_order_shipment_create_items')
        );
        $this->setChild(
            'tracking',
            $this->getLayout()->createBlock('adminhtml/sales_order_shipment_create_tracking')
        );
//        $paymentInfoBlock = $this->getLayout()->createBlock('adminhtml/sales_order_payment')
//            ->setPayment($this->getShipment()->getOrder()->getPayment());
//        $this->setChild('payment_info', $paymentInfoBlock);

//        return parent::_prepareLayout();
    }

    public function getPaymentHtml()
    {
        return $this->getChildHtml('order_payment');
    }

    public function getItemsHtml()
    {
        return $this->getChildHtml('order_items');
    }

    public function getSaveUrl()
    {
        return $this->getUrl('*/*/save', array('order_id' => $this->getShipment()->getOrderId()));
    }
}
