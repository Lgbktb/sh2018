<?php
class Manthan_Marketplace_Block_Adminhtml_Shipment_View_Form extends Mage_Adminhtml_Block_Sales_Order_Abstract
{
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
     * @return Mage_Sales_Model_Order_Shipment
     */
    public function getSource()
    {
        return $this->getShipment();
    }

    /**
     * Get create label button html
     *
     * @return string
     */
    public function getCreateLabelButton()
    {
        $data['shipment_id'] = $this->getShipment()->getId();
        $url = $this->getUrl('*/sales_order_shipment/createLabel', $data);
        return $this->getLayout()
            ->createBlock('adminhtml/widget_button')
            ->setData(array(
                'label'   => Mage::helper('sales')->__('Create Shipping Label...'),
                'onclick' => 'packaging.showWindow();',
            ))
            ->toHtml();
    }

    /**
     * Get print label button html
     *
     * @return string
     */
    public function getPrintLabelButton()
    {
        $data['shipment_id'] = $this->getShipment()->getId();
        $url = $this->getUrl('*/sales_order_shipment/printLabel', $data);
        return $this->getLayout()
            ->createBlock('adminhtml/widget_button')
            ->setData(array(
                'label'   => Mage::helper('sales')->__('Print Shipping Label'),
                'onclick' => 'setLocation(\'' . $url . '\')'
            ))
            ->toHtml();
    }

    /**
     * Show packages button html
     *
     * @return string
     */
    public function getShowPackagesButton()
    {
        return $this->getLayout()
            ->createBlock('adminhtml/widget_button')
            ->setData(array(
                'label'   => Mage::helper('sales')->__('Show Packages'),
                'onclick' => 'showPackedWindow();'
            ))
            ->toHtml();
    }

    /**
     * Check is carrier has functionality of creation shipping labels
     *
     * @return bool
     */
    public function canCreateShippingLabel()
    {
        $shippingCarrier = $this->getOrder()->getShippingCarrier();
        return $shippingCarrier && $shippingCarrier->isShippingLabelsAvailable();
    }
}
