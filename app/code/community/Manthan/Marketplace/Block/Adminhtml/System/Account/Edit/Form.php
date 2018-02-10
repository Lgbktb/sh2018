<?php
class Manthan_Marketplace_Block_Adminhtml_System_Account_Edit_Form extends Mage_Adminhtml_Block_System_Account_Edit_Form 
{
    protected function _prepareForm() 
	{
		$userId = Mage::getSingleton('admin/session')->getUser()->getId();
        $user = Mage::getModel('admin/user')
            ->load($userId);
        $user->unsetData('password');

        $form = new Varien_Data_Form(array(
                    'id' => 'edit_form',
                    'enctype' => 'multipart/form-data'
                        )
        );
		
	$fieldset = $form->addFieldset('base_fieldset', array('legend'=>Mage::helper('adminhtml')->__('Account Information')));
 
        $fieldset->addField('username', 'text', array(
                'name'  => 'username',
                'label' => Mage::helper('adminhtml')->__('User Name'),
                'title' => Mage::helper('adminhtml')->__('User Name'),
                'required' => true,
            )
        );

        $fieldset->addField('firstname', 'text', array(
                'name'  => 'firstname',
                'label' => Mage::helper('adminhtml')->__('First Name'),
                'title' => Mage::helper('adminhtml')->__('First Name'),
                'required' => true,
            )
        );

        $fieldset->addField('lastname', 'text', array(
                'name'  => 'lastname',
                'label' => Mage::helper('adminhtml')->__('Last Name'),
                'title' => Mage::helper('adminhtml')->__('Last Name'),
                'required' => true,
            )
        );

        $fieldset->addField('user_id', 'hidden', array(
                'name'  => 'user_id',
            )
        );

        $fieldset->addField('email', 'text', array(
                'name'  => 'email',
                'label' => Mage::helper('adminhtml')->__('Email'),
                'title' => Mage::helper('adminhtml')->__('User Email'),
                'required' => true,
            )
        );

        $fieldset->addField('password', 'password', array(
                'name'  => 'new_password',
                'label' => Mage::helper('adminhtml')->__('New Password'),
                'title' => Mage::helper('adminhtml')->__('New Password'),
                'class' => 'input-text validate-admin-password',
            )
        );

        $fieldset->addField('confirmation', 'password', array(
                'name'  => 'password_confirmation',
                'label' => Mage::helper('adminhtml')->__('Password Confirmation'),
                'class' => 'input-text validate-cpassword',
            )
        );
		
		$form->setValues($user->getData());
		
		/************* START SHOP INFORMATION **************/
		
		$seller = Mage::getModel('marketplace/seller')->isSeller();
		if($seller)
		{
			$fieldset = $form->addFieldset('shop_fieldset', array('legend'=>Mage::helper('adminhtml')->__('Shop Information')));
			$sellerModel = Mage::getModel('marketplace/seller')->getCollection()->addFieldToFilter('user_id',$userId);
			$fieldset->addField('shop_name', 'text', array(
					'name'  => 'shop_name',
					'label' => Mage::helper('adminhtml')->__('Shop Name'),
					'title' => Mage::helper('adminhtml')->__('Shop Name'),
					'required' => true,
					'value' => $sellerModel->getFirstItem()->getShopName(),
				)
			);
			
			$fieldset->addField('link', 'link', array(
				  'label'     => Mage::helper('adminhtml')->__('Link'),
				  'style'   => "text-decoration:none",
				  'href' => Mage::helper('marketplace')->getShopUrl($sellerModel->getFirstItem()->getUrlPath()),
				  'value'  => $sellerModel->getFirstItem()->getUrlPath(),
				  'target' => '_blank'
			));

			$fieldset->addField('shop_description', 'textarea', array(
					'label'     => Mage::helper('adminhtml')->__('Description'),
					'title' => Mage::helper('adminhtml')->__('Description'),
					'required'  => true,
					'name'      => 'shop_description',
					'value' => $sellerModel->getFirstItem()->getShopDescription()
			));
				
			$fieldset->addField('telephone', 'text', array(
					'label'     => Mage::helper('adminhtml')->__('Telephone'),
					'title' => Mage::helper('adminhtml')->__('Telephone'),
					'required'  => true,
					'name'      => 'telephone',
					'value' => $sellerModel->getFirstItem()->getTelephone()
				));
				
			$fieldset->addField('country', 'select', array(
					'label'     => Mage::helper('adminhtml')->__('Country'),
					'required'  => true,
					'name'      => 'country',
					'value'  => $sellerModel->getFirstItem()->getCountry(),
					'values' => $this->getAllCountry()
				));
				
			$fieldset->addField('postcode', 'text', array(
					'label'     => Mage::helper('adminhtml')->__('Postcode'),
					'title' => Mage::helper('adminhtml')->__('Postcode'),
					'required'  => true,
					'name'      => 'postcode',
					'value' => $sellerModel->getFirstItem()->getPostcode()
			));
			
			$fieldset->addField('seller_id', 'hidden', array(
					'name' => 'seller_id',
					'value' =>$sellerModel->getFirstItem()->getId()
				));
			
			$fieldset->addField('image', 'image', array(
					'name' => 'image',
					'value' =>$this->getProfileImage($sellerModel->getFirstItem()->getImage())
				));
			
			$fieldset->addField('delete_profile_image', 'hidden', array(
					'name' => 'delete_profile_image',
					'value' =>$sellerModel->getFirstItem()->getImage()
				));
				
			$fieldset->addField('admin_commission_by_percentage', 'label', array(
					'label' => Mage::helper('adminhtml')->__('Commission (in %)'),
					'value' => Mage::helper('core')->currency($sellerModel->getFirstItem()->getAdminCommissionByPercentage(), true, false),
				));
				
			$fieldset->addField('admin_total_earn', 'label', array(
					'label' => Mage::helper('adminhtml')->__('Total Admin Earn'),
					'value' => Mage::helper('core')->currency($sellerModel->getFirstItem()->getAdminTotalEarn(), true, false),
				));
			$other_fieldset = $form->addFieldset('other_fieldset', array('legend'=>Mage::helper('adminhtml')->__('Bank Information')));
 
			$other_fieldset->addField('bank_name', 'text', array(
					'name'  => 'bank_name',
					'label' => Mage::helper('adminhtml')->__('Bank name'),
					'title' => Mage::helper('adminhtml')->__('Bank name'),
					'required' => false,
					'value' => $sellerModel->getFirstItem()->getBankName()
				)
			);
			$other_fieldset->addField('account_holder_name', 'text', array(
					'name'  => 'account_holder_name',
					'label' => Mage::helper('adminhtml')->__('Account holder name'),
					'title' => Mage::helper('adminhtml')->__('Account holder name'),
					'required' => false,
					'value' => $sellerModel->getFirstItem()->getAccountHolderName()
				)
			);

			$other_fieldset->addField('account_number', 'text', array(
					'name'  => 'account_number',
					'label' => Mage::helper('adminhtml')->__('Account number'),
					'title' => Mage::helper('adminhtml')->__('Account number'),
					'required' => false,
					'value' => $sellerModel->getFirstItem()->getAccountNumber()
				)
			);

			$other_fieldset->addField('bank_branch', 'text', array(
					'name'  => 'bank_branch',
					'label' => Mage::helper('adminhtml')->__('Bank branch'),
					'title' => Mage::helper('adminhtml')->__('Bank branch'),
					'required' => false,
					'value' => $sellerModel->getFirstItem()->getBankBranch()
				)
			);

			$other_fieldset->addField('ifsc_code', 'text', array(
					'name'  => 'ifsc_code',
					'label' => Mage::helper('adminhtml')->__('IFSC code'),
					'title' => Mage::helper('adminhtml')->__('IFSC code'),
				   'required' => false,
				   'value' => $sellerModel->getFirstItem()->getIfscCode()
				)
			);	
		}
		/* END SHOP INFORMATION */
		
        $form->setAction($this->getUrl('*/system_account/save'));
        $form->setMethod('post');
        $form->setUseContainer(true);
        $form->setId('edit_form');

        $this->setForm($form);
	}
	
	public function getAllCountry()
	{
		$countryList = Mage::getResourceModel('directory/country_collection')
					->loadData()
					->toOptionArray(true);
		
		return $countryList;
	}
	 
	 public function getProfileImage($image) 
	 {
        if ($image == '')
            return '';
        $dir_path = Mage::getBaseUrl('media').'marketplace/seller/images/';
        return $dir_path . $image;
	 }
}	
