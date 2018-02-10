<?php

class Manthan_Marketplace_Block_Adminhtml_Shipment_View extends Mage_Adminhtml_Block_Widget_Form_Container
{

    public function __construct()
    {
        $this->_objectId    = 'shipment_id';
        $this->_controller  = 'adminhtml_shipment';
        $this->_mode        = 'view';

        parent::__construct();
		//$this->_removeButton('save');
        $this->_removeButton('reset');
        $this->_removeButton('delete');
        //if (Mage::getSingleton('admin/session')->isAllowed('adminhtml_shipment/actions/emails')) {
            $this->_updateButton('save', 'label', Mage::helper('sales')->__('Send Tracking Information'));
            $confirmationMessage = Mage::helper('core')->jsQuoteEscape(
                Mage::helper('sales')->__('Are you sure you want to send Shipment email to customer?')
            );
            $this->_updateButton('save',
                'onclick', "deleteConfirm('" . $confirmationMessage . "', '" . $this->getEmailUrl() . "')"
            );
        //}

        if ($this->getShipment()->getId()) {
            $this->_addButton('print', array(
                'label'     => Mage::helper('sales')->__('Print'),
                'class'     => 'save',
                'onclick'   => 'setLocation(\''.$this->getPrintUrl().'\')'
                )
            );
        }
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

    public function getHeaderText()
    {
        if ($this->getShipment()->getEmailSent()) {
            $emailSent = Mage::helper('sales')->__('the shipment email was sent');
        }
        else {
            $emailSent = Mage::helper('sales')->__('the shipment email is not sent');
        }
        return Mage::helper('sales')->__('Shipment #%1$s | %3$s (%2$s)', $this->getShipment()->getIncrementId(), $emailSent, $this->formatDate($this->getShipment()->getCreatedAtDate(), 'medium', true));
    }

    public function getBackUrl()
    {
        return $this->getUrl(
            '*/adminhtml_shipment/index'
            );
    }

    public function getEmailUrl()
    {
        return $this->getUrl('*/adminhtml_shipment/email', array('shipment_id'  => $this->getShipment()->getId()));
    }

    public function getPrintUrl()
    {
        return $this->getUrl('*/*/print', array(
            'invoice_id' => $this->getShipment()->getId()
        ));
    }

    public function updateBackButtonUrl($flag)
    {
        if ($flag) {
            if ($this->getShipment()->getBackUrl()) {
                return $this->_updateButton('back', 'onclick', 'setLocation(\'' . $this->getShipment()->getBackUrl()
                    . '\')');
            }
            return $this->_updateButton('back', 'onclick', 'setLocation(\'' . $this->getUrl('*/sales_shipment/') . '\')');
        }
        return $this;
    }
}
