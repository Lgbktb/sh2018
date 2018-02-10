<?php
class Manthan_Marketplace_Block_Adminhtml_Shipment extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	 public function __construct(){
        $this->_controller = 'adminhtml_shipment';
        $this->_blockGroup = 'marketplace';
        $this->_headerText = Mage::helper('adminhtml')->__('Manage Shipment');
		parent::__construct();
		$this->_removeButton('add');
    }
}

