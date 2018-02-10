<?php
$sellerRoleId = Mage::getModel('admin/roles')
            ->getCollection()
        	->addFieldToFilter('role_name', Manthan_Marketplace_Model_Seller::ROLE)
        	->getFirstItem()
        	->getId();
			
	 Mage::getModel('admin/rules')
            ->setRoleId($sellerRoleId)
            ->setResources(array('admin/catalog','admin/catalog/products','admin/seller_dashboard','admin/system','admin/seller/shipment','admin/system/myaccount','admin/seller','admin/seller/orders','admin/seller/review','admin/seller/payment'))
            ->saveRel();
		$parentId = 0;
		$roles = Mage::getModel('admin/roles')->load(1);
		$roleName = $roles->getRoleName();
		$roles->setName($roleName)
			 ->setPid($parentId)
			 ->setRoleType('G');
        $roles->save();
		
		$resources = array('admin/seller_dashboard','admin/seller_shipping','admin/seller_shipping/shippingzone','admin/seller/shipment','admin/seller','admin/seller/orders','admin/seller/review');
		foreach($resources as $resource)
		{
			$role = Mage::getModel('admin/rules');
					$role->setRoleId($roles->getId());
					$role->setResourceId($resource);
					$role->setRoleType('G');
					$role->setAssertId(0);
					$role->setPermission('deny');
				$role->save();
			
		}
$installer = $this;
$installer->startSetup();

$installer->getConnection()
	->addColumn($installer->getTable('sales_flat_shipment'),'seller_id',array(
			'type' => Varien_Db_Ddl_Table::TYPE_INTEGER,
			'nullable' => false,
			'comment' => 'Seller ID'
	));
$installer->getConnection()
	->addColumn($installer->getTable('marketplace/seller'),'bank_name',array(
			'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
			'length' => 50,
			'nullable' => true,
			'comment' => 'Bank name'
	));
$installer->getConnection()
	->addColumn($installer->getTable('marketplace/seller'),'account_holder_name',array(
			'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
			'length' => 100,
			'nullable' => true,
			'comment' => 'account holder name'
	));
$installer->getConnection()
->addColumn($installer->getTable('marketplace/seller'),'account_number',array(
		'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
		'length' => 25,
		'nullable' => true,
		'comment' => 'account number'
));

$installer->getConnection()
->addColumn($installer->getTable('marketplace/seller'),'bank_branch',array(
		'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
		'length' => 25,
		'nullable' => true,
		'comment' => 'bank branch'
));

$installer->getConnection()
->addColumn($installer->getTable('marketplace/seller'),'ifsc_code',array(
		'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
		'length' => 25,
		'nullable' => true,
		'comment' => 'IFSC code'
));
$installer->endSetup();			
