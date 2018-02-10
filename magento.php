<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.7.7
 */

/**
 * Database `magento`
 */

/* `magento`.`adminnotification_inbox` */
$adminnotification_inbox = array(
  array('notification_id' => '1','severity' => '1','date_added' => '2017-09-15 17:50:16','title' => 'Magento Open Source 1.9.3.6 and SUPEE-10266 Security Enhancements – 9/14/2017','description' => 'Magento Open Source 1.9.3.6 and SUPEE-10266 include critical security enhancements. Please update your site as soon as possible. More information is available in the release notes: 
http://devdocs.magento.com/guides/m1x/ce19-ee114/ce1.9_release-notes.html.
','url' => 'http://devdocs.magento.com/guides/m1x/ce19-ee114/ce1.9_release-notes.html','is_read' => '0','is_remove' => '1'),
  array('notification_id' => '2','severity' => '1','date_added' => '2017-11-29 19:06:29','title' => 'Magento Open Source 1.9.3.7 Enhances Security - 11/28/2017','description' => 'Magento Open Source 1.9.3.7 includes critical security enhancements. We encourage you to upgrade or patch as soon as is reasonably possible. Review the release notes for more information: 
http://devdocs.magento.com/guides/m1x/ce19-ee114/ce1.9_release-notes.html

','url' => 'http://devdocs.magento.com/guides/m1x/ce19-ee114/ce1.9_release-notes.html','is_read' => '0','is_remove' => '1'),
  array('notification_id' => '3','severity' => '4','date_added' => '2017-12-12 20:00:13','title' => 'Magento Open Source 2.2.2 Accelerates Growth with Instant Purchase Checkout, Integrated Email Marketing Automation, Advanced Reporting, and More – 12/12/2017','description' => 'Our newest release of Magento Open Source equips merchants with powerful tools to accelerate growth and improve operational efficiency. It boosts conversion rates with a streamlined Instant Purchase checkout, jump-starts sales with integrated dotmailer email marketing automation, delivers actionable insights through Advanced Reporting, and provides integrated multi-carrier shipping and fulfillment capabilities with Magento Shipping. https://magento.com/blog/magento-news/new-instant-purchase-checkout-boosts-sales ','url' => 'https://magento.com/blog/magento-news/new-instant-purchase-checkout-boosts-sales ','is_read' => '0','is_remove' => '1'),
  array('notification_id' => '4','severity' => '4','date_added' => '2018-02-07 13:57:07','title' => 'New Magento Security Scan Tool is available!','description' => 'Magento has rolled out a new security scan tool that enables you to regularly monitor your sites and receive updates regarding known security risks, malware, and unauthorized access. Our  goal is to assist in ensuring the on-going security of your Magento sites. 

Security Scan is a free service of Magento, and provides over 30 security tests to identify potential vulnerabilities, such as missing Magento patches, configuration issues, and failure to follow security best practices. In addition, you\'ll receive real-time security status of your Magento sites and how to fix potential vulnerabilities.

You and your team, including authorized developers, can access the new tool directly within your Magento Account. And it is very easy to set up. 

To learn more about the Security Scan Tool, 
log into your Magento Account at https://account.magento.com/customer/account/.

My Account > Security Scan','url' => 'https://account.magento.com/customer/account/','is_read' => '0','is_remove' => '1')
);

/* `magento`.`admin_assert` */
$admin_assert = array(
);

/* `magento`.`admin_role` */
$admin_role = array(
  array('role_id' => '1','parent_id' => '0','tree_level' => '1','sort_order' => '1','role_type' => 'G','user_id' => '0','role_name' => 'Administrators'),
  array('role_id' => '2','parent_id' => '1','tree_level' => '2','sort_order' => '0','role_type' => 'U','user_id' => '1','role_name' => 'John'),
  array('role_id' => '3','parent_id' => '0','tree_level' => '1','sort_order' => '0','role_type' => 'G','user_id' => '0','role_name' => 'SELLER'),
  array('role_id' => '6','parent_id' => '3','tree_level' => '2','sort_order' => '0','role_type' => 'U','user_id' => '2','role_name' => 'test')
);

/* `magento`.`admin_rule` */
$admin_rule = array(
  array('rule_id' => '1','role_id' => '1','resource_id' => 'all','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'allow'),
  array('rule_id' => '208','role_id' => '1','resource_id' => 'admin/seller_dashboard','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '209','role_id' => '1','resource_id' => 'admin/seller','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '210','role_id' => '1','resource_id' => 'admin/seller/orders','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '211','role_id' => '1','resource_id' => 'admin/seller/review','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '212','role_id' => '3','resource_id' => 'all','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '213','role_id' => '3','resource_id' => 'admin','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '214','role_id' => '3','resource_id' => 'admin/dashboard','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '215','role_id' => '3','resource_id' => 'admin/system','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'allow'),
  array('rule_id' => '216','role_id' => '3','resource_id' => 'admin/system/acl','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '217','role_id' => '3','resource_id' => 'admin/system/acl/roles','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '218','role_id' => '3','resource_id' => 'admin/system/acl/users','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '219','role_id' => '3','resource_id' => 'admin/system/acl/variables','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '220','role_id' => '3','resource_id' => 'admin/system/acl/blocks','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '221','role_id' => '3','resource_id' => 'admin/system/store','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '222','role_id' => '3','resource_id' => 'admin/system/design','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '223','role_id' => '3','resource_id' => 'admin/system/config','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '224','role_id' => '3','resource_id' => 'admin/system/config/general','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '225','role_id' => '3','resource_id' => 'admin/system/config/web','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '226','role_id' => '3','resource_id' => 'admin/system/config/design','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '227','role_id' => '3','resource_id' => 'admin/system/config/system','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '228','role_id' => '3','resource_id' => 'admin/system/config/advanced','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '229','role_id' => '3','resource_id' => 'admin/system/config/trans_email','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '230','role_id' => '3','resource_id' => 'admin/system/config/dev','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '231','role_id' => '3','resource_id' => 'admin/system/config/currency','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '232','role_id' => '3','resource_id' => 'admin/system/config/sendfriend','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '233','role_id' => '3','resource_id' => 'admin/system/config/admin','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '234','role_id' => '3','resource_id' => 'admin/system/config/customer','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '235','role_id' => '3','resource_id' => 'admin/system/config/cms','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '236','role_id' => '3','resource_id' => 'admin/system/config/catalog','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '237','role_id' => '3','resource_id' => 'admin/system/config/payment','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '238','role_id' => '3','resource_id' => 'admin/system/config/payment_services','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '239','role_id' => '3','resource_id' => 'admin/system/config/sales','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '240','role_id' => '3','resource_id' => 'admin/system/config/sales_email','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '241','role_id' => '3','resource_id' => 'admin/system/config/sales_pdf','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '242','role_id' => '3','resource_id' => 'admin/system/config/cataloginventory','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '243','role_id' => '3','resource_id' => 'admin/system/config/shipping','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '244','role_id' => '3','resource_id' => 'admin/system/config/carriers','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '245','role_id' => '3','resource_id' => 'admin/system/config/promo','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '246','role_id' => '3','resource_id' => 'admin/system/config/checkout','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '247','role_id' => '3','resource_id' => 'admin/system/config/paypal','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '248','role_id' => '3','resource_id' => 'admin/system/config/reports','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '249','role_id' => '3','resource_id' => 'admin/system/config/google','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '250','role_id' => '3','resource_id' => 'admin/system/config/tax','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '251','role_id' => '3','resource_id' => 'admin/system/config/wishlist','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '252','role_id' => '3','resource_id' => 'admin/system/config/contacts','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '253','role_id' => '3','resource_id' => 'admin/system/config/sitemap','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '254','role_id' => '3','resource_id' => 'admin/system/config/rss','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '255','role_id' => '3','resource_id' => 'admin/system/config/api','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '256','role_id' => '3','resource_id' => 'admin/system/config/oauth','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '257','role_id' => '3','resource_id' => 'admin/system/config/configswatches','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '258','role_id' => '3','resource_id' => 'admin/system/config/newsletter','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '259','role_id' => '3','resource_id' => 'admin/system/config/downloadable','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '260','role_id' => '3','resource_id' => 'admin/system/config/persistent','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '261','role_id' => '3','resource_id' => 'admin/system/config/marketplace','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '262','role_id' => '3','resource_id' => 'admin/system/config/moneybookers','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '263','role_id' => '3','resource_id' => 'admin/system/currency','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '264','role_id' => '3','resource_id' => 'admin/system/currency/rates','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '265','role_id' => '3','resource_id' => 'admin/system/currency/symbols','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '266','role_id' => '3','resource_id' => 'admin/system/email_template','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '267','role_id' => '3','resource_id' => 'admin/system/variable','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '268','role_id' => '3','resource_id' => 'admin/system/myaccount','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'allow'),
  array('rule_id' => '269','role_id' => '3','resource_id' => 'admin/system/tools','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '270','role_id' => '3','resource_id' => 'admin/system/tools/backup','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '271','role_id' => '3','resource_id' => 'admin/system/tools/backup/rollback','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '272','role_id' => '3','resource_id' => 'admin/system/tools/compiler','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '273','role_id' => '3','resource_id' => 'admin/system/convert','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '274','role_id' => '3','resource_id' => 'admin/system/convert/gui','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '275','role_id' => '3','resource_id' => 'admin/system/convert/profiles','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '276','role_id' => '3','resource_id' => 'admin/system/convert/import','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '277','role_id' => '3','resource_id' => 'admin/system/convert/export','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '278','role_id' => '3','resource_id' => 'admin/system/cache','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '279','role_id' => '3','resource_id' => 'admin/system/extensions','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '280','role_id' => '3','resource_id' => 'admin/system/extensions/local','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '281','role_id' => '3','resource_id' => 'admin/system/extensions/custom','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '282','role_id' => '3','resource_id' => 'admin/system/adminnotification','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '283','role_id' => '3','resource_id' => 'admin/system/adminnotification/show_toolbar','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '284','role_id' => '3','resource_id' => 'admin/system/adminnotification/show_list','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '285','role_id' => '3','resource_id' => 'admin/system/adminnotification/mark_as_read','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '286','role_id' => '3','resource_id' => 'admin/system/adminnotification/remove','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '287','role_id' => '3','resource_id' => 'admin/system/index','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '288','role_id' => '3','resource_id' => 'admin/system/order_statuses','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '289','role_id' => '3','resource_id' => 'admin/system/api','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '290','role_id' => '3','resource_id' => 'admin/system/api/users','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '291','role_id' => '3','resource_id' => 'admin/system/api/roles','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '292','role_id' => '3','resource_id' => 'admin/system/api/consumer','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '293','role_id' => '3','resource_id' => 'admin/system/api/consumer/edit','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '294','role_id' => '3','resource_id' => 'admin/system/api/consumer/delete','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '295','role_id' => '3','resource_id' => 'admin/system/api/authorizedTokens','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '296','role_id' => '3','resource_id' => 'admin/system/api/oauth_admin_token','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '297','role_id' => '3','resource_id' => 'admin/system/api/rest_roles','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '298','role_id' => '3','resource_id' => 'admin/system/api/rest_roles/add','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '299','role_id' => '3','resource_id' => 'admin/system/api/rest_roles/edit','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '300','role_id' => '3','resource_id' => 'admin/system/api/rest_roles/delete','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '301','role_id' => '3','resource_id' => 'admin/system/api/rest_attributes','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '302','role_id' => '3','resource_id' => 'admin/system/api/rest_attributes/edit','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '303','role_id' => '3','resource_id' => 'admin/global_search','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '304','role_id' => '3','resource_id' => 'admin/customer','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '305','role_id' => '3','resource_id' => 'admin/customer/group','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '306','role_id' => '3','resource_id' => 'admin/customer/manage','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '307','role_id' => '3','resource_id' => 'admin/customer/online','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '308','role_id' => '3','resource_id' => 'admin/cms','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '309','role_id' => '3','resource_id' => 'admin/cms/block','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '310','role_id' => '3','resource_id' => 'admin/cms/page','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '311','role_id' => '3','resource_id' => 'admin/cms/page/save','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '312','role_id' => '3','resource_id' => 'admin/cms/page/delete','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '313','role_id' => '3','resource_id' => 'admin/cms/media_gallery','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '314','role_id' => '3','resource_id' => 'admin/cms/poll','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '315','role_id' => '3','resource_id' => 'admin/cms/widget_instance','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '316','role_id' => '3','resource_id' => 'admin/catalog','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'allow'),
  array('rule_id' => '317','role_id' => '3','resource_id' => 'admin/catalog/attributes','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '318','role_id' => '3','resource_id' => 'admin/catalog/attributes/attributes','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '319','role_id' => '3','resource_id' => 'admin/catalog/attributes/sets','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '320','role_id' => '3','resource_id' => 'admin/catalog/categories','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '321','role_id' => '3','resource_id' => 'admin/catalog/products','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'allow'),
  array('rule_id' => '322','role_id' => '3','resource_id' => 'admin/catalog/update_attributes','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '323','role_id' => '3','resource_id' => 'admin/catalog/urlrewrite','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '324','role_id' => '3','resource_id' => 'admin/catalog/search','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '325','role_id' => '3','resource_id' => 'admin/catalog/reviews_ratings','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '326','role_id' => '3','resource_id' => 'admin/catalog/reviews_ratings/reviews','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '327','role_id' => '3','resource_id' => 'admin/catalog/reviews_ratings/reviews/all','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '328','role_id' => '3','resource_id' => 'admin/catalog/reviews_ratings/reviews/pending','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '329','role_id' => '3','resource_id' => 'admin/catalog/reviews_ratings/ratings','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '330','role_id' => '3','resource_id' => 'admin/catalog/tag','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '331','role_id' => '3','resource_id' => 'admin/catalog/tag/all','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '332','role_id' => '3','resource_id' => 'admin/catalog/tag/pending','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '333','role_id' => '3','resource_id' => 'admin/catalog/sitemap','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '334','role_id' => '3','resource_id' => 'admin/promo','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '335','role_id' => '3','resource_id' => 'admin/promo/catalog','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '336','role_id' => '3','resource_id' => 'admin/promo/quote','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '337','role_id' => '3','resource_id' => 'admin/sales','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '338','role_id' => '3','resource_id' => 'admin/sales/order','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '339','role_id' => '3','resource_id' => 'admin/sales/order/actions','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '340','role_id' => '3','resource_id' => 'admin/sales/order/actions/create','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '341','role_id' => '3','resource_id' => 'admin/sales/order/actions/view','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '342','role_id' => '3','resource_id' => 'admin/sales/order/actions/email','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '343','role_id' => '3','resource_id' => 'admin/sales/order/actions/reorder','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '344','role_id' => '3','resource_id' => 'admin/sales/order/actions/edit','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '345','role_id' => '3','resource_id' => 'admin/sales/order/actions/cancel','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '346','role_id' => '3','resource_id' => 'admin/sales/order/actions/review_payment','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '347','role_id' => '3','resource_id' => 'admin/sales/order/actions/capture','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '348','role_id' => '3','resource_id' => 'admin/sales/order/actions/invoice','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '349','role_id' => '3','resource_id' => 'admin/sales/order/actions/creditmemo','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '350','role_id' => '3','resource_id' => 'admin/sales/order/actions/hold','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '351','role_id' => '3','resource_id' => 'admin/sales/order/actions/unhold','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '352','role_id' => '3','resource_id' => 'admin/sales/order/actions/ship','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '353','role_id' => '3','resource_id' => 'admin/sales/order/actions/comment','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '354','role_id' => '3','resource_id' => 'admin/sales/order/actions/emails','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '355','role_id' => '3','resource_id' => 'admin/sales/invoice','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '356','role_id' => '3','resource_id' => 'admin/sales/shipment','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '357','role_id' => '3','resource_id' => 'admin/sales/creditmemo','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '358','role_id' => '3','resource_id' => 'admin/sales/transactions','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '359','role_id' => '3','resource_id' => 'admin/sales/transactions/fetch','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '360','role_id' => '3','resource_id' => 'admin/sales/recurring_profile','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '361','role_id' => '3','resource_id' => 'admin/sales/billing_agreement','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '362','role_id' => '3','resource_id' => 'admin/sales/billing_agreement/actions','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '363','role_id' => '3','resource_id' => 'admin/sales/billing_agreement/actions/view','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '364','role_id' => '3','resource_id' => 'admin/sales/billing_agreement/actions/manage','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '365','role_id' => '3','resource_id' => 'admin/sales/billing_agreement/actions/use','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '366','role_id' => '3','resource_id' => 'admin/sales/checkoutagreement','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '367','role_id' => '3','resource_id' => 'admin/sales/tax','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '368','role_id' => '3','resource_id' => 'admin/sales/tax/classes_customer','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '369','role_id' => '3','resource_id' => 'admin/sales/tax/classes_product','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '370','role_id' => '3','resource_id' => 'admin/sales/tax/import_export','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '371','role_id' => '3','resource_id' => 'admin/sales/tax/rates','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '372','role_id' => '3','resource_id' => 'admin/sales/tax/rules','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '373','role_id' => '3','resource_id' => 'admin/report','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '374','role_id' => '3','resource_id' => 'admin/report/salesroot','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '375','role_id' => '3','resource_id' => 'admin/report/salesroot/paypal_settlement_reports','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '376','role_id' => '3','resource_id' => 'admin/report/salesroot/paypal_settlement_reports/view','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '377','role_id' => '3','resource_id' => 'admin/report/salesroot/paypal_settlement_reports/fetch','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '378','role_id' => '3','resource_id' => 'admin/report/salesroot/sales','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '379','role_id' => '3','resource_id' => 'admin/report/salesroot/tax','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '380','role_id' => '3','resource_id' => 'admin/report/salesroot/shipping','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '381','role_id' => '3','resource_id' => 'admin/report/salesroot/invoiced','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '382','role_id' => '3','resource_id' => 'admin/report/salesroot/refunded','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '383','role_id' => '3','resource_id' => 'admin/report/salesroot/coupons','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '384','role_id' => '3','resource_id' => 'admin/report/shopcart','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '385','role_id' => '3','resource_id' => 'admin/report/shopcart/product','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '386','role_id' => '3','resource_id' => 'admin/report/shopcart/abandoned','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '387','role_id' => '3','resource_id' => 'admin/report/products','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '388','role_id' => '3','resource_id' => 'admin/report/products/bestsellers','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '389','role_id' => '3','resource_id' => 'admin/report/products/sold','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '390','role_id' => '3','resource_id' => 'admin/report/products/viewed','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '391','role_id' => '3','resource_id' => 'admin/report/products/lowstock','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '392','role_id' => '3','resource_id' => 'admin/report/products/downloads','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '393','role_id' => '3','resource_id' => 'admin/report/customers','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '394','role_id' => '3','resource_id' => 'admin/report/customers/accounts','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '395','role_id' => '3','resource_id' => 'admin/report/customers/totals','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '396','role_id' => '3','resource_id' => 'admin/report/customers/orders','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '397','role_id' => '3','resource_id' => 'admin/report/review','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '398','role_id' => '3','resource_id' => 'admin/report/review/customer','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '399','role_id' => '3','resource_id' => 'admin/report/review/product','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '400','role_id' => '3','resource_id' => 'admin/report/tags','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '401','role_id' => '3','resource_id' => 'admin/report/tags/customer','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '402','role_id' => '3','resource_id' => 'admin/report/tags/popular','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '403','role_id' => '3','resource_id' => 'admin/report/tags/product','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '404','role_id' => '3','resource_id' => 'admin/report/search','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '405','role_id' => '3','resource_id' => 'admin/report/statistics','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '406','role_id' => '3','resource_id' => 'admin/newsletter','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '407','role_id' => '3','resource_id' => 'admin/newsletter/problem','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '408','role_id' => '3','resource_id' => 'admin/newsletter/queue','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '409','role_id' => '3','resource_id' => 'admin/newsletter/subscriber','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '410','role_id' => '3','resource_id' => 'admin/newsletter/template','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '411','role_id' => '3','resource_id' => 'admin/page_cache','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '412','role_id' => '3','resource_id' => 'admin/seller_dashboard','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'allow'),
  array('rule_id' => '413','role_id' => '3','resource_id' => 'admin/seller','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'allow'),
  array('rule_id' => '414','role_id' => '3','resource_id' => 'admin/seller/review','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'allow'),
  array('rule_id' => '415','role_id' => '3','resource_id' => 'admin/seller/orders','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'allow'),
  array('rule_id' => '416','role_id' => '3','resource_id' => 'admin/seller/shipment','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'allow'),
  array('rule_id' => '417','role_id' => '3','resource_id' => 'admin/seller/payment','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'allow'),
  array('rule_id' => '418','role_id' => '3','resource_id' => 'all','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '419','role_id' => '3','resource_id' => 'admin','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '420','role_id' => '3','resource_id' => 'admin/dashboard','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '421','role_id' => '3','resource_id' => 'admin/system','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'allow'),
  array('rule_id' => '422','role_id' => '3','resource_id' => 'admin/system/acl','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '423','role_id' => '3','resource_id' => 'admin/system/acl/roles','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '424','role_id' => '3','resource_id' => 'admin/system/acl/users','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '425','role_id' => '3','resource_id' => 'admin/system/acl/variables','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '426','role_id' => '3','resource_id' => 'admin/system/acl/blocks','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '427','role_id' => '3','resource_id' => 'admin/system/store','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '428','role_id' => '3','resource_id' => 'admin/system/design','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '429','role_id' => '3','resource_id' => 'admin/system/config','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '430','role_id' => '3','resource_id' => 'admin/system/config/general','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '431','role_id' => '3','resource_id' => 'admin/system/config/web','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '432','role_id' => '3','resource_id' => 'admin/system/config/design','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '433','role_id' => '3','resource_id' => 'admin/system/config/system','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '434','role_id' => '3','resource_id' => 'admin/system/config/advanced','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '435','role_id' => '3','resource_id' => 'admin/system/config/trans_email','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '436','role_id' => '3','resource_id' => 'admin/system/config/dev','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '437','role_id' => '3','resource_id' => 'admin/system/config/currency','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '438','role_id' => '3','resource_id' => 'admin/system/config/sendfriend','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '439','role_id' => '3','resource_id' => 'admin/system/config/admin','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '440','role_id' => '3','resource_id' => 'admin/system/config/customer','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '441','role_id' => '3','resource_id' => 'admin/system/config/cms','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '442','role_id' => '3','resource_id' => 'admin/system/config/catalog','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '443','role_id' => '3','resource_id' => 'admin/system/config/payment','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '444','role_id' => '3','resource_id' => 'admin/system/config/payment_services','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '445','role_id' => '3','resource_id' => 'admin/system/config/sales','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '446','role_id' => '3','resource_id' => 'admin/system/config/sales_email','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '447','role_id' => '3','resource_id' => 'admin/system/config/sales_pdf','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '448','role_id' => '3','resource_id' => 'admin/system/config/cataloginventory','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '449','role_id' => '3','resource_id' => 'admin/system/config/shipping','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '450','role_id' => '3','resource_id' => 'admin/system/config/carriers','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '451','role_id' => '3','resource_id' => 'admin/system/config/promo','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '452','role_id' => '3','resource_id' => 'admin/system/config/checkout','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '453','role_id' => '3','resource_id' => 'admin/system/config/paypal','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '454','role_id' => '3','resource_id' => 'admin/system/config/reports','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '455','role_id' => '3','resource_id' => 'admin/system/config/google','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '456','role_id' => '3','resource_id' => 'admin/system/config/tax','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '457','role_id' => '3','resource_id' => 'admin/system/config/wishlist','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '458','role_id' => '3','resource_id' => 'admin/system/config/contacts','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '459','role_id' => '3','resource_id' => 'admin/system/config/sitemap','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '460','role_id' => '3','resource_id' => 'admin/system/config/rss','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '461','role_id' => '3','resource_id' => 'admin/system/config/api','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '462','role_id' => '3','resource_id' => 'admin/system/config/oauth','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '463','role_id' => '3','resource_id' => 'admin/system/config/configswatches','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '464','role_id' => '3','resource_id' => 'admin/system/config/newsletter','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '465','role_id' => '3','resource_id' => 'admin/system/config/downloadable','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '466','role_id' => '3','resource_id' => 'admin/system/config/persistent','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '467','role_id' => '3','resource_id' => 'admin/system/config/marketplace','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '468','role_id' => '3','resource_id' => 'admin/system/config/moneybookers','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '469','role_id' => '3','resource_id' => 'admin/system/currency','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '470','role_id' => '3','resource_id' => 'admin/system/currency/rates','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '471','role_id' => '3','resource_id' => 'admin/system/currency/symbols','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '472','role_id' => '3','resource_id' => 'admin/system/email_template','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '473','role_id' => '3','resource_id' => 'admin/system/variable','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '474','role_id' => '3','resource_id' => 'admin/system/myaccount','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'allow'),
  array('rule_id' => '475','role_id' => '3','resource_id' => 'admin/system/tools','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '476','role_id' => '3','resource_id' => 'admin/system/tools/backup','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '477','role_id' => '3','resource_id' => 'admin/system/tools/backup/rollback','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '478','role_id' => '3','resource_id' => 'admin/system/tools/compiler','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '479','role_id' => '3','resource_id' => 'admin/system/convert','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '480','role_id' => '3','resource_id' => 'admin/system/convert/gui','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '481','role_id' => '3','resource_id' => 'admin/system/convert/profiles','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '482','role_id' => '3','resource_id' => 'admin/system/convert/import','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '483','role_id' => '3','resource_id' => 'admin/system/convert/export','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '484','role_id' => '3','resource_id' => 'admin/system/cache','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '485','role_id' => '3','resource_id' => 'admin/system/extensions','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '486','role_id' => '3','resource_id' => 'admin/system/extensions/local','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '487','role_id' => '3','resource_id' => 'admin/system/extensions/custom','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '488','role_id' => '3','resource_id' => 'admin/system/adminnotification','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '489','role_id' => '3','resource_id' => 'admin/system/adminnotification/show_toolbar','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '490','role_id' => '3','resource_id' => 'admin/system/adminnotification/show_list','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '491','role_id' => '3','resource_id' => 'admin/system/adminnotification/mark_as_read','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '492','role_id' => '3','resource_id' => 'admin/system/adminnotification/remove','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '493','role_id' => '3','resource_id' => 'admin/system/index','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '494','role_id' => '3','resource_id' => 'admin/system/order_statuses','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '495','role_id' => '3','resource_id' => 'admin/system/api','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '496','role_id' => '3','resource_id' => 'admin/system/api/users','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '497','role_id' => '3','resource_id' => 'admin/system/api/roles','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '498','role_id' => '3','resource_id' => 'admin/system/api/consumer','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '499','role_id' => '3','resource_id' => 'admin/system/api/consumer/edit','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '500','role_id' => '3','resource_id' => 'admin/system/api/consumer/delete','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '501','role_id' => '3','resource_id' => 'admin/system/api/authorizedTokens','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '502','role_id' => '3','resource_id' => 'admin/system/api/oauth_admin_token','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '503','role_id' => '3','resource_id' => 'admin/system/api/rest_roles','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '504','role_id' => '3','resource_id' => 'admin/system/api/rest_roles/add','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '505','role_id' => '3','resource_id' => 'admin/system/api/rest_roles/edit','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '506','role_id' => '3','resource_id' => 'admin/system/api/rest_roles/delete','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '507','role_id' => '3','resource_id' => 'admin/system/api/rest_attributes','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '508','role_id' => '3','resource_id' => 'admin/system/api/rest_attributes/edit','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '509','role_id' => '3','resource_id' => 'admin/global_search','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '510','role_id' => '3','resource_id' => 'admin/customer','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '511','role_id' => '3','resource_id' => 'admin/customer/group','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '512','role_id' => '3','resource_id' => 'admin/customer/manage','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '513','role_id' => '3','resource_id' => 'admin/customer/online','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '514','role_id' => '3','resource_id' => 'admin/cms','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '515','role_id' => '3','resource_id' => 'admin/cms/block','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '516','role_id' => '3','resource_id' => 'admin/cms/page','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '517','role_id' => '3','resource_id' => 'admin/cms/page/save','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '518','role_id' => '3','resource_id' => 'admin/cms/page/delete','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '519','role_id' => '3','resource_id' => 'admin/cms/media_gallery','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '520','role_id' => '3','resource_id' => 'admin/cms/poll','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '521','role_id' => '3','resource_id' => 'admin/cms/widget_instance','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '522','role_id' => '3','resource_id' => 'admin/catalog','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'allow'),
  array('rule_id' => '523','role_id' => '3','resource_id' => 'admin/catalog/attributes','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '524','role_id' => '3','resource_id' => 'admin/catalog/attributes/attributes','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '525','role_id' => '3','resource_id' => 'admin/catalog/attributes/sets','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '526','role_id' => '3','resource_id' => 'admin/catalog/categories','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '527','role_id' => '3','resource_id' => 'admin/catalog/products','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'allow'),
  array('rule_id' => '528','role_id' => '3','resource_id' => 'admin/catalog/update_attributes','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '529','role_id' => '3','resource_id' => 'admin/catalog/urlrewrite','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '530','role_id' => '3','resource_id' => 'admin/catalog/search','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '531','role_id' => '3','resource_id' => 'admin/catalog/reviews_ratings','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '532','role_id' => '3','resource_id' => 'admin/catalog/reviews_ratings/reviews','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '533','role_id' => '3','resource_id' => 'admin/catalog/reviews_ratings/reviews/all','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '534','role_id' => '3','resource_id' => 'admin/catalog/reviews_ratings/reviews/pending','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '535','role_id' => '3','resource_id' => 'admin/catalog/reviews_ratings/ratings','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '536','role_id' => '3','resource_id' => 'admin/catalog/tag','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '537','role_id' => '3','resource_id' => 'admin/catalog/tag/all','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '538','role_id' => '3','resource_id' => 'admin/catalog/tag/pending','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '539','role_id' => '3','resource_id' => 'admin/catalog/sitemap','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '540','role_id' => '3','resource_id' => 'admin/promo','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '541','role_id' => '3','resource_id' => 'admin/promo/catalog','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '542','role_id' => '3','resource_id' => 'admin/promo/quote','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '543','role_id' => '3','resource_id' => 'admin/sales','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '544','role_id' => '3','resource_id' => 'admin/sales/order','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '545','role_id' => '3','resource_id' => 'admin/sales/order/actions','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '546','role_id' => '3','resource_id' => 'admin/sales/order/actions/create','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '547','role_id' => '3','resource_id' => 'admin/sales/order/actions/view','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '548','role_id' => '3','resource_id' => 'admin/sales/order/actions/email','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '549','role_id' => '3','resource_id' => 'admin/sales/order/actions/reorder','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '550','role_id' => '3','resource_id' => 'admin/sales/order/actions/edit','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '551','role_id' => '3','resource_id' => 'admin/sales/order/actions/cancel','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '552','role_id' => '3','resource_id' => 'admin/sales/order/actions/review_payment','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '553','role_id' => '3','resource_id' => 'admin/sales/order/actions/capture','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '554','role_id' => '3','resource_id' => 'admin/sales/order/actions/invoice','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '555','role_id' => '3','resource_id' => 'admin/sales/order/actions/creditmemo','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '556','role_id' => '3','resource_id' => 'admin/sales/order/actions/hold','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '557','role_id' => '3','resource_id' => 'admin/sales/order/actions/unhold','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '558','role_id' => '3','resource_id' => 'admin/sales/order/actions/ship','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '559','role_id' => '3','resource_id' => 'admin/sales/order/actions/comment','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '560','role_id' => '3','resource_id' => 'admin/sales/order/actions/emails','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '561','role_id' => '3','resource_id' => 'admin/sales/invoice','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '562','role_id' => '3','resource_id' => 'admin/sales/shipment','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '563','role_id' => '3','resource_id' => 'admin/sales/creditmemo','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '564','role_id' => '3','resource_id' => 'admin/sales/transactions','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '565','role_id' => '3','resource_id' => 'admin/sales/transactions/fetch','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '566','role_id' => '3','resource_id' => 'admin/sales/recurring_profile','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '567','role_id' => '3','resource_id' => 'admin/sales/billing_agreement','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '568','role_id' => '3','resource_id' => 'admin/sales/billing_agreement/actions','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '569','role_id' => '3','resource_id' => 'admin/sales/billing_agreement/actions/view','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '570','role_id' => '3','resource_id' => 'admin/sales/billing_agreement/actions/manage','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '571','role_id' => '3','resource_id' => 'admin/sales/billing_agreement/actions/use','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '572','role_id' => '3','resource_id' => 'admin/sales/checkoutagreement','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '573','role_id' => '3','resource_id' => 'admin/sales/tax','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '574','role_id' => '3','resource_id' => 'admin/sales/tax/classes_customer','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '575','role_id' => '3','resource_id' => 'admin/sales/tax/classes_product','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '576','role_id' => '3','resource_id' => 'admin/sales/tax/import_export','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '577','role_id' => '3','resource_id' => 'admin/sales/tax/rates','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '578','role_id' => '3','resource_id' => 'admin/sales/tax/rules','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '579','role_id' => '3','resource_id' => 'admin/report','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '580','role_id' => '3','resource_id' => 'admin/report/salesroot','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '581','role_id' => '3','resource_id' => 'admin/report/salesroot/paypal_settlement_reports','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '582','role_id' => '3','resource_id' => 'admin/report/salesroot/paypal_settlement_reports/view','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '583','role_id' => '3','resource_id' => 'admin/report/salesroot/paypal_settlement_reports/fetch','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '584','role_id' => '3','resource_id' => 'admin/report/salesroot/sales','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '585','role_id' => '3','resource_id' => 'admin/report/salesroot/tax','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '586','role_id' => '3','resource_id' => 'admin/report/salesroot/shipping','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '587','role_id' => '3','resource_id' => 'admin/report/salesroot/invoiced','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '588','role_id' => '3','resource_id' => 'admin/report/salesroot/refunded','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '589','role_id' => '3','resource_id' => 'admin/report/salesroot/coupons','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '590','role_id' => '3','resource_id' => 'admin/report/shopcart','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '591','role_id' => '3','resource_id' => 'admin/report/shopcart/product','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '592','role_id' => '3','resource_id' => 'admin/report/shopcart/abandoned','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '593','role_id' => '3','resource_id' => 'admin/report/products','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '594','role_id' => '3','resource_id' => 'admin/report/products/bestsellers','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '595','role_id' => '3','resource_id' => 'admin/report/products/sold','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '596','role_id' => '3','resource_id' => 'admin/report/products/viewed','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '597','role_id' => '3','resource_id' => 'admin/report/products/lowstock','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '598','role_id' => '3','resource_id' => 'admin/report/products/downloads','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '599','role_id' => '3','resource_id' => 'admin/report/customers','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '600','role_id' => '3','resource_id' => 'admin/report/customers/accounts','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '601','role_id' => '3','resource_id' => 'admin/report/customers/totals','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '602','role_id' => '3','resource_id' => 'admin/report/customers/orders','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '603','role_id' => '3','resource_id' => 'admin/report/review','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '604','role_id' => '3','resource_id' => 'admin/report/review/customer','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '605','role_id' => '3','resource_id' => 'admin/report/review/product','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '606','role_id' => '3','resource_id' => 'admin/report/tags','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '607','role_id' => '3','resource_id' => 'admin/report/tags/customer','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '608','role_id' => '3','resource_id' => 'admin/report/tags/popular','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '609','role_id' => '3','resource_id' => 'admin/report/tags/product','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '610','role_id' => '3','resource_id' => 'admin/report/search','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '611','role_id' => '3','resource_id' => 'admin/report/statistics','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '612','role_id' => '3','resource_id' => 'admin/newsletter','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '613','role_id' => '3','resource_id' => 'admin/newsletter/problem','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '614','role_id' => '3','resource_id' => 'admin/newsletter/queue','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '615','role_id' => '3','resource_id' => 'admin/newsletter/subscriber','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '616','role_id' => '3','resource_id' => 'admin/newsletter/template','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '617','role_id' => '3','resource_id' => 'admin/page_cache','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '618','role_id' => '3','resource_id' => 'admin/seller_dashboard','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'allow'),
  array('rule_id' => '619','role_id' => '3','resource_id' => 'admin/seller','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'allow'),
  array('rule_id' => '620','role_id' => '3','resource_id' => 'admin/seller/review','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'allow'),
  array('rule_id' => '621','role_id' => '3','resource_id' => 'admin/seller/orders','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'allow'),
  array('rule_id' => '622','role_id' => '3','resource_id' => 'admin/seller/shipment','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'allow'),
  array('rule_id' => '623','role_id' => '3','resource_id' => 'admin/seller/payment','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'allow'),
  array('rule_id' => '624','role_id' => '1','resource_id' => 'admin/seller_dashboard','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '625','role_id' => '1','resource_id' => 'admin/seller_shipping','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '626','role_id' => '1','resource_id' => 'admin/seller_shipping/shippingzone','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '627','role_id' => '1','resource_id' => 'admin/seller/shipment','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '628','role_id' => '1','resource_id' => 'admin/seller','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '629','role_id' => '1','resource_id' => 'admin/seller/orders','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny'),
  array('rule_id' => '630','role_id' => '1','resource_id' => 'admin/seller/review','privileges' => NULL,'assert_id' => '0','role_type' => 'G','permission' => 'deny')
);

/* `magento`.`admin_user` */
$admin_user = array(
  array('user_id' => '1','firstname' => 'John','lastname' => 'Doe','email' => 'ezcenter@protonmail.com','username' => 'admin','password' => 'ff6655539a76504de303bad5e65a1fe9:JaGWuIp0PEpRKRFw9MxYoGOez4Ir2Wph','created' => '2018-02-10 15:59:21','modified' => '2018-02-10 16:22:03','logdate' => '2018-02-10 16:47:29','lognum' => '3','reload_acl_flag' => '0','is_active' => '1','extra' => 'b:0;','rp_token' => NULL,'rp_token_created_at' => NULL),
  array('user_id' => '2','firstname' => 'test','lastname' => 'seller','email' => 'example@example.com','username' => 'testusr','password' => '7e844cc352ce526148d47b20448d24fa:GlZUQ6hKzHH1hXiQ5hIgNMNoqQw8FCAS','created' => '2018-02-10 16:42:16','modified' => '2018-02-10 16:45:13','logdate' => '2018-02-10 16:47:09','lognum' => '1','reload_acl_flag' => '0','is_active' => '1','extra' => 'b:0;','rp_token' => NULL,'rp_token_created_at' => NULL)
);

/* `magento`.`api2_acl_attribute` */
$api2_acl_attribute = array(
);

/* `magento`.`api2_acl_role` */
$api2_acl_role = array(
  array('entity_id' => '1','created_at' => '2018-02-10 09:58:36','updated_at' => NULL,'role_name' => 'Guest'),
  array('entity_id' => '2','created_at' => '2018-02-10 09:58:36','updated_at' => NULL,'role_name' => 'Customer')
);

/* `magento`.`api2_acl_rule` */
$api2_acl_rule = array(
);

/* `magento`.`api2_acl_user` */
$api2_acl_user = array(
);

/* `magento`.`api_assert` */
$api_assert = array(
);

/* `magento`.`api_role` */
$api_role = array(
);

/* `magento`.`api_rule` */
$api_rule = array(
);

/* `magento`.`api_session` */
$api_session = array(
);

/* `magento`.`api_user` */
$api_user = array(
);

/* `magento`.`captcha_log` */
$captcha_log = array(
);

/* `magento`.`cataloginventory_stock` */
$cataloginventory_stock = array(
  array('stock_id' => '1','stock_name' => 'Default')
);

/* `magento`.`cataloginventory_stock_item` */
$cataloginventory_stock_item = array(
);

/* `magento`.`cataloginventory_stock_status` */
$cataloginventory_stock_status = array(
);

/* `magento`.`cataloginventory_stock_status_idx` */
$cataloginventory_stock_status_idx = array(
);

/* `magento`.`cataloginventory_stock_status_tmp` */
$cataloginventory_stock_status_tmp = array(
);

/* `magento`.`catalogrule` */
$catalogrule = array(
);

/* `magento`.`catalogrule_affected_product` */
$catalogrule_affected_product = array(
);

/* `magento`.`catalogrule_customer_group` */
$catalogrule_customer_group = array(
);

/* `magento`.`catalogrule_group_website` */
$catalogrule_group_website = array(
);

/* `magento`.`catalogrule_product` */
$catalogrule_product = array(
);

/* `magento`.`catalogrule_product_price` */
$catalogrule_product_price = array(
);

/* `magento`.`catalogrule_website` */
$catalogrule_website = array(
);

/* `magento`.`catalogsearch_fulltext` */
$catalogsearch_fulltext = array(
);

/* `magento`.`catalogsearch_query` */
$catalogsearch_query = array(
);

/* `magento`.`catalogsearch_result` */
$catalogsearch_result = array(
);

/* `magento`.`catalog_category_anc_categs_index_idx` */
$catalog_category_anc_categs_index_idx = array(
);

/* `magento`.`catalog_category_anc_categs_index_tmp` */
$catalog_category_anc_categs_index_tmp = array(
);

/* `magento`.`catalog_category_anc_products_index_idx` */
$catalog_category_anc_products_index_idx = array(
);

/* `magento`.`catalog_category_anc_products_index_tmp` */
$catalog_category_anc_products_index_tmp = array(
);

/* `magento`.`catalog_category_entity` */
$catalog_category_entity = array(
  array('entity_id' => '1','entity_type_id' => '3','attribute_set_id' => '0','parent_id' => '0','created_at' => '2018-02-10 15:58:40','updated_at' => '2018-02-10 15:58:40','path' => '1','position' => '0','level' => '0','children_count' => '1'),
  array('entity_id' => '2','entity_type_id' => '3','attribute_set_id' => '3','parent_id' => '1','created_at' => '2018-02-10 15:58:40','updated_at' => '2018-02-10 15:58:40','path' => '1/2','position' => '1','level' => '1','children_count' => '0')
);

/* `magento`.`catalog_category_entity_datetime` */
$catalog_category_entity_datetime = array(
);

/* `magento`.`catalog_category_entity_decimal` */
$catalog_category_entity_decimal = array(
);

/* `magento`.`catalog_category_entity_int` */
$catalog_category_entity_int = array(
  array('value_id' => '1','entity_type_id' => '3','attribute_id' => '67','store_id' => '0','entity_id' => '1','value' => '1'),
  array('value_id' => '2','entity_type_id' => '3','attribute_id' => '67','store_id' => '1','entity_id' => '1','value' => '1'),
  array('value_id' => '3','entity_type_id' => '3','attribute_id' => '42','store_id' => '0','entity_id' => '2','value' => '1'),
  array('value_id' => '4','entity_type_id' => '3','attribute_id' => '67','store_id' => '0','entity_id' => '2','value' => '1'),
  array('value_id' => '5','entity_type_id' => '3','attribute_id' => '42','store_id' => '1','entity_id' => '2','value' => '1'),
  array('value_id' => '6','entity_type_id' => '3','attribute_id' => '67','store_id' => '1','entity_id' => '2','value' => '1')
);

/* `magento`.`catalog_category_entity_text` */
$catalog_category_entity_text = array(
  array('value_id' => '1','entity_type_id' => '3','attribute_id' => '65','store_id' => '0','entity_id' => '1','value' => NULL),
  array('value_id' => '2','entity_type_id' => '3','attribute_id' => '65','store_id' => '1','entity_id' => '1','value' => NULL),
  array('value_id' => '3','entity_type_id' => '3','attribute_id' => '65','store_id' => '0','entity_id' => '2','value' => NULL),
  array('value_id' => '4','entity_type_id' => '3','attribute_id' => '65','store_id' => '1','entity_id' => '2','value' => NULL)
);

/* `magento`.`catalog_category_entity_varchar` */
$catalog_category_entity_varchar = array(
  array('value_id' => '1','entity_type_id' => '3','attribute_id' => '41','store_id' => '0','entity_id' => '1','value' => 'Root Catalog'),
  array('value_id' => '2','entity_type_id' => '3','attribute_id' => '41','store_id' => '1','entity_id' => '1','value' => 'Root Catalog'),
  array('value_id' => '3','entity_type_id' => '3','attribute_id' => '43','store_id' => '1','entity_id' => '1','value' => 'root-catalog'),
  array('value_id' => '4','entity_type_id' => '3','attribute_id' => '41','store_id' => '0','entity_id' => '2','value' => 'Default Category'),
  array('value_id' => '5','entity_type_id' => '3','attribute_id' => '41','store_id' => '1','entity_id' => '2','value' => 'Default Category'),
  array('value_id' => '6','entity_type_id' => '3','attribute_id' => '49','store_id' => '1','entity_id' => '2','value' => 'PRODUCTS'),
  array('value_id' => '7','entity_type_id' => '3','attribute_id' => '43','store_id' => '1','entity_id' => '2','value' => 'default-category')
);

/* `magento`.`catalog_category_flat_store_1` */
$catalog_category_flat_store_1 = array(
  array('entity_id' => '1','parent_id' => '0','created_at' => '2018-02-10 15:58:40','updated_at' => '2018-02-10 15:58:40','path' => '1','position' => '0','level' => '0','children_count' => '1','store_id' => '1','all_children' => NULL,'available_sort_by' => NULL,'children' => NULL,'custom_apply_to_products' => NULL,'custom_design' => NULL,'custom_design_from' => NULL,'custom_design_to' => NULL,'custom_layout_update' => NULL,'custom_use_parent_settings' => NULL,'default_sort_by' => NULL,'description' => NULL,'display_mode' => NULL,'filter_price_range' => NULL,'image' => NULL,'include_in_menu' => '1','is_active' => NULL,'is_anchor' => NULL,'landing_page' => NULL,'meta_description' => NULL,'meta_keywords' => NULL,'meta_title' => NULL,'name' => 'Root Catalog','page_layout' => NULL,'path_in_store' => NULL,'url_key' => 'root-catalog','url_path' => NULL),
  array('entity_id' => '2','parent_id' => '1','created_at' => '2018-02-10 15:58:40','updated_at' => '2018-02-10 15:58:40','path' => '1/2','position' => '1','level' => '1','children_count' => '0','store_id' => '1','all_children' => NULL,'available_sort_by' => NULL,'children' => NULL,'custom_apply_to_products' => NULL,'custom_design' => NULL,'custom_design_from' => NULL,'custom_design_to' => NULL,'custom_layout_update' => NULL,'custom_use_parent_settings' => NULL,'default_sort_by' => NULL,'description' => NULL,'display_mode' => 'PRODUCTS','filter_price_range' => NULL,'image' => NULL,'include_in_menu' => '1','is_active' => '1','is_anchor' => NULL,'landing_page' => NULL,'meta_description' => NULL,'meta_keywords' => NULL,'meta_title' => NULL,'name' => 'Default Category','page_layout' => NULL,'path_in_store' => NULL,'url_key' => 'default-category','url_path' => NULL)
);

/* `magento`.`catalog_category_product` */
$catalog_category_product = array(
);

/* `magento`.`catalog_category_product_index` */
$catalog_category_product_index = array(
);

/* `magento`.`catalog_category_product_index_enbl_idx` */
$catalog_category_product_index_enbl_idx = array(
);

/* `magento`.`catalog_category_product_index_enbl_tmp` */
$catalog_category_product_index_enbl_tmp = array(
);

/* `magento`.`catalog_category_product_index_idx` */
$catalog_category_product_index_idx = array(
);

/* `magento`.`catalog_category_product_index_tmp` */
$catalog_category_product_index_tmp = array(
);

/* `magento`.`catalog_compare_item` */
$catalog_compare_item = array(
);

/* `magento`.`catalog_eav_attribute` */
$catalog_eav_attribute = array(
  array('attribute_id' => '41','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '42','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '43','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '44','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '1','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '1','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '45','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '46','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '47','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '48','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '49','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '50','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '51','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '52','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '53','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '54','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '55','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '56','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '57','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '58','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '59','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '60','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '61','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '62','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '63','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '64','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '65','frontend_input_renderer' => 'adminhtml/catalog_category_helper_sortby_available','is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '66','frontend_input_renderer' => 'adminhtml/catalog_category_helper_sortby_default','is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '67','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '68','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '69','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '70','frontend_input_renderer' => 'adminhtml/catalog_category_helper_pricestep','is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '71','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '1','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '1','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '1','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '72','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '1','is_filterable' => '0','is_comparable' => '1','is_visible_on_front' => '0','is_html_allowed_on_front' => '1','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '1','position' => '0','is_wysiwyg_enabled' => '1','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '73','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '1','is_filterable' => '0','is_comparable' => '1','is_visible_on_front' => '0','is_html_allowed_on_front' => '1','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '1','position' => '0','is_wysiwyg_enabled' => '1','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '74','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '1','is_searchable' => '1','is_filterable' => '0','is_comparable' => '1','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '1','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '75','frontend_input_renderer' => NULL,'is_global' => '2','is_visible' => '1','is_searchable' => '1','is_filterable' => '1','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '1','is_configurable' => '1','apply_to' => 'simple,configurable,virtual,bundle,downloadable','is_visible_in_advanced_search' => '1','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '76','frontend_input_renderer' => NULL,'is_global' => '2','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => 'simple,configurable,virtual,bundle,downloadable','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '77','frontend_input_renderer' => NULL,'is_global' => '2','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => 'simple,configurable,virtual,bundle,downloadable','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '78','frontend_input_renderer' => NULL,'is_global' => '2','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => 'simple,configurable,virtual,bundle,downloadable','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '79','frontend_input_renderer' => NULL,'is_global' => '2','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => 'virtual,downloadable','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '80','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => 'simple,bundle','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '81','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '1','is_searchable' => '1','is_filterable' => '1','is_comparable' => '1','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => 'simple','is_visible_in_advanced_search' => '1','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '82','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '83','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '84','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '85','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '86','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '87','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '88','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '89','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '90','frontend_input_renderer' => NULL,'is_global' => '2','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => 'simple,configurable,virtual,bundle,downloadable','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '91','frontend_input_renderer' => NULL,'is_global' => '2','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => 'simple,configurable,virtual,bundle,downloadable','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '92','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '1','is_searchable' => '1','is_filterable' => '1','is_comparable' => '1','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => 'simple','is_visible_in_advanced_search' => '1','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '93','frontend_input_renderer' => NULL,'is_global' => '2','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '94','frontend_input_renderer' => NULL,'is_global' => '2','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '95','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '96','frontend_input_renderer' => NULL,'is_global' => '2','is_visible' => '1','is_searchable' => '1','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '97','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '98','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '99','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => 'simple,configurable,virtual,bundle,downloadable','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '100','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '0','apply_to' => 'simple,virtual','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '101','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '0','apply_to' => 'simple,virtual','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '102','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '103','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '104','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '105','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '106','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '107','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '108','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '109','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '110','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '111','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '112','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '0','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '113','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '0','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '114','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '0','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '115','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '116','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '117','frontend_input_renderer' => NULL,'is_global' => '2','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '0','apply_to' => 'simple,configurable,bundle,grouped','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '118','frontend_input_renderer' => 'adminhtml/catalog_product_helper_form_msrp_enabled','is_global' => '2','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => 'simple,bundle,configurable,virtual,downloadable','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '119','frontend_input_renderer' => 'adminhtml/catalog_product_helper_form_msrp_price','is_global' => '2','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => 'simple,bundle,configurable,virtual,downloadable','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '120','frontend_input_renderer' => NULL,'is_global' => '2','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => 'simple,bundle,configurable,virtual,downloadable','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '121','frontend_input_renderer' => NULL,'is_global' => '2','is_visible' => '1','is_searchable' => '1','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => 'simple,configurable,virtual,downloadable,bundle','is_visible_in_advanced_search' => '1','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '122','frontend_input_renderer' => 'giftmessage/adminhtml_product_helper_form_config','is_global' => '1','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '0','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '123','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '0','apply_to' => 'bundle','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '124','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '0','apply_to' => 'bundle','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '125','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '0','apply_to' => 'bundle','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '126','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '0','apply_to' => 'bundle','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '127','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '0','apply_to' => 'bundle','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '128','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '0','apply_to' => 'downloadable','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '129','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '0','apply_to' => 'downloadable','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '130','frontend_input_renderer' => NULL,'is_global' => '0','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '0','apply_to' => 'downloadable','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '131','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '0','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '1','used_for_sort_by' => '0','is_configurable' => '0','apply_to' => 'downloadable','is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '132','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '133','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0'),
  array('attribute_id' => '134','frontend_input_renderer' => NULL,'is_global' => '1','is_visible' => '1','is_searchable' => '0','is_filterable' => '0','is_comparable' => '0','is_visible_on_front' => '0','is_html_allowed_on_front' => '0','is_used_for_price_rules' => '0','is_filterable_in_search' => '0','used_in_product_listing' => '0','used_for_sort_by' => '0','is_configurable' => '1','apply_to' => NULL,'is_visible_in_advanced_search' => '0','position' => '0','is_wysiwyg_enabled' => '0','is_used_for_promo_rules' => '0')
);

/* `magento`.`catalog_product_bundle_option` */
$catalog_product_bundle_option = array(
);

/* `magento`.`catalog_product_bundle_option_value` */
$catalog_product_bundle_option_value = array(
);

/* `magento`.`catalog_product_bundle_price_index` */
$catalog_product_bundle_price_index = array(
);

/* `magento`.`catalog_product_bundle_selection` */
$catalog_product_bundle_selection = array(
);

/* `magento`.`catalog_product_bundle_selection_price` */
$catalog_product_bundle_selection_price = array(
);

/* `magento`.`catalog_product_bundle_stock_index` */
$catalog_product_bundle_stock_index = array(
);

/* `magento`.`catalog_product_enabled_index` */
$catalog_product_enabled_index = array(
);

/* `magento`.`catalog_product_entity` */
$catalog_product_entity = array(
);

/* `magento`.`catalog_product_entity_datetime` */
$catalog_product_entity_datetime = array(
);

/* `magento`.`catalog_product_entity_decimal` */
$catalog_product_entity_decimal = array(
);

/* `magento`.`catalog_product_entity_gallery` */
$catalog_product_entity_gallery = array(
);

/* `magento`.`catalog_product_entity_group_price` */
$catalog_product_entity_group_price = array(
);

/* `magento`.`catalog_product_entity_int` */
$catalog_product_entity_int = array(
);

/* `magento`.`catalog_product_entity_media_gallery` */
$catalog_product_entity_media_gallery = array(
);

/* `magento`.`catalog_product_entity_media_gallery_value` */
$catalog_product_entity_media_gallery_value = array(
);

/* `magento`.`catalog_product_entity_text` */
$catalog_product_entity_text = array(
);

/* `magento`.`catalog_product_entity_tier_price` */
$catalog_product_entity_tier_price = array(
);

/* `magento`.`catalog_product_entity_varchar` */
$catalog_product_entity_varchar = array(
);

/* `magento`.`catalog_product_flat_1` */
$catalog_product_flat_1 = array(
);

/* `magento`.`catalog_product_index_eav` */
$catalog_product_index_eav = array(
);

/* `magento`.`catalog_product_index_eav_decimal` */
$catalog_product_index_eav_decimal = array(
);

/* `magento`.`catalog_product_index_eav_decimal_idx` */
$catalog_product_index_eav_decimal_idx = array(
);

/* `magento`.`catalog_product_index_eav_decimal_tmp` */
$catalog_product_index_eav_decimal_tmp = array(
);

/* `magento`.`catalog_product_index_eav_idx` */
$catalog_product_index_eav_idx = array(
);

/* `magento`.`catalog_product_index_eav_tmp` */
$catalog_product_index_eav_tmp = array(
);

/* `magento`.`catalog_product_index_group_price` */
$catalog_product_index_group_price = array(
);

/* `magento`.`catalog_product_index_price` */
$catalog_product_index_price = array(
);

/* `magento`.`catalog_product_index_price_bundle_idx` */
$catalog_product_index_price_bundle_idx = array(
);

/* `magento`.`catalog_product_index_price_bundle_opt_idx` */
$catalog_product_index_price_bundle_opt_idx = array(
);

/* `magento`.`catalog_product_index_price_bundle_opt_tmp` */
$catalog_product_index_price_bundle_opt_tmp = array(
);

/* `magento`.`catalog_product_index_price_bundle_sel_idx` */
$catalog_product_index_price_bundle_sel_idx = array(
);

/* `magento`.`catalog_product_index_price_bundle_sel_tmp` */
$catalog_product_index_price_bundle_sel_tmp = array(
);

/* `magento`.`catalog_product_index_price_bundle_tmp` */
$catalog_product_index_price_bundle_tmp = array(
);

/* `magento`.`catalog_product_index_price_cfg_opt_agr_idx` */
$catalog_product_index_price_cfg_opt_agr_idx = array(
);

/* `magento`.`catalog_product_index_price_cfg_opt_agr_tmp` */
$catalog_product_index_price_cfg_opt_agr_tmp = array(
);

/* `magento`.`catalog_product_index_price_cfg_opt_idx` */
$catalog_product_index_price_cfg_opt_idx = array(
);

/* `magento`.`catalog_product_index_price_cfg_opt_tmp` */
$catalog_product_index_price_cfg_opt_tmp = array(
);

/* `magento`.`catalog_product_index_price_downlod_idx` */
$catalog_product_index_price_downlod_idx = array(
);

/* `magento`.`catalog_product_index_price_downlod_tmp` */
$catalog_product_index_price_downlod_tmp = array(
);

/* `magento`.`catalog_product_index_price_final_idx` */
$catalog_product_index_price_final_idx = array(
);

/* `magento`.`catalog_product_index_price_final_tmp` */
$catalog_product_index_price_final_tmp = array(
);

/* `magento`.`catalog_product_index_price_idx` */
$catalog_product_index_price_idx = array(
);

/* `magento`.`catalog_product_index_price_opt_agr_idx` */
$catalog_product_index_price_opt_agr_idx = array(
);

/* `magento`.`catalog_product_index_price_opt_agr_tmp` */
$catalog_product_index_price_opt_agr_tmp = array(
);

/* `magento`.`catalog_product_index_price_opt_idx` */
$catalog_product_index_price_opt_idx = array(
);

/* `magento`.`catalog_product_index_price_opt_tmp` */
$catalog_product_index_price_opt_tmp = array(
);

/* `magento`.`catalog_product_index_price_tmp` */
$catalog_product_index_price_tmp = array(
);

/* `magento`.`catalog_product_index_tier_price` */
$catalog_product_index_tier_price = array(
);

/* `magento`.`catalog_product_index_website` */
$catalog_product_index_website = array(
  array('website_id' => '1','website_date' => '2018-02-10','rate' => '1')
);

/* `magento`.`catalog_product_link` */
$catalog_product_link = array(
);

/* `magento`.`catalog_product_link_attribute` */
$catalog_product_link_attribute = array(
  array('product_link_attribute_id' => '1','link_type_id' => '1','product_link_attribute_code' => 'position','data_type' => 'int'),
  array('product_link_attribute_id' => '2','link_type_id' => '3','product_link_attribute_code' => 'position','data_type' => 'int'),
  array('product_link_attribute_id' => '3','link_type_id' => '3','product_link_attribute_code' => 'qty','data_type' => 'decimal'),
  array('product_link_attribute_id' => '4','link_type_id' => '4','product_link_attribute_code' => 'position','data_type' => 'int'),
  array('product_link_attribute_id' => '5','link_type_id' => '5','product_link_attribute_code' => 'position','data_type' => 'int')
);

/* `magento`.`catalog_product_link_attribute_decimal` */
$catalog_product_link_attribute_decimal = array(
);

/* `magento`.`catalog_product_link_attribute_int` */
$catalog_product_link_attribute_int = array(
);

/* `magento`.`catalog_product_link_attribute_varchar` */
$catalog_product_link_attribute_varchar = array(
);

/* `magento`.`catalog_product_link_type` */
$catalog_product_link_type = array(
  array('link_type_id' => '1','code' => 'relation'),
  array('link_type_id' => '3','code' => 'super'),
  array('link_type_id' => '4','code' => 'up_sell'),
  array('link_type_id' => '5','code' => 'cross_sell')
);

/* `magento`.`catalog_product_option` */
$catalog_product_option = array(
);

/* `magento`.`catalog_product_option_price` */
$catalog_product_option_price = array(
);

/* `magento`.`catalog_product_option_title` */
$catalog_product_option_title = array(
);

/* `magento`.`catalog_product_option_type_price` */
$catalog_product_option_type_price = array(
);

/* `magento`.`catalog_product_option_type_title` */
$catalog_product_option_type_title = array(
);

/* `magento`.`catalog_product_option_type_value` */
$catalog_product_option_type_value = array(
);

/* `magento`.`catalog_product_relation` */
$catalog_product_relation = array(
);

/* `magento`.`catalog_product_super_attribute` */
$catalog_product_super_attribute = array(
);

/* `magento`.`catalog_product_super_attribute_label` */
$catalog_product_super_attribute_label = array(
);

/* `magento`.`catalog_product_super_attribute_pricing` */
$catalog_product_super_attribute_pricing = array(
);

/* `magento`.`catalog_product_super_link` */
$catalog_product_super_link = array(
);

/* `magento`.`catalog_product_website` */
$catalog_product_website = array(
);

/* `magento`.`checkout_agreement` */
$checkout_agreement = array(
);

/* `magento`.`checkout_agreement_store` */
$checkout_agreement_store = array(
);

/* `magento`.`cms_block` */
$cms_block = array(
  array('block_id' => '1','title' => 'Footer Links','identifier' => 'footer_links','content' => '
<ul>
    <li><a href="{{store direct_url="about-magento-demo-store"}}">About Us</a></li>
    <li><a href="{{store direct_url="customer-service"}}">Customer Service</a></li>
<li class="last privacy"><a href="{{store direct_url="privacy-policy-cookie-restriction-mode"}}">Privacy Policy</a></li>
</ul>','creation_time' => '2018-02-10 15:58:40','update_time' => '2018-02-10 15:58:40','is_active' => '1'),
  array('block_id' => '2','title' => 'Footer Links Company','identifier' => 'footer_links_company','content' => '
<div class="links">
    <div class="block-title">
        <strong><span>Company</span></strong>
    </div>
    <ul>
        <li><a href="{{store url=""}}about-magento-demo-store/">About Us</a></li>
        <li><a href="{{store url=""}}contacts/">Contact Us</a></li>
        <li><a href="{{store url=""}}customer-service/">Customer Service</a></li>
        <li><a href="{{store url=""}}privacy-policy-cookie-restriction-mode/">Privacy Policy</a></li>
    </ul>
</div>','creation_time' => '2018-02-10 15:58:40','update_time' => '2018-02-10 15:58:40','is_active' => '1'),
  array('block_id' => '3','title' => 'Cookie restriction notice','identifier' => 'cookie_restriction_notice_block','content' => '<p>This website requires cookies to provide all of its features. For more information on what data is contained in the cookies, please see our <a href="{{store direct_url="privacy-policy-cookie-restriction-mode"}}">Privacy Policy page</a>. To accept cookies from this site, please click the Allow button below.</p>','creation_time' => '2018-02-10 15:58:40','update_time' => '2018-02-10 15:58:40','is_active' => '1')
);

/* `magento`.`cms_block_store` */
$cms_block_store = array(
  array('block_id' => '1','store_id' => '0'),
  array('block_id' => '2','store_id' => '0'),
  array('block_id' => '3','store_id' => '0')
);

/* `magento`.`cms_page` */
$cms_page = array(
  array('page_id' => '1','title' => '404 Not Found 1','root_template' => 'two_columns_right','meta_keywords' => 'Page keywords','meta_description' => 'Page description','identifier' => 'no-route','content_heading' => NULL,'content' => '
<div class="page-title"><h1>Whoops, our bad...</h1></div>
<dl>
    <dt>The page you requested was not found, and we have a fine guess why.</dt>
    <dd>
        <ul class="disc">
            <li>If you typed the URL directly, please make sure the spelling is correct.</li>
            <li>If you clicked on a link to get here, the link is outdated.</li>
        </ul>
    </dd>
</dl>
<dl>
    <dt>What can you do?</dt>
    <dd>Have no fear, help is near! There are many ways you can get back on track with Magento Store.</dd>
    <dd>
        <ul class="disc">
            <li><a href="#" onclick="history.go(-1); return false;">Go back</a> to the previous page.</li>
            <li>Use the search bar at the top of the page to search for your products.</li>
            <li>Follow these links to get you back on track!<br /><a href="{{store url=""}}">Store Home</a>
            <span class="separator">|</span> <a href="{{store url="customer/account"}}">My Account</a></li>
        </ul>
    </dd>
</dl>
','creation_time' => '2018-02-10 15:58:40','update_time' => '2018-02-10 15:58:40','is_active' => '1','sort_order' => '0','layout_update_xml' => NULL,'custom_theme' => NULL,'custom_root_template' => NULL,'custom_layout_update_xml' => NULL,'custom_theme_from' => NULL,'custom_theme_to' => NULL),
  array('page_id' => '2','title' => 'Home page','root_template' => 'two_columns_right','meta_keywords' => NULL,'meta_description' => NULL,'identifier' => 'home','content_heading' => NULL,'content' => '<div class="page-title"><h2>Home Page</h2></div>','creation_time' => '2018-02-10 15:58:40','update_time' => '2018-02-10 15:58:41','is_active' => '1','sort_order' => '0','layout_update_xml' => '<!--<reference name="content">
        <block type="catalog/product_new" name="home.catalog.product.new" alias="product_new" template="catalog/product/new.phtml" after="cms_page">
            <action method="addPriceBlockType">
                <type>bundle</type>
                <block>bundle/catalog_product_price</block>
                <template>bundle/catalog/product/price.phtml</template>
            </action>
        </block>
        <block type="reports/product_viewed" name="home.reports.product.viewed" alias="product_viewed" template="reports/home_product_viewed.phtml" after="product_new">
            <action method="addPriceBlockType">
                <type>bundle</type>
                <block>bundle/catalog_product_price</block>
                <template>bundle/catalog/product/price.phtml</template>
            </action>
        </block>
        <block type="reports/product_compared" name="home.reports.product.compared" template="reports/home_product_compared.phtml" after="product_viewed">
            <action method="addPriceBlockType">
                <type>bundle</type>
                <block>bundle/catalog_product_price</block>
                <template>bundle/catalog/product/price.phtml</template>
            </action>
        </block>
    </reference>
    <reference name="right">
        <action method="unsetChild"><alias>right.reports.product.viewed</alias></action>
        <action method="unsetChild"><alias>right.reports.product.compared</alias></action>
    </reference>-->','custom_theme' => NULL,'custom_root_template' => NULL,'custom_layout_update_xml' => NULL,'custom_theme_from' => NULL,'custom_theme_to' => NULL),
  array('page_id' => '3','title' => 'About Us','root_template' => 'two_columns_right','meta_keywords' => NULL,'meta_description' => NULL,'identifier' => 'about-magento-demo-store','content_heading' => NULL,'content' => '
<div class="page-title">
    <h1>About Magento Store</h1>
</div>
<div class="col3-set">
<div class="col-1"><p style="line-height:1.2em;"><small>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
Morbi luctus. Duis lobortis. Nulla nec velit. Mauris pulvinar erat non massa. Suspendisse tortor turpis, porta nec,
tempus vitae, iaculis semper, pede.</small></p>
<p style="color:#888; font:1.2em/1.4em georgia, serif;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
Morbi luctus. Duis lobortis. Nulla nec velit. Mauris pulvinar erat non massa. Suspendisse tortor turpis,
porta nec, tempus vitae, iaculis semper, pede. Cras vel libero id lectus rhoncus porta.</p></div>
<div class="col-2">
<p><strong style="color:#de036f;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi luctus.
Duis lobortis. Nulla nec velit.</strong></p>
<p>Vivamus tortor nisl, lobortis in, faucibus et, tempus at, dui. Nunc risus. Proin scelerisque augue. Nam ullamcorper.
Phasellus id massa. Pellentesque nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada
fames ac turpis egestas. Nunc augue. Aenean sed justo non leo vehicula laoreet. Praesent ipsum libero, auctor ac,
tempus nec, tempor nec, justo. </p>
<p>Maecenas ullamcorper, odio vel tempus egestas, dui orci faucibus orci, sit amet aliquet lectus dolor et quam.
Pellentesque consequat luctus purus. Nunc et risus. Etiam a nibh. Phasellus dignissim metus eget nisi.
Vestibulum sapien dolor, aliquet nec, porta ac, malesuada a, libero. Praesent feugiat purus eget est.
Nulla facilisi. Vestibulum tincidunt sapien eu velit. Mauris purus. Maecenas eget mauris eu orci accumsan feugiat.
Pellentesque eget velit. Nunc tincidunt.</p></div>
<div class="col-3">
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi luctus. Duis lobortis. Nulla nec velit.
Mauris pulvinar erat non massa. Suspendisse tortor turpis, porta nec, tempus vitae, iaculis semper, pede.
Cras vel libero id lectus rhoncus porta. Suspendisse convallis felis ac enim. Vivamus tortor nisl, lobortis in,
faucibus et, tempus at, dui. Nunc risus. Proin scelerisque augue. Nam ullamcorper </p>
<p><strong style="color:#de036f;">Maecenas ullamcorper, odio vel tempus egestas, dui orci faucibus orci,
sit amet aliquet lectus dolor et quam. Pellentesque consequat luctus purus.</strong></p>
<p>Nunc et risus. Etiam a nibh. Phasellus dignissim metus eget nisi.</p>
<div class="divider"></div>
<p>To all of you, from all of us at Magento Store - Thank you and Happy eCommerce!</p>
<p style="line-height:1.2em;"><strong style="font:italic 2em Georgia, serif;">John Doe</strong><br />
<small>Some important guy</small></p></div>
</div>','creation_time' => '2018-02-10 15:58:40','update_time' => '2018-02-10 15:58:40','is_active' => '1','sort_order' => '0','layout_update_xml' => NULL,'custom_theme' => NULL,'custom_root_template' => NULL,'custom_layout_update_xml' => NULL,'custom_theme_from' => NULL,'custom_theme_to' => NULL),
  array('page_id' => '4','title' => 'Customer Service','root_template' => 'three_columns','meta_keywords' => NULL,'meta_description' => NULL,'identifier' => 'customer-service','content_heading' => NULL,'content' => '<div class="page-title">
<h1>Customer Service</h1>
</div>
<ul class="disc">
<li><a href="#answer1">Shipping &amp; Delivery</a></li>
<li><a href="#answer2">Privacy &amp; Security</a></li>
<li><a href="#answer3">Returns &amp; Replacements</a></li>
<li><a href="#answer4">Ordering</a></li>
<li><a href="#answer5">Payment, Pricing &amp; Promotions</a></li>
<li><a href="#answer6">Viewing Orders</a></li>
<li><a href="#answer7">Updating Account Information</a></li>
</ul>
<dl>
<dt id="answer1">Shipping &amp; Delivery</dt>
<dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi luctus. Duis lobortis. Nulla nec velit.
Mauris pulvinar erat non massa. Suspendisse tortor turpis, porta nec, tempus vitae, iaculis semper, pede.
Cras vel libero id lectus rhoncus porta. Suspendisse convallis felis ac enim. Vivamus tortor nisl, lobortis in,
faucibus et, tempus at, dui. Nunc risus. Proin scelerisque augue. Nam ullamcorper. Phasellus id massa.
Pellentesque nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
Nunc augue. Aenean sed justo non leo vehicula laoreet. Praesent ipsum libero, auctor ac, tempus nec, tempor nec,
justo.</dd>
<dt id="answer2">Privacy &amp; Security</dt>
<dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi luctus. Duis lobortis. Nulla nec velit.
Mauris pulvinar erat non massa. Suspendisse tortor turpis, porta nec, tempus vitae, iaculis semper, pede.
Cras vel libero id lectus rhoncus porta. Suspendisse convallis felis ac enim. Vivamus tortor nisl, lobortis in,
faucibus et, tempus at, dui. Nunc risus. Proin scelerisque augue. Nam ullamcorper. Phasellus id massa.
Pellentesque nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
Nunc augue. Aenean sed justo non leo vehicula laoreet. Praesent ipsum libero, auctor ac, tempus nec, tempor nec,
justo.</dd>
<dt id="answer3">Returns &amp; Replacements</dt>
<dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi luctus. Duis lobortis. Nulla nec velit.
Mauris pulvinar erat non massa. Suspendisse tortor turpis, porta nec, tempus vitae, iaculis semper, pede.
Cras vel libero id lectus rhoncus porta. Suspendisse convallis felis ac enim. Vivamus tortor nisl, lobortis in,
faucibus et, tempus at, dui. Nunc risus. Proin scelerisque augue. Nam ullamcorper. Phasellus id massa.
Pellentesque nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
Nunc augue. Aenean sed justo non leo vehicula laoreet. Praesent ipsum libero, auctor ac, tempus nec, tempor nec,
justo.</dd>
<dt id="answer4">Ordering</dt>
<dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi luctus. Duis lobortis. Nulla nec velit.
Mauris pulvinar erat non massa. Suspendisse tortor turpis, porta nec, tempus vitae, iaculis semper, pede.
Cras vel libero id lectus rhoncus porta. Suspendisse convallis felis ac enim. Vivamus tortor nisl, lobortis in,
faucibus et, tempus at, dui. Nunc risus. Proin scelerisque augue. Nam ullamcorper. Phasellus id massa.
Pellentesque nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
Nunc augue. Aenean sed justo non leo vehicula laoreet. Praesent ipsum libero, auctor ac, tempus nec, tempor nec,
justo.</dd>
<dt id="answer5">Payment, Pricing &amp; Promotions</dt>
<dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi luctus. Duis lobortis. Nulla nec velit.
Mauris pulvinar erat non massa. Suspendisse tortor turpis, porta nec, tempus vitae, iaculis semper, pede.
Cras vel libero id lectus rhoncus porta. Suspendisse convallis felis ac enim. Vivamus tortor nisl, lobortis in,
faucibus et, tempus at, dui. Nunc risus. Proin scelerisque augue. Nam ullamcorper. Phasellus id massa.
Pellentesque nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
Nunc augue. Aenean sed justo non leo vehicula laoreet. Praesent ipsum libero, auctor ac, tempus nec, tempor nec,
justo.</dd>
<dt id="answer6">Viewing Orders</dt>
<dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi luctus. Duis lobortis. Nulla nec velit.
Mauris pulvinar erat non massa. Suspendisse tortor turpis, porta nec, tempus vitae, iaculis semper, pede.
Cras vel libero id lectus rhoncus porta. Suspendisse convallis felis ac enim. Vivamus tortor nisl, lobortis in,
faucibus et, tempus at, dui. Nunc risus. Proin scelerisque augue. Nam ullamcorper. Phasellus id massa.
 Pellentesque nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
 Nunc augue. Aenean sed justo non leo vehicula laoreet. Praesent ipsum libero, auctor ac, tempus nec, tempor nec,
 justo.</dd>
<dt id="answer7">Updating Account Information</dt>
<dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi luctus. Duis lobortis. Nulla nec velit.
 Mauris pulvinar erat non massa. Suspendisse tortor turpis, porta nec, tempus vitae, iaculis semper, pede.
 Cras vel libero id lectus rhoncus porta. Suspendisse convallis felis ac enim. Vivamus tortor nisl, lobortis in,
 faucibus et, tempus at, dui. Nunc risus. Proin scelerisque augue. Nam ullamcorper. Phasellus id massa.
 Pellentesque nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
 Nunc augue. Aenean sed justo non leo vehicula laoreet. Praesent ipsum libero, auctor ac, tempus nec, tempor nec,
 justo.</dd>
</dl>','creation_time' => '2018-02-10 15:58:40','update_time' => '2018-02-10 15:58:40','is_active' => '1','sort_order' => '0','layout_update_xml' => NULL,'custom_theme' => NULL,'custom_root_template' => NULL,'custom_layout_update_xml' => NULL,'custom_theme_from' => NULL,'custom_theme_to' => NULL),
  array('page_id' => '5','title' => 'Enable Cookies','root_template' => 'one_column','meta_keywords' => NULL,'meta_description' => NULL,'identifier' => 'enable-cookies','content_heading' => NULL,'content' => '<div class="std">
    <ul class="messages">
        <li class="notice-msg">
            <ul>
                <li>Please enable cookies in your web browser to continue.</li>
            </ul>
        </li>
    </ul>
    <div class="page-title">
        <h1><a name="top"></a>What are Cookies?</h1>
    </div>
    <p>Cookies are short pieces of data that are sent to your computer when you visit a website.
    On later visits, this data is then returned to that website. Cookies allow us to recognize you automatically
    whenever you visit our site so that we can personalize your experience and provide you with better service.
    We also use cookies (and similar browser data, such as Flash cookies) for fraud prevention and other purposes.
     If your web browser is set to refuse cookies from our website, you will not be able to complete a purchase
     or take advantage of certain features of our website, such as storing items in your Shopping Cart or
     receiving personalized recommendations. As a result, we strongly encourage you to configure your web
     browser to accept cookies from our website.</p>
    <h2 class="subtitle">Enabling Cookies</h2>
    <ul class="disc">
        <li><a href="#ie7">Internet Explorer 7.x</a></li>
        <li><a href="#ie6">Internet Explorer 6.x</a></li>
        <li><a href="#firefox">Mozilla/Firefox</a></li>
        <li><a href="#opera">Opera 7.x</a></li>
    </ul>
    <h3><a name="ie7"></a>Internet Explorer 7.x</h3>
    <ol>
        <li>
            <p>Start Internet Explorer</p>
        </li>
        <li>
            <p>Under the <strong>Tools</strong> menu, click <strong>Internet Options</strong></p>
            <p><img src="{{skin url="images/cookies/ie7-1.gif"}}" alt="" /></p>
        </li>
        <li>
            <p>Click the <strong>Privacy</strong> tab</p>
            <p><img src="{{skin url="images/cookies/ie7-2.gif"}}" alt="" /></p>
        </li>
        <li>
            <p>Click the <strong>Advanced</strong> button</p>
            <p><img src="{{skin url="images/cookies/ie7-3.gif"}}" alt="" /></p>
        </li>
        <li>
            <p>Put a check mark in the box for <strong>Override Automatic Cookie Handling</strong>,
            put another check mark in the <strong>Always accept session cookies </strong>box</p>
            <p><img src="{{skin url="images/cookies/ie7-4.gif"}}" alt="" /></p>
        </li>
        <li>
            <p>Click <strong>OK</strong></p>
            <p><img src="{{skin url="images/cookies/ie7-5.gif"}}" alt="" /></p>
        </li>
        <li>
            <p>Click <strong>OK</strong></p>
            <p><img src="{{skin url="images/cookies/ie7-6.gif"}}" alt="" /></p>
        </li>
        <li>
            <p>Restart Internet Explore</p>
        </li>
    </ol>
    <p class="a-top"><a href="#top">Back to Top</a></p>
    <h3><a name="ie6"></a>Internet Explorer 6.x</h3>
    <ol>
        <li>
            <p>Select <strong>Internet Options</strong> from the Tools menu</p>
            <p><img src="{{skin url="images/cookies/ie6-1.gif"}}" alt="" /></p>
        </li>
        <li>
            <p>Click on the <strong>Privacy</strong> tab</p>
        </li>
        <li>
            <p>Click the <strong>Default</strong> button (or manually slide the bar down to <strong>Medium</strong>)
            under <strong>Settings</strong>. Click <strong>OK</strong></p>
            <p><img src="{{skin url="images/cookies/ie6-2.gif"}}" alt="" /></p>
        </li>
    </ol>
    <p class="a-top"><a href="#top">Back to Top</a></p>
    <h3><a name="firefox"></a>Mozilla/Firefox</h3>
    <ol>
        <li>
            <p>Click on the <strong>Tools</strong>-menu in Mozilla</p>
        </li>
        <li>
            <p>Click on the <strong>Options...</strong> item in the menu - a new window open</p>
        </li>
        <li>
            <p>Click on the <strong>Privacy</strong> selection in the left part of the window. (See image below)</p>
            <p><img src="{{skin url="images/cookies/firefox.png"}}" alt="" /></p>
        </li>
        <li>
            <p>Expand the <strong>Cookies</strong> section</p>
        </li>
        <li>
            <p>Check the <strong>Enable cookies</strong> and <strong>Accept cookies normally</strong> checkboxes</p>
        </li>
        <li>
            <p>Save changes by clicking <strong>Ok</strong>.</p>
        </li>
    </ol>
    <p class="a-top"><a href="#top">Back to Top</a></p>
    <h3><a name="opera"></a>Opera 7.x</h3>
    <ol>
        <li>
            <p>Click on the <strong>Tools</strong> menu in Opera</p>
        </li>
        <li>
            <p>Click on the <strong>Preferences...</strong> item in the menu - a new window open</p>
        </li>
        <li>
            <p>Click on the <strong>Privacy</strong> selection near the bottom left of the window. (See image below)</p>
            <p><img src="{{skin url="images/cookies/opera.png"}}" alt="" /></p>
        </li>
        <li>
            <p>The <strong>Enable cookies</strong> checkbox must be checked, and <strong>Accept all cookies</strong>
            should be selected in the &quot;<strong>Normal cookies</strong>&quot; drop-down</p>
        </li>
        <li>
            <p>Save changes by clicking <strong>Ok</strong></p>
        </li>
    </ol>
    <p class="a-top"><a href="#top">Back to Top</a></p>
</div>
','creation_time' => '2018-02-10 15:58:40','update_time' => '2018-02-10 15:58:40','is_active' => '1','sort_order' => '0','layout_update_xml' => NULL,'custom_theme' => NULL,'custom_root_template' => NULL,'custom_layout_update_xml' => NULL,'custom_theme_from' => NULL,'custom_theme_to' => NULL),
  array('page_id' => '6','title' => 'Privacy Policy','root_template' => 'one_column','meta_keywords' => NULL,'meta_description' => NULL,'identifier' => 'privacy-policy-cookie-restriction-mode','content_heading' => 'Privacy Policy','content' => '<p style="color: #ff0000; font-weight: bold; font-size: 13px">
    Please replace this text with you Privacy Policy.
    Please add any additional cookies your website uses below (e.g., Google Analytics)
</p>
<p>
    This privacy policy sets out how {{config path="general/store_information/name"}} uses and protects any information
    that you give {{config path="general/store_information/name"}} when you use this website.
    {{config path="general/store_information/name"}} is committed to ensuring that your privacy is protected.
    Should we ask you to provide certain information by which you can be identified when using this website,
    then you can be assured that it will only be used in accordance with this privacy statement.
    {{config path="general/store_information/name"}} may change this policy from time to time by updating this page.
    You should check this page from time to time to ensure that you are happy with any changes.
</p>
<h2>What we collect</h2>
<p>We may collect the following information:</p>
<ul>
    <li>name</li>
    <li>contact information including email address</li>
    <li>demographic information such as postcode, preferences and interests</li>
    <li>other information relevant to customer surveys and/or offers</li>
</ul>
<p>
    For the exhaustive list of cookies we collect see the <a href="#list">List of cookies we collect</a> section.
</p>
<h2>What we do with the information we gather</h2>
<p>
    We require this information to understand your needs and provide you with a better service,
    and in particular for the following reasons:
</p>
<ul>
    <li>Internal record keeping.</li>
    <li>We may use the information to improve our products and services.</li>
    <li>
        We may periodically send promotional emails about new products, special offers or other information which we
        think you may find interesting using the email address which you have provided.
    </li>
    <li>
        From time to time, we may also use your information to contact you for market research purposes.
        We may contact you by email, phone, fax or mail. We may use the information to customise the website
        according to your interests.
    </li>
</ul>
<h2>Security</h2>
<p>
    We are committed to ensuring that your information is secure. In order to prevent unauthorised access or disclosure,
    we have put in place suitable physical, electronic and managerial procedures to safeguard and secure
    the information we collect online.
</p>
<h2>How we use cookies</h2>
<p>
    A cookie is a small file which asks permission to be placed on your computer\'s hard drive.
    Once you agree, the file is added and the cookie helps analyse web traffic or lets you know when you visit
    a particular site. Cookies allow web applications to respond to you as an individual. The web application
    can tailor its operations to your needs, likes and dislikes by gathering and remembering information about
    your preferences.
</p>
<p>
    We use traffic log cookies to identify which pages are being used. This helps us analyse data about web page traffic
    and improve our website in order to tailor it to customer needs. We only use this information for statistical
    analysis purposes and then the data is removed from the system.
</p>
<p>
    Overall, cookies help us provide you with a better website, by enabling us to monitor which pages you find useful
    and which you do not. A cookie in no way gives us access to your computer or any information about you,
    other than the data you choose to share with us. You can choose to accept or decline cookies.
    Most web browsers automatically accept cookies, but you can usually modify your browser setting
    to decline cookies if you prefer. This may prevent you from taking full advantage of the website.
</p>
<h2>Links to other websites</h2>
<p>
    Our website may contain links to other websites of interest. However, once you have used these links
    to leave our site, you should note that we do not have any control over that other website.
    Therefore, we cannot be responsible for the protection and privacy of any information which you provide whilst
    visiting such sites and such sites are not governed by this privacy statement.
    You should exercise caution and look at the privacy statement applicable to the website in question.
</p>
<h2>Controlling your personal information</h2>
<p>You may choose to restrict the collection or use of your personal information in the following ways:</p>
<ul>
    <li>
        whenever you are asked to fill in a form on the website, look for the box that you can click to indicate
        that you do not want the information to be used by anybody for direct marketing purposes
    </li>
    <li>
        if you have previously agreed to us using your personal information for direct marketing purposes,
        you may change your mind at any time by writing to or emailing us at
        {{config path="trans_email/ident_general/email"}}
    </li>
</ul>
<p>
    We will not sell, distribute or lease your personal information to third parties unless we have your permission
    or are required by law to do so. We may use your personal information to send you promotional information
    about third parties which we think you may find interesting if you tell us that you wish this to happen.
</p>
<p>
    You may request details of personal information which we hold about you under the Data Protection Act 1998.
    A small fee will be payable. If you would like a copy of the information held on you please write to
    {{config path="general/store_information/address"}}.
</p>
<p>
    If you believe that any information we are holding on you is incorrect or incomplete,
    please write to or email us as soon as possible, at the above address.
    We will promptly correct any information found to be incorrect.
</p>
<h2><a name="list"></a>List of cookies we collect</h2>
<p>The table below lists the cookies we collect and what information they store.</p>
<table class="data-table">
    <thead>
        <tr>
            <th>COOKIE name</th>
            <th>COOKIE Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>CART</th>
            <td>The association with your shopping cart.</td>
        </tr>
        <tr>
            <th>CATEGORY_INFO</th>
            <td>Stores the category info on the page, that allows to display pages more quickly.</td>
        </tr>
        <tr>
            <th>COMPARE</th>
            <td>The items that you have in the Compare Products list.</td>
        </tr>
        <tr>
            <th>CURRENCY</th>
            <td>Your preferred currency</td>
        </tr>
        <tr>
            <th>CUSTOMER</th>
            <td>An encrypted version of your customer id with the store.</td>
        </tr>
        <tr>
            <th>CUSTOMER_AUTH</th>
            <td>An indicator if you are currently logged into the store.</td>
        </tr>
        <tr>
            <th>CUSTOMER_INFO</th>
            <td>An encrypted version of the customer group you belong to.</td>
        </tr>
        <tr>
            <th>CUSTOMER_SEGMENT_IDS</th>
            <td>Stores the Customer Segment ID</td>
        </tr>
        <tr>
            <th>EXTERNAL_NO_CACHE</th>
            <td>A flag, which indicates whether caching is disabled or not.</td>
        </tr>
        <tr>
            <th>FRONTEND</th>
            <td>You sesssion ID on the server.</td>
        </tr>
        <tr>
            <th>GUEST-VIEW</th>
            <td>Allows guests to edit their orders.</td>
        </tr>
        <tr>
            <th>LAST_CATEGORY</th>
            <td>The last category you visited.</td>
        </tr>
        <tr>
            <th>LAST_PRODUCT</th>
            <td>The most recent product you have viewed.</td>
        </tr>
        <tr>
            <th>NEWMESSAGE</th>
            <td>Indicates whether a new message has been received.</td>
        </tr>
        <tr>
            <th>NO_CACHE</th>
            <td>Indicates whether it is allowed to use cache.</td>
        </tr>
        <tr>
            <th>PERSISTENT_SHOPPING_CART</th>
            <td>A link to information about your cart and viewing history if you have asked the site.</td>
        </tr>
        <tr>
            <th>POLL</th>
            <td>The ID of any polls you have recently voted in.</td>
        </tr>
        <tr>
            <th>POLLN</th>
            <td>Information on what polls you have voted on.</td>
        </tr>
        <tr>
            <th>RECENTLYCOMPARED</th>
            <td>The items that you have recently compared.            </td>
        </tr>
        <tr>
            <th>STF</th>
            <td>Information on products you have emailed to friends.</td>
        </tr>
        <tr>
            <th>STORE</th>
            <td>The store view or language you have selected.</td>
        </tr>
        <tr>
            <th>USER_ALLOWED_SAVE_COOKIE</th>
            <td>Indicates whether a customer allowed to use cookies.</td>
        </tr>
        <tr>
            <th>VIEWED_PRODUCT_IDS</th>
            <td>The products that you have recently viewed.</td>
        </tr>
        <tr>
            <th>WISHLIST</th>
            <td>An encrypted list of products added to your Wishlist.</td>
        </tr>
        <tr>
            <th>WISHLIST_CNT</th>
            <td>The number of items in your Wishlist.</td>
        </tr>
    </tbody>
</table>','creation_time' => '2018-02-10 15:58:40','update_time' => '2018-02-10 15:58:40','is_active' => '1','sort_order' => '0','layout_update_xml' => NULL,'custom_theme' => NULL,'custom_root_template' => NULL,'custom_layout_update_xml' => NULL,'custom_theme_from' => NULL,'custom_theme_to' => NULL)
);

/* `magento`.`cms_page_store` */
$cms_page_store = array(
  array('page_id' => '1','store_id' => '0'),
  array('page_id' => '2','store_id' => '0'),
  array('page_id' => '3','store_id' => '0'),
  array('page_id' => '4','store_id' => '0'),
  array('page_id' => '5','store_id' => '0'),
  array('page_id' => '6','store_id' => '0')
);

/* `magento`.`core_cache` */
$core_cache = array(
);

/* `magento`.`core_cache_option` */
$core_cache_option = array(
  array('code' => 'block_html','value' => '1'),
  array('code' => 'collections','value' => '1'),
  array('code' => 'config','value' => '1'),
  array('code' => 'config_api','value' => '1'),
  array('code' => 'config_api2','value' => '1'),
  array('code' => 'eav','value' => '1'),
  array('code' => 'layout','value' => '1'),
  array('code' => 'translate','value' => '1')
);

/* `magento`.`core_cache_tag` */
$core_cache_tag = array(
);

/* `magento`.`core_config_data` */
$core_config_data = array(
  array('config_id' => '1','scope' => 'default','scope_id' => '0','path' => 'general/region/display_all','value' => '1'),
  array('config_id' => '2','scope' => 'default','scope_id' => '0','path' => 'general/region/state_required','value' => 'AT,CA,CH,DE,EE,ES,FI,FR,LT,LV,RO,US'),
  array('config_id' => '3','scope' => 'default','scope_id' => '0','path' => 'catalog/category/root_id','value' => '2'),
  array('config_id' => '4','scope' => 'default','scope_id' => '0','path' => 'payment/paypal_express/skip_order_review_step','value' => '1'),
  array('config_id' => '5','scope' => 'default','scope_id' => '0','path' => 'payment/payflow_link/mobile_optimized','value' => '1'),
  array('config_id' => '6','scope' => 'default','scope_id' => '0','path' => 'payment/payflow_advanced/mobile_optimized','value' => '1'),
  array('config_id' => '7','scope' => 'default','scope_id' => '0','path' => 'payment/hosted_pro/mobile_optimized','value' => '1'),
  array('config_id' => '8','scope' => 'default','scope_id' => '0','path' => 'admin/dashboard/enable_charts','value' => '1'),
  array('config_id' => '9','scope' => 'default','scope_id' => '0','path' => 'web/unsecure/base_url','value' => 'http://127.0.0.1/magento/'),
  array('config_id' => '10','scope' => 'default','scope_id' => '0','path' => 'web/secure/base_url','value' => 'http://127.0.0.1/magento/'),
  array('config_id' => '11','scope' => 'default','scope_id' => '0','path' => 'general/locale/code','value' => 'en_US'),
  array('config_id' => '12','scope' => 'default','scope_id' => '0','path' => 'general/locale/timezone','value' => 'America/Los_Angeles'),
  array('config_id' => '13','scope' => 'default','scope_id' => '0','path' => 'currency/options/base','value' => 'USD'),
  array('config_id' => '14','scope' => 'default','scope_id' => '0','path' => 'currency/options/default','value' => 'USD'),
  array('config_id' => '15','scope' => 'default','scope_id' => '0','path' => 'currency/options/allow','value' => 'USD'),
  array('config_id' => '16','scope' => 'default','scope_id' => '0','path' => 'marketplace/seller/role','value' => '3')
);

/* `magento`.`core_email_queue` */
$core_email_queue = array(
);

/* `magento`.`core_email_queue_recipients` */
$core_email_queue_recipients = array(
);

/* `magento`.`core_email_template` */
$core_email_template = array(
);

/* `magento`.`core_flag` */
$core_flag = array(
  array('flag_id' => '1','flag_code' => 'admin_notification_survey','state' => '0','flag_data' => 'a:1:{s:13:"survey_viewed";b:1;}','last_update' => '2018-02-10 15:59:22'),
  array('flag_id' => '2','flag_code' => 'catalog_product_flat','state' => '0','flag_data' => 'a:2:{s:8:"is_built";b:1;s:16:"is_store_built_1";b:1;}','last_update' => '2018-02-10 16:05:47')
);

/* `magento`.`core_layout_link` */
$core_layout_link = array(
);

/* `magento`.`core_layout_update` */
$core_layout_update = array(
);

/* `magento`.`core_resource` */
$core_resource = array(
  array('code' => 'adminnotification_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'admin_setup','version' => '1.6.1.2','data_version' => '1.6.1.2'),
  array('code' => 'api2_setup','version' => '1.0.0.0','data_version' => '1.0.0.0'),
  array('code' => 'api_setup','version' => '1.6.0.1','data_version' => '1.6.0.1'),
  array('code' => 'backup_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'bundle_setup','version' => '1.6.0.0.1','data_version' => '1.6.0.0.1'),
  array('code' => 'captcha_setup','version' => '1.7.0.0.0','data_version' => '1.7.0.0.0'),
  array('code' => 'catalogindex_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'cataloginventory_setup','version' => '1.6.0.0.2','data_version' => '1.6.0.0.2'),
  array('code' => 'catalogrule_setup','version' => '1.6.0.3','data_version' => '1.6.0.3'),
  array('code' => 'catalogsearch_setup','version' => '1.8.2.0','data_version' => '1.8.2.0'),
  array('code' => 'catalog_setup','version' => '1.6.0.0.19.1.5','data_version' => '1.6.0.0.19.1.5'),
  array('code' => 'checkout_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'cms_setup','version' => '1.6.0.0.2','data_version' => '1.6.0.0.2'),
  array('code' => 'compiler_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'contacts_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'core_setup','version' => '1.6.0.7','data_version' => '1.6.0.7'),
  array('code' => 'cron_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'customer_setup','version' => '1.6.2.0.5','data_version' => '1.6.2.0.5'),
  array('code' => 'dataflow_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'directory_setup','version' => '1.6.0.3','data_version' => '1.6.0.3'),
  array('code' => 'downloadable_setup','version' => '1.6.0.0.2','data_version' => '1.6.0.0.2'),
  array('code' => 'eav_setup','version' => '1.6.0.1','data_version' => '1.6.0.1'),
  array('code' => 'giftmessage_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'googleanalytics_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'importexport_setup','version' => '1.6.0.2','data_version' => '1.6.0.2'),
  array('code' => 'index_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'log_setup','version' => '1.6.1.1','data_version' => '1.6.1.1'),
  array('code' => 'marketplaceproductshipping_setup','version' => '1.0.0','data_version' => '1.0.0'),
  array('code' => 'marketplace_setup','version' => '1.1.2','data_version' => '1.1.2'),
  array('code' => 'moneybookers_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'newsletter_setup','version' => '1.6.0.2','data_version' => '1.6.0.2'),
  array('code' => 'oauth_setup','version' => '1.0.0.0','data_version' => '1.0.0.0'),
  array('code' => 'paygate_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'payment_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'paypaluk_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'paypal_setup','version' => '1.6.0.6','data_version' => '1.6.0.6'),
  array('code' => 'persistent_setup','version' => '1.0.0.0','data_version' => '1.0.0.0'),
  array('code' => 'poll_setup','version' => '1.6.0.1','data_version' => '1.6.0.1'),
  array('code' => 'productalert_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'rating_setup','version' => '1.6.0.1','data_version' => '1.6.0.1'),
  array('code' => 'reports_setup','version' => '1.6.0.0.1','data_version' => '1.6.0.0.1'),
  array('code' => 'review_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'rss_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'salesrule_setup','version' => '1.6.0.3','data_version' => '1.6.0.3'),
  array('code' => 'sales_setup','version' => '1.6.0.10','data_version' => '1.6.0.10'),
  array('code' => 'sendfriend_setup','version' => '1.6.0.1','data_version' => '1.6.0.1'),
  array('code' => 'shipping_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'sitemap_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'tag_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'tax_setup','version' => '1.6.0.4','data_version' => '1.6.0.4'),
  array('code' => 'usa_setup','version' => '1.6.0.3','data_version' => '1.6.0.3'),
  array('code' => 'weee_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'widget_setup','version' => '1.6.0.0','data_version' => '1.6.0.0'),
  array('code' => 'wishlist_setup','version' => '1.6.0.0','data_version' => '1.6.0.0')
);

/* `magento`.`core_session` */
$core_session = array(
);

/* `magento`.`core_store` */
$core_store = array(
  array('store_id' => '0','code' => 'admin','website_id' => '0','group_id' => '0','name' => 'Admin','sort_order' => '0','is_active' => '1'),
  array('store_id' => '1','code' => 'default','website_id' => '1','group_id' => '1','name' => 'Default Store View','sort_order' => '0','is_active' => '1')
);

/* `magento`.`core_store_group` */
$core_store_group = array(
  array('group_id' => '0','website_id' => '0','name' => 'Default','root_category_id' => '0','default_store_id' => '0'),
  array('group_id' => '1','website_id' => '1','name' => 'Main Website Store','root_category_id' => '2','default_store_id' => '1')
);

/* `magento`.`core_translate` */
$core_translate = array(
);

/* `magento`.`core_url_rewrite` */
$core_url_rewrite = array(
);

/* `magento`.`core_variable` */
$core_variable = array(
);

/* `magento`.`core_variable_value` */
$core_variable_value = array(
);

/* `magento`.`core_website` */
$core_website = array(
  array('website_id' => '0','code' => 'admin','name' => 'Admin','sort_order' => '0','default_group_id' => '0','is_default' => '0'),
  array('website_id' => '1','code' => 'base','name' => 'Main Website','sort_order' => '0','default_group_id' => '1','is_default' => '1')
);

/* `magento`.`coupon_aggregated` */
$coupon_aggregated = array(
);

/* `magento`.`coupon_aggregated_order` */
$coupon_aggregated_order = array(
);

/* `magento`.`coupon_aggregated_updated` */
$coupon_aggregated_updated = array(
);

/* `magento`.`cron_schedule` */
$cron_schedule = array(
);

/* `magento`.`customer_address_entity` */
$customer_address_entity = array(
);

/* `magento`.`customer_address_entity_datetime` */
$customer_address_entity_datetime = array(
);

/* `magento`.`customer_address_entity_decimal` */
$customer_address_entity_decimal = array(
);

/* `magento`.`customer_address_entity_int` */
$customer_address_entity_int = array(
);

/* `magento`.`customer_address_entity_text` */
$customer_address_entity_text = array(
);

/* `magento`.`customer_address_entity_varchar` */
$customer_address_entity_varchar = array(
);

/* `magento`.`customer_eav_attribute` */
$customer_eav_attribute = array(
  array('attribute_id' => '1','is_visible' => '1','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '1','sort_order' => '10','data_model' => NULL),
  array('attribute_id' => '2','is_visible' => '0','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '1','sort_order' => '0','data_model' => NULL),
  array('attribute_id' => '3','is_visible' => '1','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '1','sort_order' => '20','data_model' => NULL),
  array('attribute_id' => '4','is_visible' => '0','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '0','sort_order' => '30','data_model' => NULL),
  array('attribute_id' => '5','is_visible' => '1','input_filter' => NULL,'multiline_count' => '0','validate_rules' => 'a:2:{s:15:"max_text_length";i:255;s:15:"min_text_length";i:1;}','is_system' => '1','sort_order' => '40','data_model' => NULL),
  array('attribute_id' => '6','is_visible' => '1','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '0','sort_order' => '50','data_model' => NULL),
  array('attribute_id' => '7','is_visible' => '1','input_filter' => NULL,'multiline_count' => '0','validate_rules' => 'a:2:{s:15:"max_text_length";i:255;s:15:"min_text_length";i:1;}','is_system' => '1','sort_order' => '60','data_model' => NULL),
  array('attribute_id' => '8','is_visible' => '0','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '0','sort_order' => '70','data_model' => NULL),
  array('attribute_id' => '9','is_visible' => '1','input_filter' => NULL,'multiline_count' => '0','validate_rules' => 'a:1:{s:16:"input_validation";s:5:"email";}','is_system' => '1','sort_order' => '80','data_model' => NULL),
  array('attribute_id' => '10','is_visible' => '1','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '1','sort_order' => '25','data_model' => NULL),
  array('attribute_id' => '11','is_visible' => '0','input_filter' => 'date','multiline_count' => '0','validate_rules' => 'a:1:{s:16:"input_validation";s:4:"date";}','is_system' => '0','sort_order' => '90','data_model' => NULL),
  array('attribute_id' => '12','is_visible' => '0','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '1','sort_order' => '0','data_model' => NULL),
  array('attribute_id' => '13','is_visible' => '0','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '1','sort_order' => '0','data_model' => NULL),
  array('attribute_id' => '14','is_visible' => '0','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '1','sort_order' => '0','data_model' => NULL),
  array('attribute_id' => '15','is_visible' => '0','input_filter' => NULL,'multiline_count' => '0','validate_rules' => 'a:1:{s:15:"max_text_length";i:255;}','is_system' => '0','sort_order' => '100','data_model' => NULL),
  array('attribute_id' => '16','is_visible' => '0','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '1','sort_order' => '0','data_model' => NULL),
  array('attribute_id' => '17','is_visible' => '0','input_filter' => 'datetime','multiline_count' => '0','validate_rules' => NULL,'is_system' => '0','sort_order' => '0','data_model' => NULL),
  array('attribute_id' => '18','is_visible' => '0','input_filter' => NULL,'multiline_count' => '0','validate_rules' => 'a:0:{}','is_system' => '0','sort_order' => '110','data_model' => NULL),
  array('attribute_id' => '19','is_visible' => '0','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '0','sort_order' => '10','data_model' => NULL),
  array('attribute_id' => '20','is_visible' => '1','input_filter' => NULL,'multiline_count' => '0','validate_rules' => 'a:2:{s:15:"max_text_length";i:255;s:15:"min_text_length";i:1;}','is_system' => '1','sort_order' => '20','data_model' => NULL),
  array('attribute_id' => '21','is_visible' => '1','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '0','sort_order' => '30','data_model' => NULL),
  array('attribute_id' => '22','is_visible' => '1','input_filter' => NULL,'multiline_count' => '0','validate_rules' => 'a:2:{s:15:"max_text_length";i:255;s:15:"min_text_length";i:1;}','is_system' => '1','sort_order' => '40','data_model' => NULL),
  array('attribute_id' => '23','is_visible' => '0','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '0','sort_order' => '50','data_model' => NULL),
  array('attribute_id' => '24','is_visible' => '1','input_filter' => NULL,'multiline_count' => '0','validate_rules' => 'a:2:{s:15:"max_text_length";i:255;s:15:"min_text_length";i:1;}','is_system' => '1','sort_order' => '60','data_model' => NULL),
  array('attribute_id' => '25','is_visible' => '1','input_filter' => NULL,'multiline_count' => '2','validate_rules' => 'a:2:{s:15:"max_text_length";i:255;s:15:"min_text_length";i:1;}','is_system' => '1','sort_order' => '70','data_model' => NULL),
  array('attribute_id' => '26','is_visible' => '1','input_filter' => NULL,'multiline_count' => '0','validate_rules' => 'a:2:{s:15:"max_text_length";i:255;s:15:"min_text_length";i:1;}','is_system' => '1','sort_order' => '80','data_model' => NULL),
  array('attribute_id' => '27','is_visible' => '1','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '1','sort_order' => '90','data_model' => NULL),
  array('attribute_id' => '28','is_visible' => '1','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '1','sort_order' => '100','data_model' => NULL),
  array('attribute_id' => '29','is_visible' => '1','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '1','sort_order' => '100','data_model' => NULL),
  array('attribute_id' => '30','is_visible' => '1','input_filter' => NULL,'multiline_count' => '0','validate_rules' => 'a:0:{}','is_system' => '1','sort_order' => '110','data_model' => 'customer/attribute_data_postcode'),
  array('attribute_id' => '31','is_visible' => '1','input_filter' => NULL,'multiline_count' => '0','validate_rules' => 'a:2:{s:15:"max_text_length";i:255;s:15:"min_text_length";i:1;}','is_system' => '1','sort_order' => '120','data_model' => NULL),
  array('attribute_id' => '32','is_visible' => '1','input_filter' => NULL,'multiline_count' => '0','validate_rules' => 'a:2:{s:15:"max_text_length";i:255;s:15:"min_text_length";i:1;}','is_system' => '1','sort_order' => '130','data_model' => NULL),
  array('attribute_id' => '33','is_visible' => '0','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '1','sort_order' => '0','data_model' => NULL),
  array('attribute_id' => '34','is_visible' => '0','input_filter' => NULL,'multiline_count' => '0','validate_rules' => 'a:1:{s:16:"input_validation";s:4:"date";}','is_system' => '1','sort_order' => '0','data_model' => NULL),
  array('attribute_id' => '35','is_visible' => '1','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '1','sort_order' => '28','data_model' => NULL),
  array('attribute_id' => '36','is_visible' => '1','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '1','sort_order' => '140','data_model' => NULL),
  array('attribute_id' => '37','is_visible' => '0','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '1','sort_order' => '0','data_model' => NULL),
  array('attribute_id' => '38','is_visible' => '0','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '1','sort_order' => '0','data_model' => NULL),
  array('attribute_id' => '39','is_visible' => '0','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '1','sort_order' => '0','data_model' => NULL),
  array('attribute_id' => '40','is_visible' => '0','input_filter' => NULL,'multiline_count' => '0','validate_rules' => NULL,'is_system' => '1','sort_order' => '0','data_model' => NULL)
);

/* `magento`.`customer_eav_attribute_website` */
$customer_eav_attribute_website = array(
);

/* `magento`.`customer_entity` */
$customer_entity = array(
  array('entity_id' => '1','entity_type_id' => '1','attribute_set_id' => '0','website_id' => '1','email' => 'johndoe@example.com','group_id' => '1','increment_id' => NULL,'store_id' => '1','created_at' => '2018-02-10 16:01:51','updated_at' => '2018-02-10 16:01:51','is_active' => '1','disable_auto_group_change' => '0')
);

/* `magento`.`customer_entity_datetime` */
$customer_entity_datetime = array(
);

/* `magento`.`customer_entity_decimal` */
$customer_entity_decimal = array(
);

/* `magento`.`customer_entity_int` */
$customer_entity_int = array(
);

/* `magento`.`customer_entity_text` */
$customer_entity_text = array(
);

/* `magento`.`customer_entity_varchar` */
$customer_entity_varchar = array(
  array('value_id' => '1','entity_type_id' => '1','attribute_id' => '5','entity_id' => '1','value' => 'Test'),
  array('value_id' => '2','entity_type_id' => '1','attribute_id' => '6','entity_id' => '1','value' => NULL),
  array('value_id' => '3','entity_type_id' => '1','attribute_id' => '7','entity_id' => '1','value' => 'User'),
  array('value_id' => '4','entity_type_id' => '1','attribute_id' => '12','entity_id' => '1','value' => 'c3c28e93566264f7371e989406a2d6e9:yk5dW4qoKEzCKRDuWMKDva6IIxr3CMxG'),
  array('value_id' => '5','entity_type_id' => '1','attribute_id' => '3','entity_id' => '1','value' => 'Default Store View')
);

/* `magento`.`customer_flowpassword` */
$customer_flowpassword = array(
);

/* `magento`.`customer_form_attribute` */
$customer_form_attribute = array(
  array('form_code' => 'adminhtml_customer','attribute_id' => '1'),
  array('form_code' => 'adminhtml_customer','attribute_id' => '3'),
  array('form_code' => 'adminhtml_customer','attribute_id' => '4'),
  array('form_code' => 'checkout_register','attribute_id' => '4'),
  array('form_code' => 'customer_account_create','attribute_id' => '4'),
  array('form_code' => 'customer_account_edit','attribute_id' => '4'),
  array('form_code' => 'adminhtml_customer','attribute_id' => '5'),
  array('form_code' => 'checkout_register','attribute_id' => '5'),
  array('form_code' => 'customer_account_create','attribute_id' => '5'),
  array('form_code' => 'customer_account_edit','attribute_id' => '5'),
  array('form_code' => 'adminhtml_customer','attribute_id' => '6'),
  array('form_code' => 'checkout_register','attribute_id' => '6'),
  array('form_code' => 'customer_account_create','attribute_id' => '6'),
  array('form_code' => 'customer_account_edit','attribute_id' => '6'),
  array('form_code' => 'adminhtml_customer','attribute_id' => '7'),
  array('form_code' => 'checkout_register','attribute_id' => '7'),
  array('form_code' => 'customer_account_create','attribute_id' => '7'),
  array('form_code' => 'customer_account_edit','attribute_id' => '7'),
  array('form_code' => 'adminhtml_customer','attribute_id' => '8'),
  array('form_code' => 'checkout_register','attribute_id' => '8'),
  array('form_code' => 'customer_account_create','attribute_id' => '8'),
  array('form_code' => 'customer_account_edit','attribute_id' => '8'),
  array('form_code' => 'adminhtml_checkout','attribute_id' => '9'),
  array('form_code' => 'adminhtml_customer','attribute_id' => '9'),
  array('form_code' => 'checkout_register','attribute_id' => '9'),
  array('form_code' => 'customer_account_create','attribute_id' => '9'),
  array('form_code' => 'customer_account_edit','attribute_id' => '9'),
  array('form_code' => 'adminhtml_checkout','attribute_id' => '10'),
  array('form_code' => 'adminhtml_customer','attribute_id' => '10'),
  array('form_code' => 'adminhtml_checkout','attribute_id' => '11'),
  array('form_code' => 'adminhtml_customer','attribute_id' => '11'),
  array('form_code' => 'checkout_register','attribute_id' => '11'),
  array('form_code' => 'customer_account_create','attribute_id' => '11'),
  array('form_code' => 'customer_account_edit','attribute_id' => '11'),
  array('form_code' => 'adminhtml_checkout','attribute_id' => '15'),
  array('form_code' => 'adminhtml_customer','attribute_id' => '15'),
  array('form_code' => 'checkout_register','attribute_id' => '15'),
  array('form_code' => 'customer_account_create','attribute_id' => '15'),
  array('form_code' => 'customer_account_edit','attribute_id' => '15'),
  array('form_code' => 'adminhtml_customer','attribute_id' => '17'),
  array('form_code' => 'checkout_register','attribute_id' => '17'),
  array('form_code' => 'customer_account_create','attribute_id' => '17'),
  array('form_code' => 'customer_account_edit','attribute_id' => '17'),
  array('form_code' => 'adminhtml_checkout','attribute_id' => '18'),
  array('form_code' => 'adminhtml_customer','attribute_id' => '18'),
  array('form_code' => 'checkout_register','attribute_id' => '18'),
  array('form_code' => 'customer_account_create','attribute_id' => '18'),
  array('form_code' => 'customer_account_edit','attribute_id' => '18'),
  array('form_code' => 'adminhtml_customer_address','attribute_id' => '19'),
  array('form_code' => 'customer_address_edit','attribute_id' => '19'),
  array('form_code' => 'customer_register_address','attribute_id' => '19'),
  array('form_code' => 'adminhtml_customer_address','attribute_id' => '20'),
  array('form_code' => 'customer_address_edit','attribute_id' => '20'),
  array('form_code' => 'customer_register_address','attribute_id' => '20'),
  array('form_code' => 'adminhtml_customer_address','attribute_id' => '21'),
  array('form_code' => 'customer_address_edit','attribute_id' => '21'),
  array('form_code' => 'customer_register_address','attribute_id' => '21'),
  array('form_code' => 'adminhtml_customer_address','attribute_id' => '22'),
  array('form_code' => 'customer_address_edit','attribute_id' => '22'),
  array('form_code' => 'customer_register_address','attribute_id' => '22'),
  array('form_code' => 'adminhtml_customer_address','attribute_id' => '23'),
  array('form_code' => 'customer_address_edit','attribute_id' => '23'),
  array('form_code' => 'customer_register_address','attribute_id' => '23'),
  array('form_code' => 'adminhtml_customer_address','attribute_id' => '24'),
  array('form_code' => 'customer_address_edit','attribute_id' => '24'),
  array('form_code' => 'customer_register_address','attribute_id' => '24'),
  array('form_code' => 'adminhtml_customer_address','attribute_id' => '25'),
  array('form_code' => 'customer_address_edit','attribute_id' => '25'),
  array('form_code' => 'customer_register_address','attribute_id' => '25'),
  array('form_code' => 'adminhtml_customer_address','attribute_id' => '26'),
  array('form_code' => 'customer_address_edit','attribute_id' => '26'),
  array('form_code' => 'customer_register_address','attribute_id' => '26'),
  array('form_code' => 'adminhtml_customer_address','attribute_id' => '27'),
  array('form_code' => 'customer_address_edit','attribute_id' => '27'),
  array('form_code' => 'customer_register_address','attribute_id' => '27'),
  array('form_code' => 'adminhtml_customer_address','attribute_id' => '28'),
  array('form_code' => 'customer_address_edit','attribute_id' => '28'),
  array('form_code' => 'customer_register_address','attribute_id' => '28'),
  array('form_code' => 'adminhtml_customer_address','attribute_id' => '29'),
  array('form_code' => 'customer_address_edit','attribute_id' => '29'),
  array('form_code' => 'customer_register_address','attribute_id' => '29'),
  array('form_code' => 'adminhtml_customer_address','attribute_id' => '30'),
  array('form_code' => 'customer_address_edit','attribute_id' => '30'),
  array('form_code' => 'customer_register_address','attribute_id' => '30'),
  array('form_code' => 'adminhtml_customer_address','attribute_id' => '31'),
  array('form_code' => 'customer_address_edit','attribute_id' => '31'),
  array('form_code' => 'customer_register_address','attribute_id' => '31'),
  array('form_code' => 'adminhtml_customer_address','attribute_id' => '32'),
  array('form_code' => 'customer_address_edit','attribute_id' => '32'),
  array('form_code' => 'customer_register_address','attribute_id' => '32'),
  array('form_code' => 'adminhtml_customer','attribute_id' => '35'),
  array('form_code' => 'adminhtml_customer_address','attribute_id' => '36'),
  array('form_code' => 'customer_address_edit','attribute_id' => '36'),
  array('form_code' => 'customer_register_address','attribute_id' => '36')
);

/* `magento`.`customer_group` */
$customer_group = array(
  array('customer_group_id' => '0','customer_group_code' => 'NOT LOGGED IN','tax_class_id' => '3'),
  array('customer_group_id' => '1','customer_group_code' => 'General','tax_class_id' => '3'),
  array('customer_group_id' => '2','customer_group_code' => 'Wholesale','tax_class_id' => '3'),
  array('customer_group_id' => '3','customer_group_code' => 'Retailer','tax_class_id' => '3')
);

/* `magento`.`dataflow_batch` */
$dataflow_batch = array(
);

/* `magento`.`dataflow_batch_export` */
$dataflow_batch_export = array(
);

/* `magento`.`dataflow_batch_import` */
$dataflow_batch_import = array(
);

/* `magento`.`dataflow_import_data` */
$dataflow_import_data = array(
);

/* `magento`.`dataflow_profile` */
$dataflow_profile = array(
  array('profile_id' => '1','name' => 'Export All Products','created_at' => '2018-02-10 15:58:38','updated_at' => '2018-02-10 15:58:38','actions_xml' => '<action type="catalog/convert_adapter_product" method="load">\\r\\n    <var name="store"><![CDATA[0]]></var>\\r\\n</action>\\r\\n\\r\\n<action type="catalog/convert_parser_product" method="unparse">\\r\\n    <var name="store"><![CDATA[0]]></var>\\r\\n</action>\\r\\n\\r\\n<action type="dataflow/convert_mapper_column" method="map">\\r\\n</action>\\r\\n\\r\\n<action type="dataflow/convert_parser_csv" method="unparse">\\r\\n    <var name="delimiter"><![CDATA[,]]></var>\\r\\n    <var name="enclose"><![CDATA["]]></var>\\r\\n    <var name="fieldnames">true</var>\\r\\n</action>\\r\\n\\r\\n<action type="dataflow/convert_adapter_io" method="save">\\r\\n    <var name="type">file</var>\\r\\n    <var name="path">var/export</var>\\r\\n    <var name="filename"><![CDATA[export_all_products.csv]]></var>\\r\\n</action>\\r\\n\\r\\n','gui_data' => 'a:5:{s:4:"file";a:7:{s:4:"type";s:4:"file";s:8:"filename";s:23:"export_all_products.csv";s:4:"path";s:10:"var/export";s:4:"host";s:0:"";s:4:"user";s:0:"";s:8:"password";s:0:"";s:7:"passive";s:0:"";}s:5:"parse";a:5:{s:4:"type";s:3:"csv";s:12:"single_sheet";s:0:"";s:9:"delimiter";s:1:",";s:7:"enclose";s:1:""";s:10:"fieldnames";s:4:"true";}s:3:"map";a:3:{s:14:"only_specified";s:0:"";s:7:"product";a:2:{s:2:"db";a:0:{}s:4:"file";a:0:{}}s:8:"customer";a:2:{s:2:"db";a:0:{}s:4:"file";a:0:{}}}s:7:"product";a:1:{s:6:"filter";a:8:{s:4:"name";s:0:"";s:3:"sku";s:0:"";s:4:"type";s:1:"0";s:13:"attribute_set";s:0:"";s:5:"price";a:2:{s:4:"from";s:0:"";s:2:"to";s:0:"";}s:3:"qty";a:2:{s:4:"from";s:0:"";s:2:"to";s:0:"";}s:10:"visibility";s:1:"0";s:6:"status";s:1:"0";}}s:8:"customer";a:1:{s:6:"filter";a:10:{s:9:"firstname";s:0:"";s:8:"lastname";s:0:"";s:5:"email";s:0:"";s:5:"group";s:1:"0";s:10:"adressType";s:15:"default_billing";s:9:"telephone";s:0:"";s:8:"postcode";s:0:"";s:7:"country";s:0:"";s:6:"region";s:0:"";s:10:"created_at";a:2:{s:4:"from";s:0:"";s:2:"to";s:0:"";}}}}','direction' => 'export','entity_type' => 'product','store_id' => '0','data_transfer' => 'file'),
  array('profile_id' => '2','name' => 'Export Product Stocks','created_at' => '2018-02-10 15:58:38','updated_at' => '2018-02-10 15:58:38','actions_xml' => '<action type="catalog/convert_adapter_product" method="load">\\r\\n    <var name="store"><![CDATA[0]]></var>\\r\\n</action>\\r\\n\\r\\n<action type="catalog/convert_parser_product" method="unparse">\\r\\n    <var name="store"><![CDATA[0]]></var>\\r\\n</action>\\r\\n\\r\\n<action type="dataflow/convert_mapper_column" method="map">\\r\\n</action>\\r\\n\\r\\n<action type="dataflow/convert_parser_csv" method="unparse">\\r\\n    <var name="delimiter"><![CDATA[,]]></var>\\r\\n    <var name="enclose"><![CDATA["]]></var>\\r\\n    <var name="fieldnames">true</var>\\r\\n</action>\\r\\n\\r\\n<action type="dataflow/convert_adapter_io" method="save">\\r\\n    <var name="type">file</var>\\r\\n    <var name="path">var/export</var>\\r\\n    <var name="filename"><![CDATA[export_all_products.csv]]></var>\\r\\n</action>\\r\\n\\r\\n','gui_data' => 'a:5:{s:4:"file";a:7:{s:4:"type";s:4:"file";s:8:"filename";s:25:"export_product_stocks.csv";s:4:"path";s:10:"var/export";s:4:"host";s:0:"";s:4:"user";s:0:"";s:8:"password";s:0:"";s:7:"passive";s:0:"";}s:5:"parse";a:5:{s:4:"type";s:3:"csv";s:12:"single_sheet";s:0:"";s:9:"delimiter";s:1:",";s:7:"enclose";s:1:""";s:10:"fieldnames";s:4:"true";}s:3:"map";a:3:{s:14:"only_specified";s:4:"true";s:7:"product";a:2:{s:2:"db";a:4:{i:1;s:5:"store";i:2;s:3:"sku";i:3;s:3:"qty";i:4;s:11:"is_in_stock";}s:4:"file";a:4:{i:1;s:5:"store";i:2;s:3:"sku";i:3;s:3:"qty";i:4;s:11:"is_in_stock";}}s:8:"customer";a:2:{s:2:"db";a:0:{}s:4:"file";a:0:{}}}s:7:"product";a:1:{s:6:"filter";a:8:{s:4:"name";s:0:"";s:3:"sku";s:0:"";s:4:"type";s:1:"0";s:13:"attribute_set";s:0:"";s:5:"price";a:2:{s:4:"from";s:0:"";s:2:"to";s:0:"";}s:3:"qty";a:2:{s:4:"from";s:0:"";s:2:"to";s:0:"";}s:10:"visibility";s:1:"0";s:6:"status";s:1:"0";}}s:8:"customer";a:1:{s:6:"filter";a:10:{s:9:"firstname";s:0:"";s:8:"lastname";s:0:"";s:5:"email";s:0:"";s:5:"group";s:1:"0";s:10:"adressType";s:15:"default_billing";s:9:"telephone";s:0:"";s:8:"postcode";s:0:"";s:7:"country";s:0:"";s:6:"region";s:0:"";s:10:"created_at";a:2:{s:4:"from";s:0:"";s:2:"to";s:0:"";}}}}','direction' => 'export','entity_type' => 'product','store_id' => '0','data_transfer' => 'file'),
  array('profile_id' => '3','name' => 'Import All Products','created_at' => '2018-02-10 15:58:38','updated_at' => '2018-02-10 15:58:38','actions_xml' => '<action type="dataflow/convert_parser_csv" method="parse">\\r\\n    <var name="delimiter"><![CDATA[,]]></var>\\r\\n    <var name="enclose"><![CDATA["]]></var>\\r\\n    <var name="fieldnames">true</var>\\r\\n    <var name="store"><![CDATA[0]]></var>\\r\\n    <var name="adapter">catalog/convert_adapter_product</var>\\r\\n    <var name="method">parse</var>\\r\\n</action>','gui_data' => 'a:5:{s:4:"file";a:7:{s:4:"type";s:4:"file";s:8:"filename";s:23:"export_all_products.csv";s:4:"path";s:10:"var/export";s:4:"host";s:0:"";s:4:"user";s:0:"";s:8:"password";s:0:"";s:7:"passive";s:0:"";}s:5:"parse";a:5:{s:4:"type";s:3:"csv";s:12:"single_sheet";s:0:"";s:9:"delimiter";s:1:",";s:7:"enclose";s:1:""";s:10:"fieldnames";s:4:"true";}s:3:"map";a:3:{s:14:"only_specified";s:0:"";s:7:"product";a:2:{s:2:"db";a:0:{}s:4:"file";a:0:{}}s:8:"customer";a:2:{s:2:"db";a:0:{}s:4:"file";a:0:{}}}s:7:"product";a:1:{s:6:"filter";a:8:{s:4:"name";s:0:"";s:3:"sku";s:0:"";s:4:"type";s:1:"0";s:13:"attribute_set";s:0:"";s:5:"price";a:2:{s:4:"from";s:0:"";s:2:"to";s:0:"";}s:3:"qty";a:2:{s:4:"from";s:0:"";s:2:"to";s:0:"";}s:10:"visibility";s:1:"0";s:6:"status";s:1:"0";}}s:8:"customer";a:1:{s:6:"filter";a:10:{s:9:"firstname";s:0:"";s:8:"lastname";s:0:"";s:5:"email";s:0:"";s:5:"group";s:1:"0";s:10:"adressType";s:15:"default_billing";s:9:"telephone";s:0:"";s:8:"postcode";s:0:"";s:7:"country";s:0:"";s:6:"region";s:0:"";s:10:"created_at";a:2:{s:4:"from";s:0:"";s:2:"to";s:0:"";}}}}','direction' => 'import','entity_type' => 'product','store_id' => '0','data_transfer' => 'interactive'),
  array('profile_id' => '4','name' => 'Import Product Stocks','created_at' => '2018-02-10 15:58:38','updated_at' => '2018-02-10 15:58:38','actions_xml' => '<action type="dataflow/convert_parser_csv" method="parse">\\r\\n    <var name="delimiter"><![CDATA[,]]></var>\\r\\n    <var name="enclose"><![CDATA["]]></var>\\r\\n    <var name="fieldnames">true</var>\\r\\n    <var name="store"><![CDATA[0]]></var>\\r\\n    <var name="adapter">catalog/convert_adapter_product</var>\\r\\n    <var name="method">parse</var>\\r\\n</action>','gui_data' => 'a:5:{s:4:"file";a:7:{s:4:"type";s:4:"file";s:8:"filename";s:18:"export_product.csv";s:4:"path";s:10:"var/export";s:4:"host";s:0:"";s:4:"user";s:0:"";s:8:"password";s:0:"";s:7:"passive";s:0:"";}s:5:"parse";a:5:{s:4:"type";s:3:"csv";s:12:"single_sheet";s:0:"";s:9:"delimiter";s:1:",";s:7:"enclose";s:1:""";s:10:"fieldnames";s:4:"true";}s:3:"map";a:3:{s:14:"only_specified";s:0:"";s:7:"product";a:2:{s:2:"db";a:0:{}s:4:"file";a:0:{}}s:8:"customer";a:2:{s:2:"db";a:0:{}s:4:"file";a:0:{}}}s:7:"product";a:1:{s:6:"filter";a:8:{s:4:"name";s:0:"";s:3:"sku";s:0:"";s:4:"type";s:1:"0";s:13:"attribute_set";s:0:"";s:5:"price";a:2:{s:4:"from";s:0:"";s:2:"to";s:0:"";}s:3:"qty";a:2:{s:4:"from";s:0:"";s:2:"to";s:0:"";}s:10:"visibility";s:1:"0";s:6:"status";s:1:"0";}}s:8:"customer";a:1:{s:6:"filter";a:10:{s:9:"firstname";s:0:"";s:8:"lastname";s:0:"";s:5:"email";s:0:"";s:5:"group";s:1:"0";s:10:"adressType";s:15:"default_billing";s:9:"telephone";s:0:"";s:8:"postcode";s:0:"";s:7:"country";s:0:"";s:6:"region";s:0:"";s:10:"created_at";a:2:{s:4:"from";s:0:"";s:2:"to";s:0:"";}}}}','direction' => 'import','entity_type' => 'product','store_id' => '0','data_transfer' => 'interactive'),
  array('profile_id' => '5','name' => 'Export Customers','created_at' => '2018-02-10 15:58:38','updated_at' => '2018-02-10 15:58:38','actions_xml' => '<action type="customer/convert_adapter_customer" method="load">\\r\\n    <var name="store"><![CDATA[0]]></var>\\r\\n    <var name="filter/adressType"><![CDATA[default_billing]]></var>\\r\\n</action>\\r\\n\\r\\n<action type="customer/convert_parser_customer" method="unparse">\\r\\n    <var name="store"><![CDATA[0]]></var>\\r\\n</action>\\r\\n\\r\\n<action type="dataflow/convert_mapper_column" method="map">\\r\\n</action>\\r\\n\\r\\n<action type="dataflow/convert_parser_csv" method="unparse">\\r\\n    <var name="delimiter"><![CDATA[,]]></var>\\r\\n    <var name="enclose"><![CDATA["]]></var>\\r\\n    <var name="fieldnames">true</var>\\r\\n</action>\\r\\n\\r\\n<action type="dataflow/convert_adapter_io" method="save">\\r\\n    <var name="type">file</var>\\r\\n    <var name="path">var/export</var>\\r\\n    <var name="filename"><![CDATA[export_customers.csv]]></var>\\r\\n</action>\\r\\n\\r\\n','gui_data' => 'a:5:{s:4:"file";a:7:{s:4:"type";s:4:"file";s:8:"filename";s:20:"export_customers.csv";s:4:"path";s:10:"var/export";s:4:"host";s:0:"";s:4:"user";s:0:"";s:8:"password";s:0:"";s:7:"passive";s:0:"";}s:5:"parse";a:5:{s:4:"type";s:3:"csv";s:12:"single_sheet";s:0:"";s:9:"delimiter";s:1:",";s:7:"enclose";s:1:""";s:10:"fieldnames";s:4:"true";}s:3:"map";a:3:{s:14:"only_specified";s:0:"";s:7:"product";a:2:{s:2:"db";a:0:{}s:4:"file";a:0:{}}s:8:"customer";a:2:{s:2:"db";a:0:{}s:4:"file";a:0:{}}}s:7:"product";a:1:{s:6:"filter";a:8:{s:4:"name";s:0:"";s:3:"sku";s:0:"";s:4:"type";s:1:"0";s:13:"attribute_set";s:0:"";s:5:"price";a:2:{s:4:"from";s:0:"";s:2:"to";s:0:"";}s:3:"qty";a:2:{s:4:"from";s:0:"";s:2:"to";s:0:"";}s:10:"visibility";s:1:"0";s:6:"status";s:1:"0";}}s:8:"customer";a:1:{s:6:"filter";a:10:{s:9:"firstname";s:0:"";s:8:"lastname";s:0:"";s:5:"email";s:0:"";s:5:"group";s:1:"0";s:10:"adressType";s:15:"default_billing";s:9:"telephone";s:0:"";s:8:"postcode";s:0:"";s:7:"country";s:0:"";s:6:"region";s:0:"";s:10:"created_at";a:2:{s:4:"from";s:0:"";s:2:"to";s:0:"";}}}}','direction' => 'export','entity_type' => 'customer','store_id' => '0','data_transfer' => 'file'),
  array('profile_id' => '6','name' => 'Import Customers','created_at' => '2018-02-10 15:58:38','updated_at' => '2018-02-10 15:58:38','actions_xml' => '<action type="dataflow/convert_parser_csv" method="parse">\\r\\n    <var name="delimiter"><![CDATA[,]]></var>\\r\\n    <var name="enclose"><![CDATA["]]></var>\\r\\n    <var name="fieldnames">true</var>\\r\\n    <var name="store"><![CDATA[0]]></var>\\r\\n    <var name="adapter">customer/convert_adapter_customer</var>\\r\\n    <var name="method">parse</var>\\r\\n</action>','gui_data' => 'a:5:{s:4:"file";a:7:{s:4:"type";s:4:"file";s:8:"filename";s:19:"export_customer.csv";s:4:"path";s:10:"var/export";s:4:"host";s:0:"";s:4:"user";s:0:"";s:8:"password";s:0:"";s:7:"passive";s:0:"";}s:5:"parse";a:5:{s:4:"type";s:3:"csv";s:12:"single_sheet";s:0:"";s:9:"delimiter";s:1:",";s:7:"enclose";s:1:""";s:10:"fieldnames";s:4:"true";}s:3:"map";a:3:{s:14:"only_specified";s:0:"";s:7:"product";a:2:{s:2:"db";a:0:{}s:4:"file";a:0:{}}s:8:"customer";a:2:{s:2:"db";a:0:{}s:4:"file";a:0:{}}}s:7:"product";a:1:{s:6:"filter";a:8:{s:4:"name";s:0:"";s:3:"sku";s:0:"";s:4:"type";s:1:"0";s:13:"attribute_set";s:0:"";s:5:"price";a:2:{s:4:"from";s:0:"";s:2:"to";s:0:"";}s:3:"qty";a:2:{s:4:"from";s:0:"";s:2:"to";s:0:"";}s:10:"visibility";s:1:"0";s:6:"status";s:1:"0";}}s:8:"customer";a:1:{s:6:"filter";a:10:{s:9:"firstname";s:0:"";s:8:"lastname";s:0:"";s:5:"email";s:0:"";s:5:"group";s:1:"0";s:10:"adressType";s:15:"default_billing";s:9:"telephone";s:0:"";s:8:"postcode";s:0:"";s:7:"country";s:0:"";s:6:"region";s:0:"";s:10:"created_at";a:2:{s:4:"from";s:0:"";s:2:"to";s:0:"";}}}}','direction' => 'import','entity_type' => 'customer','store_id' => '0','data_transfer' => 'interactive')
);

/* `magento`.`dataflow_profile_history` */
$dataflow_profile_history = array(
  array('history_id' => '1','profile_id' => '1','action_code' => 'create','user_id' => '0','performed_at' => '2018-02-10 15:58:38'),
  array('history_id' => '2','profile_id' => '2','action_code' => 'create','user_id' => '0','performed_at' => '2018-02-10 15:58:38'),
  array('history_id' => '3','profile_id' => '3','action_code' => 'create','user_id' => '0','performed_at' => '2018-02-10 15:58:38'),
  array('history_id' => '4','profile_id' => '4','action_code' => 'create','user_id' => '0','performed_at' => '2018-02-10 15:58:38'),
  array('history_id' => '5','profile_id' => '5','action_code' => 'create','user_id' => '0','performed_at' => '2018-02-10 15:58:38'),
  array('history_id' => '6','profile_id' => '6','action_code' => 'create','user_id' => '0','performed_at' => '2018-02-10 15:58:38')
);

/* `magento`.`dataflow_session` */
$dataflow_session = array(
);

/* `magento`.`design_change` */
$design_change = array(
);

/* `magento`.`directory_country` */
$directory_country = array(
  array('country_id' => 'AD','iso2_code' => 'AD','iso3_code' => 'AND'),
  array('country_id' => 'AE','iso2_code' => 'AE','iso3_code' => 'ARE'),
  array('country_id' => 'AF','iso2_code' => 'AF','iso3_code' => 'AFG'),
  array('country_id' => 'AG','iso2_code' => 'AG','iso3_code' => 'ATG'),
  array('country_id' => 'AI','iso2_code' => 'AI','iso3_code' => 'AIA'),
  array('country_id' => 'AL','iso2_code' => 'AL','iso3_code' => 'ALB'),
  array('country_id' => 'AM','iso2_code' => 'AM','iso3_code' => 'ARM'),
  array('country_id' => 'AN','iso2_code' => 'AN','iso3_code' => 'ANT'),
  array('country_id' => 'AO','iso2_code' => 'AO','iso3_code' => 'AGO'),
  array('country_id' => 'AQ','iso2_code' => 'AQ','iso3_code' => 'ATA'),
  array('country_id' => 'AR','iso2_code' => 'AR','iso3_code' => 'ARG'),
  array('country_id' => 'AS','iso2_code' => 'AS','iso3_code' => 'ASM'),
  array('country_id' => 'AT','iso2_code' => 'AT','iso3_code' => 'AUT'),
  array('country_id' => 'AU','iso2_code' => 'AU','iso3_code' => 'AUS'),
  array('country_id' => 'AW','iso2_code' => 'AW','iso3_code' => 'ABW'),
  array('country_id' => 'AX','iso2_code' => 'AX','iso3_code' => 'ALA'),
  array('country_id' => 'AZ','iso2_code' => 'AZ','iso3_code' => 'AZE'),
  array('country_id' => 'BA','iso2_code' => 'BA','iso3_code' => 'BIH'),
  array('country_id' => 'BB','iso2_code' => 'BB','iso3_code' => 'BRB'),
  array('country_id' => 'BD','iso2_code' => 'BD','iso3_code' => 'BGD'),
  array('country_id' => 'BE','iso2_code' => 'BE','iso3_code' => 'BEL'),
  array('country_id' => 'BF','iso2_code' => 'BF','iso3_code' => 'BFA'),
  array('country_id' => 'BG','iso2_code' => 'BG','iso3_code' => 'BGR'),
  array('country_id' => 'BH','iso2_code' => 'BH','iso3_code' => 'BHR'),
  array('country_id' => 'BI','iso2_code' => 'BI','iso3_code' => 'BDI'),
  array('country_id' => 'BJ','iso2_code' => 'BJ','iso3_code' => 'BEN'),
  array('country_id' => 'BL','iso2_code' => 'BL','iso3_code' => 'BLM'),
  array('country_id' => 'BM','iso2_code' => 'BM','iso3_code' => 'BMU'),
  array('country_id' => 'BN','iso2_code' => 'BN','iso3_code' => 'BRN'),
  array('country_id' => 'BO','iso2_code' => 'BO','iso3_code' => 'BOL'),
  array('country_id' => 'BR','iso2_code' => 'BR','iso3_code' => 'BRA'),
  array('country_id' => 'BS','iso2_code' => 'BS','iso3_code' => 'BHS'),
  array('country_id' => 'BT','iso2_code' => 'BT','iso3_code' => 'BTN'),
  array('country_id' => 'BV','iso2_code' => 'BV','iso3_code' => 'BVT'),
  array('country_id' => 'BW','iso2_code' => 'BW','iso3_code' => 'BWA'),
  array('country_id' => 'BY','iso2_code' => 'BY','iso3_code' => 'BLR'),
  array('country_id' => 'BZ','iso2_code' => 'BZ','iso3_code' => 'BLZ'),
  array('country_id' => 'CA','iso2_code' => 'CA','iso3_code' => 'CAN'),
  array('country_id' => 'CC','iso2_code' => 'CC','iso3_code' => 'CCK'),
  array('country_id' => 'CD','iso2_code' => 'CD','iso3_code' => 'COD'),
  array('country_id' => 'CF','iso2_code' => 'CF','iso3_code' => 'CAF'),
  array('country_id' => 'CG','iso2_code' => 'CG','iso3_code' => 'COG'),
  array('country_id' => 'CH','iso2_code' => 'CH','iso3_code' => 'CHE'),
  array('country_id' => 'CI','iso2_code' => 'CI','iso3_code' => 'CIV'),
  array('country_id' => 'CK','iso2_code' => 'CK','iso3_code' => 'COK'),
  array('country_id' => 'CL','iso2_code' => 'CL','iso3_code' => 'CHL'),
  array('country_id' => 'CM','iso2_code' => 'CM','iso3_code' => 'CMR'),
  array('country_id' => 'CN','iso2_code' => 'CN','iso3_code' => 'CHN'),
  array('country_id' => 'CO','iso2_code' => 'CO','iso3_code' => 'COL'),
  array('country_id' => 'CR','iso2_code' => 'CR','iso3_code' => 'CRI'),
  array('country_id' => 'CU','iso2_code' => 'CU','iso3_code' => 'CUB'),
  array('country_id' => 'CV','iso2_code' => 'CV','iso3_code' => 'CPV'),
  array('country_id' => 'CX','iso2_code' => 'CX','iso3_code' => 'CXR'),
  array('country_id' => 'CY','iso2_code' => 'CY','iso3_code' => 'CYP'),
  array('country_id' => 'CZ','iso2_code' => 'CZ','iso3_code' => 'CZE'),
  array('country_id' => 'DE','iso2_code' => 'DE','iso3_code' => 'DEU'),
  array('country_id' => 'DJ','iso2_code' => 'DJ','iso3_code' => 'DJI'),
  array('country_id' => 'DK','iso2_code' => 'DK','iso3_code' => 'DNK'),
  array('country_id' => 'DM','iso2_code' => 'DM','iso3_code' => 'DMA'),
  array('country_id' => 'DO','iso2_code' => 'DO','iso3_code' => 'DOM'),
  array('country_id' => 'DZ','iso2_code' => 'DZ','iso3_code' => 'DZA'),
  array('country_id' => 'EC','iso2_code' => 'EC','iso3_code' => 'ECU'),
  array('country_id' => 'EE','iso2_code' => 'EE','iso3_code' => 'EST'),
  array('country_id' => 'EG','iso2_code' => 'EG','iso3_code' => 'EGY'),
  array('country_id' => 'EH','iso2_code' => 'EH','iso3_code' => 'ESH'),
  array('country_id' => 'ER','iso2_code' => 'ER','iso3_code' => 'ERI'),
  array('country_id' => 'ES','iso2_code' => 'ES','iso3_code' => 'ESP'),
  array('country_id' => 'ET','iso2_code' => 'ET','iso3_code' => 'ETH'),
  array('country_id' => 'FI','iso2_code' => 'FI','iso3_code' => 'FIN'),
  array('country_id' => 'FJ','iso2_code' => 'FJ','iso3_code' => 'FJI'),
  array('country_id' => 'FK','iso2_code' => 'FK','iso3_code' => 'FLK'),
  array('country_id' => 'FM','iso2_code' => 'FM','iso3_code' => 'FSM'),
  array('country_id' => 'FO','iso2_code' => 'FO','iso3_code' => 'FRO'),
  array('country_id' => 'FR','iso2_code' => 'FR','iso3_code' => 'FRA'),
  array('country_id' => 'GA','iso2_code' => 'GA','iso3_code' => 'GAB'),
  array('country_id' => 'GB','iso2_code' => 'GB','iso3_code' => 'GBR'),
  array('country_id' => 'GD','iso2_code' => 'GD','iso3_code' => 'GRD'),
  array('country_id' => 'GE','iso2_code' => 'GE','iso3_code' => 'GEO'),
  array('country_id' => 'GF','iso2_code' => 'GF','iso3_code' => 'GUF'),
  array('country_id' => 'GG','iso2_code' => 'GG','iso3_code' => 'GGY'),
  array('country_id' => 'GH','iso2_code' => 'GH','iso3_code' => 'GHA'),
  array('country_id' => 'GI','iso2_code' => 'GI','iso3_code' => 'GIB'),
  array('country_id' => 'GL','iso2_code' => 'GL','iso3_code' => 'GRL'),
  array('country_id' => 'GM','iso2_code' => 'GM','iso3_code' => 'GMB'),
  array('country_id' => 'GN','iso2_code' => 'GN','iso3_code' => 'GIN'),
  array('country_id' => 'GP','iso2_code' => 'GP','iso3_code' => 'GLP'),
  array('country_id' => 'GQ','iso2_code' => 'GQ','iso3_code' => 'GNQ'),
  array('country_id' => 'GR','iso2_code' => 'GR','iso3_code' => 'GRC'),
  array('country_id' => 'GS','iso2_code' => 'GS','iso3_code' => 'SGS'),
  array('country_id' => 'GT','iso2_code' => 'GT','iso3_code' => 'GTM'),
  array('country_id' => 'GU','iso2_code' => 'GU','iso3_code' => 'GUM'),
  array('country_id' => 'GW','iso2_code' => 'GW','iso3_code' => 'GNB'),
  array('country_id' => 'GY','iso2_code' => 'GY','iso3_code' => 'GUY'),
  array('country_id' => 'HK','iso2_code' => 'HK','iso3_code' => 'HKG'),
  array('country_id' => 'HM','iso2_code' => 'HM','iso3_code' => 'HMD'),
  array('country_id' => 'HN','iso2_code' => 'HN','iso3_code' => 'HND'),
  array('country_id' => 'HR','iso2_code' => 'HR','iso3_code' => 'HRV'),
  array('country_id' => 'HT','iso2_code' => 'HT','iso3_code' => 'HTI'),
  array('country_id' => 'HU','iso2_code' => 'HU','iso3_code' => 'HUN'),
  array('country_id' => 'ID','iso2_code' => 'ID','iso3_code' => 'IDN'),
  array('country_id' => 'IE','iso2_code' => 'IE','iso3_code' => 'IRL'),
  array('country_id' => 'IL','iso2_code' => 'IL','iso3_code' => 'ISR'),
  array('country_id' => 'IM','iso2_code' => 'IM','iso3_code' => 'IMN'),
  array('country_id' => 'IN','iso2_code' => 'IN','iso3_code' => 'IND'),
  array('country_id' => 'IO','iso2_code' => 'IO','iso3_code' => 'IOT'),
  array('country_id' => 'IQ','iso2_code' => 'IQ','iso3_code' => 'IRQ'),
  array('country_id' => 'IR','iso2_code' => 'IR','iso3_code' => 'IRN'),
  array('country_id' => 'IS','iso2_code' => 'IS','iso3_code' => 'ISL'),
  array('country_id' => 'IT','iso2_code' => 'IT','iso3_code' => 'ITA'),
  array('country_id' => 'JE','iso2_code' => 'JE','iso3_code' => 'JEY'),
  array('country_id' => 'JM','iso2_code' => 'JM','iso3_code' => 'JAM'),
  array('country_id' => 'JO','iso2_code' => 'JO','iso3_code' => 'JOR'),
  array('country_id' => 'JP','iso2_code' => 'JP','iso3_code' => 'JPN'),
  array('country_id' => 'KE','iso2_code' => 'KE','iso3_code' => 'KEN'),
  array('country_id' => 'KG','iso2_code' => 'KG','iso3_code' => 'KGZ'),
  array('country_id' => 'KH','iso2_code' => 'KH','iso3_code' => 'KHM'),
  array('country_id' => 'KI','iso2_code' => 'KI','iso3_code' => 'KIR'),
  array('country_id' => 'KM','iso2_code' => 'KM','iso3_code' => 'COM'),
  array('country_id' => 'KN','iso2_code' => 'KN','iso3_code' => 'KNA'),
  array('country_id' => 'KP','iso2_code' => 'KP','iso3_code' => 'PRK'),
  array('country_id' => 'KR','iso2_code' => 'KR','iso3_code' => 'KOR'),
  array('country_id' => 'KW','iso2_code' => 'KW','iso3_code' => 'KWT'),
  array('country_id' => 'KY','iso2_code' => 'KY','iso3_code' => 'CYM'),
  array('country_id' => 'KZ','iso2_code' => 'KZ','iso3_code' => 'KAZ'),
  array('country_id' => 'LA','iso2_code' => 'LA','iso3_code' => 'LAO'),
  array('country_id' => 'LB','iso2_code' => 'LB','iso3_code' => 'LBN'),
  array('country_id' => 'LC','iso2_code' => 'LC','iso3_code' => 'LCA'),
  array('country_id' => 'LI','iso2_code' => 'LI','iso3_code' => 'LIE'),
  array('country_id' => 'LK','iso2_code' => 'LK','iso3_code' => 'LKA'),
  array('country_id' => 'LR','iso2_code' => 'LR','iso3_code' => 'LBR'),
  array('country_id' => 'LS','iso2_code' => 'LS','iso3_code' => 'LSO'),
  array('country_id' => 'LT','iso2_code' => 'LT','iso3_code' => 'LTU'),
  array('country_id' => 'LU','iso2_code' => 'LU','iso3_code' => 'LUX'),
  array('country_id' => 'LV','iso2_code' => 'LV','iso3_code' => 'LVA'),
  array('country_id' => 'LY','iso2_code' => 'LY','iso3_code' => 'LBY'),
  array('country_id' => 'MA','iso2_code' => 'MA','iso3_code' => 'MAR'),
  array('country_id' => 'MC','iso2_code' => 'MC','iso3_code' => 'MCO'),
  array('country_id' => 'MD','iso2_code' => 'MD','iso3_code' => 'MDA'),
  array('country_id' => 'ME','iso2_code' => 'ME','iso3_code' => 'MNE'),
  array('country_id' => 'MF','iso2_code' => 'MF','iso3_code' => 'MAF'),
  array('country_id' => 'MG','iso2_code' => 'MG','iso3_code' => 'MDG'),
  array('country_id' => 'MH','iso2_code' => 'MH','iso3_code' => 'MHL'),
  array('country_id' => 'MK','iso2_code' => 'MK','iso3_code' => 'MKD'),
  array('country_id' => 'ML','iso2_code' => 'ML','iso3_code' => 'MLI'),
  array('country_id' => 'MM','iso2_code' => 'MM','iso3_code' => 'MMR'),
  array('country_id' => 'MN','iso2_code' => 'MN','iso3_code' => 'MNG'),
  array('country_id' => 'MO','iso2_code' => 'MO','iso3_code' => 'MAC'),
  array('country_id' => 'MP','iso2_code' => 'MP','iso3_code' => 'MNP'),
  array('country_id' => 'MQ','iso2_code' => 'MQ','iso3_code' => 'MTQ'),
  array('country_id' => 'MR','iso2_code' => 'MR','iso3_code' => 'MRT'),
  array('country_id' => 'MS','iso2_code' => 'MS','iso3_code' => 'MSR'),
  array('country_id' => 'MT','iso2_code' => 'MT','iso3_code' => 'MLT'),
  array('country_id' => 'MU','iso2_code' => 'MU','iso3_code' => 'MUS'),
  array('country_id' => 'MV','iso2_code' => 'MV','iso3_code' => 'MDV'),
  array('country_id' => 'MW','iso2_code' => 'MW','iso3_code' => 'MWI'),
  array('country_id' => 'MX','iso2_code' => 'MX','iso3_code' => 'MEX'),
  array('country_id' => 'MY','iso2_code' => 'MY','iso3_code' => 'MYS'),
  array('country_id' => 'MZ','iso2_code' => 'MZ','iso3_code' => 'MOZ'),
  array('country_id' => 'NA','iso2_code' => 'NA','iso3_code' => 'NAM'),
  array('country_id' => 'NC','iso2_code' => 'NC','iso3_code' => 'NCL'),
  array('country_id' => 'NE','iso2_code' => 'NE','iso3_code' => 'NER'),
  array('country_id' => 'NF','iso2_code' => 'NF','iso3_code' => 'NFK'),
  array('country_id' => 'NG','iso2_code' => 'NG','iso3_code' => 'NGA'),
  array('country_id' => 'NI','iso2_code' => 'NI','iso3_code' => 'NIC'),
  array('country_id' => 'NL','iso2_code' => 'NL','iso3_code' => 'NLD'),
  array('country_id' => 'NO','iso2_code' => 'NO','iso3_code' => 'NOR'),
  array('country_id' => 'NP','iso2_code' => 'NP','iso3_code' => 'NPL'),
  array('country_id' => 'NR','iso2_code' => 'NR','iso3_code' => 'NRU'),
  array('country_id' => 'NU','iso2_code' => 'NU','iso3_code' => 'NIU'),
  array('country_id' => 'NZ','iso2_code' => 'NZ','iso3_code' => 'NZL'),
  array('country_id' => 'OM','iso2_code' => 'OM','iso3_code' => 'OMN'),
  array('country_id' => 'PA','iso2_code' => 'PA','iso3_code' => 'PAN'),
  array('country_id' => 'PE','iso2_code' => 'PE','iso3_code' => 'PER'),
  array('country_id' => 'PF','iso2_code' => 'PF','iso3_code' => 'PYF'),
  array('country_id' => 'PG','iso2_code' => 'PG','iso3_code' => 'PNG'),
  array('country_id' => 'PH','iso2_code' => 'PH','iso3_code' => 'PHL'),
  array('country_id' => 'PK','iso2_code' => 'PK','iso3_code' => 'PAK'),
  array('country_id' => 'PL','iso2_code' => 'PL','iso3_code' => 'POL'),
  array('country_id' => 'PM','iso2_code' => 'PM','iso3_code' => 'SPM'),
  array('country_id' => 'PN','iso2_code' => 'PN','iso3_code' => 'PCN'),
  array('country_id' => 'PR','iso2_code' => 'PR','iso3_code' => 'PRI'),
  array('country_id' => 'PS','iso2_code' => 'PS','iso3_code' => 'PSE'),
  array('country_id' => 'PT','iso2_code' => 'PT','iso3_code' => 'PRT'),
  array('country_id' => 'PW','iso2_code' => 'PW','iso3_code' => 'PLW'),
  array('country_id' => 'PY','iso2_code' => 'PY','iso3_code' => 'PRY'),
  array('country_id' => 'QA','iso2_code' => 'QA','iso3_code' => 'QAT'),
  array('country_id' => 'RE','iso2_code' => 'RE','iso3_code' => 'REU'),
  array('country_id' => 'RO','iso2_code' => 'RO','iso3_code' => 'ROU'),
  array('country_id' => 'RS','iso2_code' => 'RS','iso3_code' => 'SRB'),
  array('country_id' => 'RU','iso2_code' => 'RU','iso3_code' => 'RUS'),
  array('country_id' => 'RW','iso2_code' => 'RW','iso3_code' => 'RWA'),
  array('country_id' => 'SA','iso2_code' => 'SA','iso3_code' => 'SAU'),
  array('country_id' => 'SB','iso2_code' => 'SB','iso3_code' => 'SLB'),
  array('country_id' => 'SC','iso2_code' => 'SC','iso3_code' => 'SYC'),
  array('country_id' => 'SD','iso2_code' => 'SD','iso3_code' => 'SDN'),
  array('country_id' => 'SE','iso2_code' => 'SE','iso3_code' => 'SWE'),
  array('country_id' => 'SG','iso2_code' => 'SG','iso3_code' => 'SGP'),
  array('country_id' => 'SH','iso2_code' => 'SH','iso3_code' => 'SHN'),
  array('country_id' => 'SI','iso2_code' => 'SI','iso3_code' => 'SVN'),
  array('country_id' => 'SJ','iso2_code' => 'SJ','iso3_code' => 'SJM'),
  array('country_id' => 'SK','iso2_code' => 'SK','iso3_code' => 'SVK'),
  array('country_id' => 'SL','iso2_code' => 'SL','iso3_code' => 'SLE'),
  array('country_id' => 'SM','iso2_code' => 'SM','iso3_code' => 'SMR'),
  array('country_id' => 'SN','iso2_code' => 'SN','iso3_code' => 'SEN'),
  array('country_id' => 'SO','iso2_code' => 'SO','iso3_code' => 'SOM'),
  array('country_id' => 'SR','iso2_code' => 'SR','iso3_code' => 'SUR'),
  array('country_id' => 'ST','iso2_code' => 'ST','iso3_code' => 'STP'),
  array('country_id' => 'SV','iso2_code' => 'SV','iso3_code' => 'SLV'),
  array('country_id' => 'SY','iso2_code' => 'SY','iso3_code' => 'SYR'),
  array('country_id' => 'SZ','iso2_code' => 'SZ','iso3_code' => 'SWZ'),
  array('country_id' => 'TC','iso2_code' => 'TC','iso3_code' => 'TCA'),
  array('country_id' => 'TD','iso2_code' => 'TD','iso3_code' => 'TCD'),
  array('country_id' => 'TF','iso2_code' => 'TF','iso3_code' => 'ATF'),
  array('country_id' => 'TG','iso2_code' => 'TG','iso3_code' => 'TGO'),
  array('country_id' => 'TH','iso2_code' => 'TH','iso3_code' => 'THA'),
  array('country_id' => 'TJ','iso2_code' => 'TJ','iso3_code' => 'TJK'),
  array('country_id' => 'TK','iso2_code' => 'TK','iso3_code' => 'TKL'),
  array('country_id' => 'TL','iso2_code' => 'TL','iso3_code' => 'TLS'),
  array('country_id' => 'TM','iso2_code' => 'TM','iso3_code' => 'TKM'),
  array('country_id' => 'TN','iso2_code' => 'TN','iso3_code' => 'TUN'),
  array('country_id' => 'TO','iso2_code' => 'TO','iso3_code' => 'TON'),
  array('country_id' => 'TR','iso2_code' => 'TR','iso3_code' => 'TUR'),
  array('country_id' => 'TT','iso2_code' => 'TT','iso3_code' => 'TTO'),
  array('country_id' => 'TV','iso2_code' => 'TV','iso3_code' => 'TUV'),
  array('country_id' => 'TW','iso2_code' => 'TW','iso3_code' => 'TWN'),
  array('country_id' => 'TZ','iso2_code' => 'TZ','iso3_code' => 'TZA'),
  array('country_id' => 'UA','iso2_code' => 'UA','iso3_code' => 'UKR'),
  array('country_id' => 'UG','iso2_code' => 'UG','iso3_code' => 'UGA'),
  array('country_id' => 'UM','iso2_code' => 'UM','iso3_code' => 'UMI'),
  array('country_id' => 'US','iso2_code' => 'US','iso3_code' => 'USA'),
  array('country_id' => 'UY','iso2_code' => 'UY','iso3_code' => 'URY'),
  array('country_id' => 'UZ','iso2_code' => 'UZ','iso3_code' => 'UZB'),
  array('country_id' => 'VA','iso2_code' => 'VA','iso3_code' => 'VAT'),
  array('country_id' => 'VC','iso2_code' => 'VC','iso3_code' => 'VCT'),
  array('country_id' => 'VE','iso2_code' => 'VE','iso3_code' => 'VEN'),
  array('country_id' => 'VG','iso2_code' => 'VG','iso3_code' => 'VGB'),
  array('country_id' => 'VI','iso2_code' => 'VI','iso3_code' => 'VIR'),
  array('country_id' => 'VN','iso2_code' => 'VN','iso3_code' => 'VNM'),
  array('country_id' => 'VU','iso2_code' => 'VU','iso3_code' => 'VUT'),
  array('country_id' => 'WF','iso2_code' => 'WF','iso3_code' => 'WLF'),
  array('country_id' => 'WS','iso2_code' => 'WS','iso3_code' => 'WSM'),
  array('country_id' => 'YE','iso2_code' => 'YE','iso3_code' => 'YEM'),
  array('country_id' => 'YT','iso2_code' => 'YT','iso3_code' => 'MYT'),
  array('country_id' => 'ZA','iso2_code' => 'ZA','iso3_code' => 'ZAF'),
  array('country_id' => 'ZM','iso2_code' => 'ZM','iso3_code' => 'ZMB'),
  array('country_id' => 'ZW','iso2_code' => 'ZW','iso3_code' => 'ZWE')
);

/* `magento`.`directory_country_format` */
$directory_country_format = array(
);

/* `magento`.`directory_country_region` */
$directory_country_region = array(
  array('region_id' => '1','country_id' => 'US','code' => 'AL','default_name' => 'Alabama'),
  array('region_id' => '2','country_id' => 'US','code' => 'AK','default_name' => 'Alaska'),
  array('region_id' => '3','country_id' => 'US','code' => 'AS','default_name' => 'American Samoa'),
  array('region_id' => '4','country_id' => 'US','code' => 'AZ','default_name' => 'Arizona'),
  array('region_id' => '5','country_id' => 'US','code' => 'AR','default_name' => 'Arkansas'),
  array('region_id' => '6','country_id' => 'US','code' => 'AF','default_name' => 'Armed Forces Africa'),
  array('region_id' => '7','country_id' => 'US','code' => 'AA','default_name' => 'Armed Forces Americas'),
  array('region_id' => '8','country_id' => 'US','code' => 'AC','default_name' => 'Armed Forces Canada'),
  array('region_id' => '9','country_id' => 'US','code' => 'AE','default_name' => 'Armed Forces Europe'),
  array('region_id' => '10','country_id' => 'US','code' => 'AM','default_name' => 'Armed Forces Middle East'),
  array('region_id' => '11','country_id' => 'US','code' => 'AP','default_name' => 'Armed Forces Pacific'),
  array('region_id' => '12','country_id' => 'US','code' => 'CA','default_name' => 'California'),
  array('region_id' => '13','country_id' => 'US','code' => 'CO','default_name' => 'Colorado'),
  array('region_id' => '14','country_id' => 'US','code' => 'CT','default_name' => 'Connecticut'),
  array('region_id' => '15','country_id' => 'US','code' => 'DE','default_name' => 'Delaware'),
  array('region_id' => '16','country_id' => 'US','code' => 'DC','default_name' => 'District of Columbia'),
  array('region_id' => '17','country_id' => 'US','code' => 'FM','default_name' => 'Federated States Of Micronesia'),
  array('region_id' => '18','country_id' => 'US','code' => 'FL','default_name' => 'Florida'),
  array('region_id' => '19','country_id' => 'US','code' => 'GA','default_name' => 'Georgia'),
  array('region_id' => '20','country_id' => 'US','code' => 'GU','default_name' => 'Guam'),
  array('region_id' => '21','country_id' => 'US','code' => 'HI','default_name' => 'Hawaii'),
  array('region_id' => '22','country_id' => 'US','code' => 'ID','default_name' => 'Idaho'),
  array('region_id' => '23','country_id' => 'US','code' => 'IL','default_name' => 'Illinois'),
  array('region_id' => '24','country_id' => 'US','code' => 'IN','default_name' => 'Indiana'),
  array('region_id' => '25','country_id' => 'US','code' => 'IA','default_name' => 'Iowa'),
  array('region_id' => '26','country_id' => 'US','code' => 'KS','default_name' => 'Kansas'),
  array('region_id' => '27','country_id' => 'US','code' => 'KY','default_name' => 'Kentucky'),
  array('region_id' => '28','country_id' => 'US','code' => 'LA','default_name' => 'Louisiana'),
  array('region_id' => '29','country_id' => 'US','code' => 'ME','default_name' => 'Maine'),
  array('region_id' => '30','country_id' => 'US','code' => 'MH','default_name' => 'Marshall Islands'),
  array('region_id' => '31','country_id' => 'US','code' => 'MD','default_name' => 'Maryland'),
  array('region_id' => '32','country_id' => 'US','code' => 'MA','default_name' => 'Massachusetts'),
  array('region_id' => '33','country_id' => 'US','code' => 'MI','default_name' => 'Michigan'),
  array('region_id' => '34','country_id' => 'US','code' => 'MN','default_name' => 'Minnesota'),
  array('region_id' => '35','country_id' => 'US','code' => 'MS','default_name' => 'Mississippi'),
  array('region_id' => '36','country_id' => 'US','code' => 'MO','default_name' => 'Missouri'),
  array('region_id' => '37','country_id' => 'US','code' => 'MT','default_name' => 'Montana'),
  array('region_id' => '38','country_id' => 'US','code' => 'NE','default_name' => 'Nebraska'),
  array('region_id' => '39','country_id' => 'US','code' => 'NV','default_name' => 'Nevada'),
  array('region_id' => '40','country_id' => 'US','code' => 'NH','default_name' => 'New Hampshire'),
  array('region_id' => '41','country_id' => 'US','code' => 'NJ','default_name' => 'New Jersey'),
  array('region_id' => '42','country_id' => 'US','code' => 'NM','default_name' => 'New Mexico'),
  array('region_id' => '43','country_id' => 'US','code' => 'NY','default_name' => 'New York'),
  array('region_id' => '44','country_id' => 'US','code' => 'NC','default_name' => 'North Carolina'),
  array('region_id' => '45','country_id' => 'US','code' => 'ND','default_name' => 'North Dakota'),
  array('region_id' => '46','country_id' => 'US','code' => 'MP','default_name' => 'Northern Mariana Islands'),
  array('region_id' => '47','country_id' => 'US','code' => 'OH','default_name' => 'Ohio'),
  array('region_id' => '48','country_id' => 'US','code' => 'OK','default_name' => 'Oklahoma'),
  array('region_id' => '49','country_id' => 'US','code' => 'OR','default_name' => 'Oregon'),
  array('region_id' => '50','country_id' => 'US','code' => 'PW','default_name' => 'Palau'),
  array('region_id' => '51','country_id' => 'US','code' => 'PA','default_name' => 'Pennsylvania'),
  array('region_id' => '52','country_id' => 'US','code' => 'PR','default_name' => 'Puerto Rico'),
  array('region_id' => '53','country_id' => 'US','code' => 'RI','default_name' => 'Rhode Island'),
  array('region_id' => '54','country_id' => 'US','code' => 'SC','default_name' => 'South Carolina'),
  array('region_id' => '55','country_id' => 'US','code' => 'SD','default_name' => 'South Dakota'),
  array('region_id' => '56','country_id' => 'US','code' => 'TN','default_name' => 'Tennessee'),
  array('region_id' => '57','country_id' => 'US','code' => 'TX','default_name' => 'Texas'),
  array('region_id' => '58','country_id' => 'US','code' => 'UT','default_name' => 'Utah'),
  array('region_id' => '59','country_id' => 'US','code' => 'VT','default_name' => 'Vermont'),
  array('region_id' => '60','country_id' => 'US','code' => 'VI','default_name' => 'Virgin Islands'),
  array('region_id' => '61','country_id' => 'US','code' => 'VA','default_name' => 'Virginia'),
  array('region_id' => '62','country_id' => 'US','code' => 'WA','default_name' => 'Washington'),
  array('region_id' => '63','country_id' => 'US','code' => 'WV','default_name' => 'West Virginia'),
  array('region_id' => '64','country_id' => 'US','code' => 'WI','default_name' => 'Wisconsin'),
  array('region_id' => '65','country_id' => 'US','code' => 'WY','default_name' => 'Wyoming'),
  array('region_id' => '66','country_id' => 'CA','code' => 'AB','default_name' => 'Alberta'),
  array('region_id' => '67','country_id' => 'CA','code' => 'BC','default_name' => 'British Columbia'),
  array('region_id' => '68','country_id' => 'CA','code' => 'MB','default_name' => 'Manitoba'),
  array('region_id' => '69','country_id' => 'CA','code' => 'NL','default_name' => 'Newfoundland and Labrador'),
  array('region_id' => '70','country_id' => 'CA','code' => 'NB','default_name' => 'New Brunswick'),
  array('region_id' => '71','country_id' => 'CA','code' => 'NS','default_name' => 'Nova Scotia'),
  array('region_id' => '72','country_id' => 'CA','code' => 'NT','default_name' => 'Northwest Territories'),
  array('region_id' => '73','country_id' => 'CA','code' => 'NU','default_name' => 'Nunavut'),
  array('region_id' => '74','country_id' => 'CA','code' => 'ON','default_name' => 'Ontario'),
  array('region_id' => '75','country_id' => 'CA','code' => 'PE','default_name' => 'Prince Edward Island'),
  array('region_id' => '76','country_id' => 'CA','code' => 'QC','default_name' => 'Quebec'),
  array('region_id' => '77','country_id' => 'CA','code' => 'SK','default_name' => 'Saskatchewan'),
  array('region_id' => '78','country_id' => 'CA','code' => 'YT','default_name' => 'Yukon Territory'),
  array('region_id' => '79','country_id' => 'DE','code' => 'NDS','default_name' => 'Niedersachsen'),
  array('region_id' => '80','country_id' => 'DE','code' => 'BAW','default_name' => 'Baden-Württemberg'),
  array('region_id' => '81','country_id' => 'DE','code' => 'BAY','default_name' => 'Bayern'),
  array('region_id' => '82','country_id' => 'DE','code' => 'BER','default_name' => 'Berlin'),
  array('region_id' => '83','country_id' => 'DE','code' => 'BRG','default_name' => 'Brandenburg'),
  array('region_id' => '84','country_id' => 'DE','code' => 'BRE','default_name' => 'Bremen'),
  array('region_id' => '85','country_id' => 'DE','code' => 'HAM','default_name' => 'Hamburg'),
  array('region_id' => '86','country_id' => 'DE','code' => 'HES','default_name' => 'Hessen'),
  array('region_id' => '87','country_id' => 'DE','code' => 'MEC','default_name' => 'Mecklenburg-Vorpommern'),
  array('region_id' => '88','country_id' => 'DE','code' => 'NRW','default_name' => 'Nordrhein-Westfalen'),
  array('region_id' => '89','country_id' => 'DE','code' => 'RHE','default_name' => 'Rheinland-Pfalz'),
  array('region_id' => '90','country_id' => 'DE','code' => 'SAR','default_name' => 'Saarland'),
  array('region_id' => '91','country_id' => 'DE','code' => 'SAS','default_name' => 'Sachsen'),
  array('region_id' => '92','country_id' => 'DE','code' => 'SAC','default_name' => 'Sachsen-Anhalt'),
  array('region_id' => '93','country_id' => 'DE','code' => 'SCN','default_name' => 'Schleswig-Holstein'),
  array('region_id' => '94','country_id' => 'DE','code' => 'THE','default_name' => 'Thüringen'),
  array('region_id' => '95','country_id' => 'AT','code' => 'WI','default_name' => 'Wien'),
  array('region_id' => '96','country_id' => 'AT','code' => 'NO','default_name' => 'Niederösterreich'),
  array('region_id' => '97','country_id' => 'AT','code' => 'OO','default_name' => 'Oberösterreich'),
  array('region_id' => '98','country_id' => 'AT','code' => 'SB','default_name' => 'Salzburg'),
  array('region_id' => '99','country_id' => 'AT','code' => 'KN','default_name' => 'Kärnten'),
  array('region_id' => '100','country_id' => 'AT','code' => 'ST','default_name' => 'Steiermark'),
  array('region_id' => '101','country_id' => 'AT','code' => 'TI','default_name' => 'Tirol'),
  array('region_id' => '102','country_id' => 'AT','code' => 'BL','default_name' => 'Burgenland'),
  array('region_id' => '103','country_id' => 'AT','code' => 'VB','default_name' => 'Vorarlberg'),
  array('region_id' => '104','country_id' => 'CH','code' => 'AG','default_name' => 'Aargau'),
  array('region_id' => '105','country_id' => 'CH','code' => 'AI','default_name' => 'Appenzell Innerrhoden'),
  array('region_id' => '106','country_id' => 'CH','code' => 'AR','default_name' => 'Appenzell Ausserrhoden'),
  array('region_id' => '107','country_id' => 'CH','code' => 'BE','default_name' => 'Bern'),
  array('region_id' => '108','country_id' => 'CH','code' => 'BL','default_name' => 'Basel-Landschaft'),
  array('region_id' => '109','country_id' => 'CH','code' => 'BS','default_name' => 'Basel-Stadt'),
  array('region_id' => '110','country_id' => 'CH','code' => 'FR','default_name' => 'Freiburg'),
  array('region_id' => '111','country_id' => 'CH','code' => 'GE','default_name' => 'Genf'),
  array('region_id' => '112','country_id' => 'CH','code' => 'GL','default_name' => 'Glarus'),
  array('region_id' => '113','country_id' => 'CH','code' => 'GR','default_name' => 'Graubünden'),
  array('region_id' => '114','country_id' => 'CH','code' => 'JU','default_name' => 'Jura'),
  array('region_id' => '115','country_id' => 'CH','code' => 'LU','default_name' => 'Luzern'),
  array('region_id' => '116','country_id' => 'CH','code' => 'NE','default_name' => 'Neuenburg'),
  array('region_id' => '117','country_id' => 'CH','code' => 'NW','default_name' => 'Nidwalden'),
  array('region_id' => '118','country_id' => 'CH','code' => 'OW','default_name' => 'Obwalden'),
  array('region_id' => '119','country_id' => 'CH','code' => 'SG','default_name' => 'St. Gallen'),
  array('region_id' => '120','country_id' => 'CH','code' => 'SH','default_name' => 'Schaffhausen'),
  array('region_id' => '121','country_id' => 'CH','code' => 'SO','default_name' => 'Solothurn'),
  array('region_id' => '122','country_id' => 'CH','code' => 'SZ','default_name' => 'Schwyz'),
  array('region_id' => '123','country_id' => 'CH','code' => 'TG','default_name' => 'Thurgau'),
  array('region_id' => '124','country_id' => 'CH','code' => 'TI','default_name' => 'Tessin'),
  array('region_id' => '125','country_id' => 'CH','code' => 'UR','default_name' => 'Uri'),
  array('region_id' => '126','country_id' => 'CH','code' => 'VD','default_name' => 'Waadt'),
  array('region_id' => '127','country_id' => 'CH','code' => 'VS','default_name' => 'Wallis'),
  array('region_id' => '128','country_id' => 'CH','code' => 'ZG','default_name' => 'Zug'),
  array('region_id' => '129','country_id' => 'CH','code' => 'ZH','default_name' => 'Zürich'),
  array('region_id' => '130','country_id' => 'ES','code' => 'A Coruсa','default_name' => 'A Coruña'),
  array('region_id' => '131','country_id' => 'ES','code' => 'Alava','default_name' => 'Alava'),
  array('region_id' => '132','country_id' => 'ES','code' => 'Albacete','default_name' => 'Albacete'),
  array('region_id' => '133','country_id' => 'ES','code' => 'Alicante','default_name' => 'Alicante'),
  array('region_id' => '134','country_id' => 'ES','code' => 'Almeria','default_name' => 'Almeria'),
  array('region_id' => '135','country_id' => 'ES','code' => 'Asturias','default_name' => 'Asturias'),
  array('region_id' => '136','country_id' => 'ES','code' => 'Avila','default_name' => 'Avila'),
  array('region_id' => '137','country_id' => 'ES','code' => 'Badajoz','default_name' => 'Badajoz'),
  array('region_id' => '138','country_id' => 'ES','code' => 'Baleares','default_name' => 'Baleares'),
  array('region_id' => '139','country_id' => 'ES','code' => 'Barcelona','default_name' => 'Barcelona'),
  array('region_id' => '140','country_id' => 'ES','code' => 'Burgos','default_name' => 'Burgos'),
  array('region_id' => '141','country_id' => 'ES','code' => 'Caceres','default_name' => 'Caceres'),
  array('region_id' => '142','country_id' => 'ES','code' => 'Cadiz','default_name' => 'Cadiz'),
  array('region_id' => '143','country_id' => 'ES','code' => 'Cantabria','default_name' => 'Cantabria'),
  array('region_id' => '144','country_id' => 'ES','code' => 'Castellon','default_name' => 'Castellon'),
  array('region_id' => '145','country_id' => 'ES','code' => 'Ceuta','default_name' => 'Ceuta'),
  array('region_id' => '146','country_id' => 'ES','code' => 'Ciudad Real','default_name' => 'Ciudad Real'),
  array('region_id' => '147','country_id' => 'ES','code' => 'Cordoba','default_name' => 'Cordoba'),
  array('region_id' => '148','country_id' => 'ES','code' => 'Cuenca','default_name' => 'Cuenca'),
  array('region_id' => '149','country_id' => 'ES','code' => 'Girona','default_name' => 'Girona'),
  array('region_id' => '150','country_id' => 'ES','code' => 'Granada','default_name' => 'Granada'),
  array('region_id' => '151','country_id' => 'ES','code' => 'Guadalajara','default_name' => 'Guadalajara'),
  array('region_id' => '152','country_id' => 'ES','code' => 'Guipuzcoa','default_name' => 'Guipuzcoa'),
  array('region_id' => '153','country_id' => 'ES','code' => 'Huelva','default_name' => 'Huelva'),
  array('region_id' => '154','country_id' => 'ES','code' => 'Huesca','default_name' => 'Huesca'),
  array('region_id' => '155','country_id' => 'ES','code' => 'Jaen','default_name' => 'Jaen'),
  array('region_id' => '156','country_id' => 'ES','code' => 'La Rioja','default_name' => 'La Rioja'),
  array('region_id' => '157','country_id' => 'ES','code' => 'Las Palmas','default_name' => 'Las Palmas'),
  array('region_id' => '158','country_id' => 'ES','code' => 'Leon','default_name' => 'Leon'),
  array('region_id' => '159','country_id' => 'ES','code' => 'Lleida','default_name' => 'Lleida'),
  array('region_id' => '160','country_id' => 'ES','code' => 'Lugo','default_name' => 'Lugo'),
  array('region_id' => '161','country_id' => 'ES','code' => 'Madrid','default_name' => 'Madrid'),
  array('region_id' => '162','country_id' => 'ES','code' => 'Malaga','default_name' => 'Malaga'),
  array('region_id' => '163','country_id' => 'ES','code' => 'Melilla','default_name' => 'Melilla'),
  array('region_id' => '164','country_id' => 'ES','code' => 'Murcia','default_name' => 'Murcia'),
  array('region_id' => '165','country_id' => 'ES','code' => 'Navarra','default_name' => 'Navarra'),
  array('region_id' => '166','country_id' => 'ES','code' => 'Ourense','default_name' => 'Ourense'),
  array('region_id' => '167','country_id' => 'ES','code' => 'Palencia','default_name' => 'Palencia'),
  array('region_id' => '168','country_id' => 'ES','code' => 'Pontevedra','default_name' => 'Pontevedra'),
  array('region_id' => '169','country_id' => 'ES','code' => 'Salamanca','default_name' => 'Salamanca'),
  array('region_id' => '170','country_id' => 'ES','code' => 'Santa Cruz de Tenerife','default_name' => 'Santa Cruz de Tenerife'),
  array('region_id' => '171','country_id' => 'ES','code' => 'Segovia','default_name' => 'Segovia'),
  array('region_id' => '172','country_id' => 'ES','code' => 'Sevilla','default_name' => 'Sevilla'),
  array('region_id' => '173','country_id' => 'ES','code' => 'Soria','default_name' => 'Soria'),
  array('region_id' => '174','country_id' => 'ES','code' => 'Tarragona','default_name' => 'Tarragona'),
  array('region_id' => '175','country_id' => 'ES','code' => 'Teruel','default_name' => 'Teruel'),
  array('region_id' => '176','country_id' => 'ES','code' => 'Toledo','default_name' => 'Toledo'),
  array('region_id' => '177','country_id' => 'ES','code' => 'Valencia','default_name' => 'Valencia'),
  array('region_id' => '178','country_id' => 'ES','code' => 'Valladolid','default_name' => 'Valladolid'),
  array('region_id' => '179','country_id' => 'ES','code' => 'Vizcaya','default_name' => 'Vizcaya'),
  array('region_id' => '180','country_id' => 'ES','code' => 'Zamora','default_name' => 'Zamora'),
  array('region_id' => '181','country_id' => 'ES','code' => 'Zaragoza','default_name' => 'Zaragoza'),
  array('region_id' => '182','country_id' => 'FR','code' => '1','default_name' => 'Ain'),
  array('region_id' => '183','country_id' => 'FR','code' => '2','default_name' => 'Aisne'),
  array('region_id' => '184','country_id' => 'FR','code' => '3','default_name' => 'Allier'),
  array('region_id' => '185','country_id' => 'FR','code' => '4','default_name' => 'Alpes-de-Haute-Provence'),
  array('region_id' => '186','country_id' => 'FR','code' => '5','default_name' => 'Hautes-Alpes'),
  array('region_id' => '187','country_id' => 'FR','code' => '6','default_name' => 'Alpes-Maritimes'),
  array('region_id' => '188','country_id' => 'FR','code' => '7','default_name' => 'Ardèche'),
  array('region_id' => '189','country_id' => 'FR','code' => '8','default_name' => 'Ardennes'),
  array('region_id' => '190','country_id' => 'FR','code' => '9','default_name' => 'Ariège'),
  array('region_id' => '191','country_id' => 'FR','code' => '10','default_name' => 'Aube'),
  array('region_id' => '192','country_id' => 'FR','code' => '11','default_name' => 'Aude'),
  array('region_id' => '193','country_id' => 'FR','code' => '12','default_name' => 'Aveyron'),
  array('region_id' => '194','country_id' => 'FR','code' => '13','default_name' => 'Bouches-du-Rhône'),
  array('region_id' => '195','country_id' => 'FR','code' => '14','default_name' => 'Calvados'),
  array('region_id' => '196','country_id' => 'FR','code' => '15','default_name' => 'Cantal'),
  array('region_id' => '197','country_id' => 'FR','code' => '16','default_name' => 'Charente'),
  array('region_id' => '198','country_id' => 'FR','code' => '17','default_name' => 'Charente-Maritime'),
  array('region_id' => '199','country_id' => 'FR','code' => '18','default_name' => 'Cher'),
  array('region_id' => '200','country_id' => 'FR','code' => '19','default_name' => 'Corrèze'),
  array('region_id' => '201','country_id' => 'FR','code' => '2A','default_name' => 'Corse-du-Sud'),
  array('region_id' => '202','country_id' => 'FR','code' => '2B','default_name' => 'Haute-Corse'),
  array('region_id' => '203','country_id' => 'FR','code' => '21','default_name' => 'Côte-d\'Or'),
  array('region_id' => '204','country_id' => 'FR','code' => '22','default_name' => 'Côtes-d\'Armor'),
  array('region_id' => '205','country_id' => 'FR','code' => '23','default_name' => 'Creuse'),
  array('region_id' => '206','country_id' => 'FR','code' => '24','default_name' => 'Dordogne'),
  array('region_id' => '207','country_id' => 'FR','code' => '25','default_name' => 'Doubs'),
  array('region_id' => '208','country_id' => 'FR','code' => '26','default_name' => 'Drôme'),
  array('region_id' => '209','country_id' => 'FR','code' => '27','default_name' => 'Eure'),
  array('region_id' => '210','country_id' => 'FR','code' => '28','default_name' => 'Eure-et-Loir'),
  array('region_id' => '211','country_id' => 'FR','code' => '29','default_name' => 'Finistère'),
  array('region_id' => '212','country_id' => 'FR','code' => '30','default_name' => 'Gard'),
  array('region_id' => '213','country_id' => 'FR','code' => '31','default_name' => 'Haute-Garonne'),
  array('region_id' => '214','country_id' => 'FR','code' => '32','default_name' => 'Gers'),
  array('region_id' => '215','country_id' => 'FR','code' => '33','default_name' => 'Gironde'),
  array('region_id' => '216','country_id' => 'FR','code' => '34','default_name' => 'Hérault'),
  array('region_id' => '217','country_id' => 'FR','code' => '35','default_name' => 'Ille-et-Vilaine'),
  array('region_id' => '218','country_id' => 'FR','code' => '36','default_name' => 'Indre'),
  array('region_id' => '219','country_id' => 'FR','code' => '37','default_name' => 'Indre-et-Loire'),
  array('region_id' => '220','country_id' => 'FR','code' => '38','default_name' => 'Isère'),
  array('region_id' => '221','country_id' => 'FR','code' => '39','default_name' => 'Jura'),
  array('region_id' => '222','country_id' => 'FR','code' => '40','default_name' => 'Landes'),
  array('region_id' => '223','country_id' => 'FR','code' => '41','default_name' => 'Loir-et-Cher'),
  array('region_id' => '224','country_id' => 'FR','code' => '42','default_name' => 'Loire'),
  array('region_id' => '225','country_id' => 'FR','code' => '43','default_name' => 'Haute-Loire'),
  array('region_id' => '226','country_id' => 'FR','code' => '44','default_name' => 'Loire-Atlantique'),
  array('region_id' => '227','country_id' => 'FR','code' => '45','default_name' => 'Loiret'),
  array('region_id' => '228','country_id' => 'FR','code' => '46','default_name' => 'Lot'),
  array('region_id' => '229','country_id' => 'FR','code' => '47','default_name' => 'Lot-et-Garonne'),
  array('region_id' => '230','country_id' => 'FR','code' => '48','default_name' => 'Lozère'),
  array('region_id' => '231','country_id' => 'FR','code' => '49','default_name' => 'Maine-et-Loire'),
  array('region_id' => '232','country_id' => 'FR','code' => '50','default_name' => 'Manche'),
  array('region_id' => '233','country_id' => 'FR','code' => '51','default_name' => 'Marne'),
  array('region_id' => '234','country_id' => 'FR','code' => '52','default_name' => 'Haute-Marne'),
  array('region_id' => '235','country_id' => 'FR','code' => '53','default_name' => 'Mayenne'),
  array('region_id' => '236','country_id' => 'FR','code' => '54','default_name' => 'Meurthe-et-Moselle'),
  array('region_id' => '237','country_id' => 'FR','code' => '55','default_name' => 'Meuse'),
  array('region_id' => '238','country_id' => 'FR','code' => '56','default_name' => 'Morbihan'),
  array('region_id' => '239','country_id' => 'FR','code' => '57','default_name' => 'Moselle'),
  array('region_id' => '240','country_id' => 'FR','code' => '58','default_name' => 'Nièvre'),
  array('region_id' => '241','country_id' => 'FR','code' => '59','default_name' => 'Nord'),
  array('region_id' => '242','country_id' => 'FR','code' => '60','default_name' => 'Oise'),
  array('region_id' => '243','country_id' => 'FR','code' => '61','default_name' => 'Orne'),
  array('region_id' => '244','country_id' => 'FR','code' => '62','default_name' => 'Pas-de-Calais'),
  array('region_id' => '245','country_id' => 'FR','code' => '63','default_name' => 'Puy-de-Dôme'),
  array('region_id' => '246','country_id' => 'FR','code' => '64','default_name' => 'Pyrénées-Atlantiques'),
  array('region_id' => '247','country_id' => 'FR','code' => '65','default_name' => 'Hautes-Pyrénées'),
  array('region_id' => '248','country_id' => 'FR','code' => '66','default_name' => 'Pyrénées-Orientales'),
  array('region_id' => '249','country_id' => 'FR','code' => '67','default_name' => 'Bas-Rhin'),
  array('region_id' => '250','country_id' => 'FR','code' => '68','default_name' => 'Haut-Rhin'),
  array('region_id' => '251','country_id' => 'FR','code' => '69','default_name' => 'Rhône'),
  array('region_id' => '252','country_id' => 'FR','code' => '70','default_name' => 'Haute-Saône'),
  array('region_id' => '253','country_id' => 'FR','code' => '71','default_name' => 'Saône-et-Loire'),
  array('region_id' => '254','country_id' => 'FR','code' => '72','default_name' => 'Sarthe'),
  array('region_id' => '255','country_id' => 'FR','code' => '73','default_name' => 'Savoie'),
  array('region_id' => '256','country_id' => 'FR','code' => '74','default_name' => 'Haute-Savoie'),
  array('region_id' => '257','country_id' => 'FR','code' => '75','default_name' => 'Paris'),
  array('region_id' => '258','country_id' => 'FR','code' => '76','default_name' => 'Seine-Maritime'),
  array('region_id' => '259','country_id' => 'FR','code' => '77','default_name' => 'Seine-et-Marne'),
  array('region_id' => '260','country_id' => 'FR','code' => '78','default_name' => 'Yvelines'),
  array('region_id' => '261','country_id' => 'FR','code' => '79','default_name' => 'Deux-Sèvres'),
  array('region_id' => '262','country_id' => 'FR','code' => '80','default_name' => 'Somme'),
  array('region_id' => '263','country_id' => 'FR','code' => '81','default_name' => 'Tarn'),
  array('region_id' => '264','country_id' => 'FR','code' => '82','default_name' => 'Tarn-et-Garonne'),
  array('region_id' => '265','country_id' => 'FR','code' => '83','default_name' => 'Var'),
  array('region_id' => '266','country_id' => 'FR','code' => '84','default_name' => 'Vaucluse'),
  array('region_id' => '267','country_id' => 'FR','code' => '85','default_name' => 'Vendée'),
  array('region_id' => '268','country_id' => 'FR','code' => '86','default_name' => 'Vienne'),
  array('region_id' => '269','country_id' => 'FR','code' => '87','default_name' => 'Haute-Vienne'),
  array('region_id' => '270','country_id' => 'FR','code' => '88','default_name' => 'Vosges'),
  array('region_id' => '271','country_id' => 'FR','code' => '89','default_name' => 'Yonne'),
  array('region_id' => '272','country_id' => 'FR','code' => '90','default_name' => 'Territoire-de-Belfort'),
  array('region_id' => '273','country_id' => 'FR','code' => '91','default_name' => 'Essonne'),
  array('region_id' => '274','country_id' => 'FR','code' => '92','default_name' => 'Hauts-de-Seine'),
  array('region_id' => '275','country_id' => 'FR','code' => '93','default_name' => 'Seine-Saint-Denis'),
  array('region_id' => '276','country_id' => 'FR','code' => '94','default_name' => 'Val-de-Marne'),
  array('region_id' => '277','country_id' => 'FR','code' => '95','default_name' => 'Val-d\'Oise'),
  array('region_id' => '278','country_id' => 'RO','code' => 'AB','default_name' => 'Alba'),
  array('region_id' => '279','country_id' => 'RO','code' => 'AR','default_name' => 'Arad'),
  array('region_id' => '280','country_id' => 'RO','code' => 'AG','default_name' => 'Argeş'),
  array('region_id' => '281','country_id' => 'RO','code' => 'BC','default_name' => 'Bacău'),
  array('region_id' => '282','country_id' => 'RO','code' => 'BH','default_name' => 'Bihor'),
  array('region_id' => '283','country_id' => 'RO','code' => 'BN','default_name' => 'Bistriţa-Năsăud'),
  array('region_id' => '284','country_id' => 'RO','code' => 'BT','default_name' => 'Botoşani'),
  array('region_id' => '285','country_id' => 'RO','code' => 'BV','default_name' => 'Braşov'),
  array('region_id' => '286','country_id' => 'RO','code' => 'BR','default_name' => 'Brăila'),
  array('region_id' => '287','country_id' => 'RO','code' => 'B','default_name' => 'Bucureşti'),
  array('region_id' => '288','country_id' => 'RO','code' => 'BZ','default_name' => 'Buzău'),
  array('region_id' => '289','country_id' => 'RO','code' => 'CS','default_name' => 'Caraş-Severin'),
  array('region_id' => '290','country_id' => 'RO','code' => 'CL','default_name' => 'Călăraşi'),
  array('region_id' => '291','country_id' => 'RO','code' => 'CJ','default_name' => 'Cluj'),
  array('region_id' => '292','country_id' => 'RO','code' => 'CT','default_name' => 'Constanţa'),
  array('region_id' => '293','country_id' => 'RO','code' => 'CV','default_name' => 'Covasna'),
  array('region_id' => '294','country_id' => 'RO','code' => 'DB','default_name' => 'Dâmboviţa'),
  array('region_id' => '295','country_id' => 'RO','code' => 'DJ','default_name' => 'Dolj'),
  array('region_id' => '296','country_id' => 'RO','code' => 'GL','default_name' => 'Galaţi'),
  array('region_id' => '297','country_id' => 'RO','code' => 'GR','default_name' => 'Giurgiu'),
  array('region_id' => '298','country_id' => 'RO','code' => 'GJ','default_name' => 'Gorj'),
  array('region_id' => '299','country_id' => 'RO','code' => 'HR','default_name' => 'Harghita'),
  array('region_id' => '300','country_id' => 'RO','code' => 'HD','default_name' => 'Hunedoara'),
  array('region_id' => '301','country_id' => 'RO','code' => 'IL','default_name' => 'Ialomiţa'),
  array('region_id' => '302','country_id' => 'RO','code' => 'IS','default_name' => 'Iaşi'),
  array('region_id' => '303','country_id' => 'RO','code' => 'IF','default_name' => 'Ilfov'),
  array('region_id' => '304','country_id' => 'RO','code' => 'MM','default_name' => 'Maramureş'),
  array('region_id' => '305','country_id' => 'RO','code' => 'MH','default_name' => 'Mehedinţi'),
  array('region_id' => '306','country_id' => 'RO','code' => 'MS','default_name' => 'Mureş'),
  array('region_id' => '307','country_id' => 'RO','code' => 'NT','default_name' => 'Neamţ'),
  array('region_id' => '308','country_id' => 'RO','code' => 'OT','default_name' => 'Olt'),
  array('region_id' => '309','country_id' => 'RO','code' => 'PH','default_name' => 'Prahova'),
  array('region_id' => '310','country_id' => 'RO','code' => 'SM','default_name' => 'Satu-Mare'),
  array('region_id' => '311','country_id' => 'RO','code' => 'SJ','default_name' => 'Sălaj'),
  array('region_id' => '312','country_id' => 'RO','code' => 'SB','default_name' => 'Sibiu'),
  array('region_id' => '313','country_id' => 'RO','code' => 'SV','default_name' => 'Suceava'),
  array('region_id' => '314','country_id' => 'RO','code' => 'TR','default_name' => 'Teleorman'),
  array('region_id' => '315','country_id' => 'RO','code' => 'TM','default_name' => 'Timiş'),
  array('region_id' => '316','country_id' => 'RO','code' => 'TL','default_name' => 'Tulcea'),
  array('region_id' => '317','country_id' => 'RO','code' => 'VS','default_name' => 'Vaslui'),
  array('region_id' => '318','country_id' => 'RO','code' => 'VL','default_name' => 'Vâlcea'),
  array('region_id' => '319','country_id' => 'RO','code' => 'VN','default_name' => 'Vrancea'),
  array('region_id' => '320','country_id' => 'FI','code' => 'Lappi','default_name' => 'Lappi'),
  array('region_id' => '321','country_id' => 'FI','code' => 'Pohjois-Pohjanmaa','default_name' => 'Pohjois-Pohjanmaa'),
  array('region_id' => '322','country_id' => 'FI','code' => 'Kainuu','default_name' => 'Kainuu'),
  array('region_id' => '323','country_id' => 'FI','code' => 'Pohjois-Karjala','default_name' => 'Pohjois-Karjala'),
  array('region_id' => '324','country_id' => 'FI','code' => 'Pohjois-Savo','default_name' => 'Pohjois-Savo'),
  array('region_id' => '325','country_id' => 'FI','code' => 'Etelä-Savo','default_name' => 'Etelä-Savo'),
  array('region_id' => '326','country_id' => 'FI','code' => 'Etelä-Pohjanmaa','default_name' => 'Etelä-Pohjanmaa'),
  array('region_id' => '327','country_id' => 'FI','code' => 'Pohjanmaa','default_name' => 'Pohjanmaa'),
  array('region_id' => '328','country_id' => 'FI','code' => 'Pirkanmaa','default_name' => 'Pirkanmaa'),
  array('region_id' => '329','country_id' => 'FI','code' => 'Satakunta','default_name' => 'Satakunta'),
  array('region_id' => '330','country_id' => 'FI','code' => 'Keski-Pohjanmaa','default_name' => 'Keski-Pohjanmaa'),
  array('region_id' => '331','country_id' => 'FI','code' => 'Keski-Suomi','default_name' => 'Keski-Suomi'),
  array('region_id' => '332','country_id' => 'FI','code' => 'Varsinais-Suomi','default_name' => 'Varsinais-Suomi'),
  array('region_id' => '333','country_id' => 'FI','code' => 'Etelä-Karjala','default_name' => 'Etelä-Karjala'),
  array('region_id' => '334','country_id' => 'FI','code' => 'Päijät-Häme','default_name' => 'Päijät-Häme'),
  array('region_id' => '335','country_id' => 'FI','code' => 'Kanta-Häme','default_name' => 'Kanta-Häme'),
  array('region_id' => '336','country_id' => 'FI','code' => 'Uusimaa','default_name' => 'Uusimaa'),
  array('region_id' => '337','country_id' => 'FI','code' => 'Itä-Uusimaa','default_name' => 'Itä-Uusimaa'),
  array('region_id' => '338','country_id' => 'FI','code' => 'Kymenlaakso','default_name' => 'Kymenlaakso'),
  array('region_id' => '339','country_id' => 'FI','code' => 'Ahvenanmaa','default_name' => 'Ahvenanmaa'),
  array('region_id' => '340','country_id' => 'EE','code' => 'EE-37','default_name' => 'Harjumaa'),
  array('region_id' => '341','country_id' => 'EE','code' => 'EE-39','default_name' => 'Hiiumaa'),
  array('region_id' => '342','country_id' => 'EE','code' => 'EE-44','default_name' => 'Ida-Virumaa'),
  array('region_id' => '343','country_id' => 'EE','code' => 'EE-49','default_name' => 'Jõgevamaa'),
  array('region_id' => '344','country_id' => 'EE','code' => 'EE-51','default_name' => 'Järvamaa'),
  array('region_id' => '345','country_id' => 'EE','code' => 'EE-57','default_name' => 'Läänemaa'),
  array('region_id' => '346','country_id' => 'EE','code' => 'EE-59','default_name' => 'Lääne-Virumaa'),
  array('region_id' => '347','country_id' => 'EE','code' => 'EE-65','default_name' => 'Põlvamaa'),
  array('region_id' => '348','country_id' => 'EE','code' => 'EE-67','default_name' => 'Pärnumaa'),
  array('region_id' => '349','country_id' => 'EE','code' => 'EE-70','default_name' => 'Raplamaa'),
  array('region_id' => '350','country_id' => 'EE','code' => 'EE-74','default_name' => 'Saaremaa'),
  array('region_id' => '351','country_id' => 'EE','code' => 'EE-78','default_name' => 'Tartumaa'),
  array('region_id' => '352','country_id' => 'EE','code' => 'EE-82','default_name' => 'Valgamaa'),
  array('region_id' => '353','country_id' => 'EE','code' => 'EE-84','default_name' => 'Viljandimaa'),
  array('region_id' => '354','country_id' => 'EE','code' => 'EE-86','default_name' => 'Võrumaa'),
  array('region_id' => '355','country_id' => 'LV','code' => 'LV-DGV','default_name' => 'Daugavpils'),
  array('region_id' => '356','country_id' => 'LV','code' => 'LV-JEL','default_name' => 'Jelgava'),
  array('region_id' => '357','country_id' => 'LV','code' => 'Jēkabpils','default_name' => 'Jēkabpils'),
  array('region_id' => '358','country_id' => 'LV','code' => 'LV-JUR','default_name' => 'Jūrmala'),
  array('region_id' => '359','country_id' => 'LV','code' => 'LV-LPX','default_name' => 'Liepāja'),
  array('region_id' => '360','country_id' => 'LV','code' => 'LV-LE','default_name' => 'Liepājas novads'),
  array('region_id' => '361','country_id' => 'LV','code' => 'LV-REZ','default_name' => 'Rēzekne'),
  array('region_id' => '362','country_id' => 'LV','code' => 'LV-RIX','default_name' => 'Rīga'),
  array('region_id' => '363','country_id' => 'LV','code' => 'LV-RI','default_name' => 'Rīgas novads'),
  array('region_id' => '364','country_id' => 'LV','code' => 'Valmiera','default_name' => 'Valmiera'),
  array('region_id' => '365','country_id' => 'LV','code' => 'LV-VEN','default_name' => 'Ventspils'),
  array('region_id' => '366','country_id' => 'LV','code' => 'Aglonas novads','default_name' => 'Aglonas novads'),
  array('region_id' => '367','country_id' => 'LV','code' => 'LV-AI','default_name' => 'Aizkraukles novads'),
  array('region_id' => '368','country_id' => 'LV','code' => 'Aizputes novads','default_name' => 'Aizputes novads'),
  array('region_id' => '369','country_id' => 'LV','code' => 'Aknīstes novads','default_name' => 'Aknīstes novads'),
  array('region_id' => '370','country_id' => 'LV','code' => 'Alojas novads','default_name' => 'Alojas novads'),
  array('region_id' => '371','country_id' => 'LV','code' => 'Alsungas novads','default_name' => 'Alsungas novads'),
  array('region_id' => '372','country_id' => 'LV','code' => 'LV-AL','default_name' => 'Alūksnes novads'),
  array('region_id' => '373','country_id' => 'LV','code' => 'Amatas novads','default_name' => 'Amatas novads'),
  array('region_id' => '374','country_id' => 'LV','code' => 'Apes novads','default_name' => 'Apes novads'),
  array('region_id' => '375','country_id' => 'LV','code' => 'Auces novads','default_name' => 'Auces novads'),
  array('region_id' => '376','country_id' => 'LV','code' => 'Babītes novads','default_name' => 'Babītes novads'),
  array('region_id' => '377','country_id' => 'LV','code' => 'Baldones novads','default_name' => 'Baldones novads'),
  array('region_id' => '378','country_id' => 'LV','code' => 'Baltinavas novads','default_name' => 'Baltinavas novads'),
  array('region_id' => '379','country_id' => 'LV','code' => 'LV-BL','default_name' => 'Balvu novads'),
  array('region_id' => '380','country_id' => 'LV','code' => 'LV-BU','default_name' => 'Bauskas novads'),
  array('region_id' => '381','country_id' => 'LV','code' => 'Beverīnas novads','default_name' => 'Beverīnas novads'),
  array('region_id' => '382','country_id' => 'LV','code' => 'Brocēnu novads','default_name' => 'Brocēnu novads'),
  array('region_id' => '383','country_id' => 'LV','code' => 'Burtnieku novads','default_name' => 'Burtnieku novads'),
  array('region_id' => '384','country_id' => 'LV','code' => 'Carnikavas novads','default_name' => 'Carnikavas novads'),
  array('region_id' => '385','country_id' => 'LV','code' => 'Cesvaines novads','default_name' => 'Cesvaines novads'),
  array('region_id' => '386','country_id' => 'LV','code' => 'Ciblas novads','default_name' => 'Ciblas novads'),
  array('region_id' => '387','country_id' => 'LV','code' => 'LV-CE','default_name' => 'Cēsu novads'),
  array('region_id' => '388','country_id' => 'LV','code' => 'Dagdas novads','default_name' => 'Dagdas novads'),
  array('region_id' => '389','country_id' => 'LV','code' => 'LV-DA','default_name' => 'Daugavpils novads'),
  array('region_id' => '390','country_id' => 'LV','code' => 'LV-DO','default_name' => 'Dobeles novads'),
  array('region_id' => '391','country_id' => 'LV','code' => 'Dundagas novads','default_name' => 'Dundagas novads'),
  array('region_id' => '392','country_id' => 'LV','code' => 'Durbes novads','default_name' => 'Durbes novads'),
  array('region_id' => '393','country_id' => 'LV','code' => 'Engures novads','default_name' => 'Engures novads'),
  array('region_id' => '394','country_id' => 'LV','code' => 'Garkalnes novads','default_name' => 'Garkalnes novads'),
  array('region_id' => '395','country_id' => 'LV','code' => 'Grobiņas novads','default_name' => 'Grobiņas novads'),
  array('region_id' => '396','country_id' => 'LV','code' => 'LV-GU','default_name' => 'Gulbenes novads'),
  array('region_id' => '397','country_id' => 'LV','code' => 'Iecavas novads','default_name' => 'Iecavas novads'),
  array('region_id' => '398','country_id' => 'LV','code' => 'Ikšķiles novads','default_name' => 'Ikšķiles novads'),
  array('region_id' => '399','country_id' => 'LV','code' => 'Ilūkstes novads','default_name' => 'Ilūkstes novads'),
  array('region_id' => '400','country_id' => 'LV','code' => 'Inčukalna novads','default_name' => 'Inčukalna novads'),
  array('region_id' => '401','country_id' => 'LV','code' => 'Jaunjelgavas novads','default_name' => 'Jaunjelgavas novads'),
  array('region_id' => '402','country_id' => 'LV','code' => 'Jaunpiebalgas novads','default_name' => 'Jaunpiebalgas novads'),
  array('region_id' => '403','country_id' => 'LV','code' => 'Jaunpils novads','default_name' => 'Jaunpils novads'),
  array('region_id' => '404','country_id' => 'LV','code' => 'LV-JL','default_name' => 'Jelgavas novads'),
  array('region_id' => '405','country_id' => 'LV','code' => 'LV-JK','default_name' => 'Jēkabpils novads'),
  array('region_id' => '406','country_id' => 'LV','code' => 'Kandavas novads','default_name' => 'Kandavas novads'),
  array('region_id' => '407','country_id' => 'LV','code' => 'Kokneses novads','default_name' => 'Kokneses novads'),
  array('region_id' => '408','country_id' => 'LV','code' => 'Krimuldas novads','default_name' => 'Krimuldas novads'),
  array('region_id' => '409','country_id' => 'LV','code' => 'Krustpils novads','default_name' => 'Krustpils novads'),
  array('region_id' => '410','country_id' => 'LV','code' => 'LV-KR','default_name' => 'Krāslavas novads'),
  array('region_id' => '411','country_id' => 'LV','code' => 'LV-KU','default_name' => 'Kuldīgas novads'),
  array('region_id' => '412','country_id' => 'LV','code' => 'Kārsavas novads','default_name' => 'Kārsavas novads'),
  array('region_id' => '413','country_id' => 'LV','code' => 'Lielvārdes novads','default_name' => 'Lielvārdes novads'),
  array('region_id' => '414','country_id' => 'LV','code' => 'LV-LM','default_name' => 'Limbažu novads'),
  array('region_id' => '415','country_id' => 'LV','code' => 'Lubānas novads','default_name' => 'Lubānas novads'),
  array('region_id' => '416','country_id' => 'LV','code' => 'LV-LU','default_name' => 'Ludzas novads'),
  array('region_id' => '417','country_id' => 'LV','code' => 'Līgatnes novads','default_name' => 'Līgatnes novads'),
  array('region_id' => '418','country_id' => 'LV','code' => 'Līvānu novads','default_name' => 'Līvānu novads'),
  array('region_id' => '419','country_id' => 'LV','code' => 'LV-MA','default_name' => 'Madonas novads'),
  array('region_id' => '420','country_id' => 'LV','code' => 'Mazsalacas novads','default_name' => 'Mazsalacas novads'),
  array('region_id' => '421','country_id' => 'LV','code' => 'Mālpils novads','default_name' => 'Mālpils novads'),
  array('region_id' => '422','country_id' => 'LV','code' => 'Mārupes novads','default_name' => 'Mārupes novads'),
  array('region_id' => '423','country_id' => 'LV','code' => 'Naukšēnu novads','default_name' => 'Naukšēnu novads'),
  array('region_id' => '424','country_id' => 'LV','code' => 'Neretas novads','default_name' => 'Neretas novads'),
  array('region_id' => '425','country_id' => 'LV','code' => 'Nīcas novads','default_name' => 'Nīcas novads'),
  array('region_id' => '426','country_id' => 'LV','code' => 'LV-OG','default_name' => 'Ogres novads'),
  array('region_id' => '427','country_id' => 'LV','code' => 'Olaines novads','default_name' => 'Olaines novads'),
  array('region_id' => '428','country_id' => 'LV','code' => 'Ozolnieku novads','default_name' => 'Ozolnieku novads'),
  array('region_id' => '429','country_id' => 'LV','code' => 'LV-PR','default_name' => 'Preiļu novads'),
  array('region_id' => '430','country_id' => 'LV','code' => 'Priekules novads','default_name' => 'Priekules novads'),
  array('region_id' => '431','country_id' => 'LV','code' => 'Priekuļu novads','default_name' => 'Priekuļu novads'),
  array('region_id' => '432','country_id' => 'LV','code' => 'Pārgaujas novads','default_name' => 'Pārgaujas novads'),
  array('region_id' => '433','country_id' => 'LV','code' => 'Pāvilostas novads','default_name' => 'Pāvilostas novads'),
  array('region_id' => '434','country_id' => 'LV','code' => 'Pļaviņu novads','default_name' => 'Pļaviņu novads'),
  array('region_id' => '435','country_id' => 'LV','code' => 'Raunas novads','default_name' => 'Raunas novads'),
  array('region_id' => '436','country_id' => 'LV','code' => 'Riebiņu novads','default_name' => 'Riebiņu novads'),
  array('region_id' => '437','country_id' => 'LV','code' => 'Rojas novads','default_name' => 'Rojas novads'),
  array('region_id' => '438','country_id' => 'LV','code' => 'Ropažu novads','default_name' => 'Ropažu novads'),
  array('region_id' => '439','country_id' => 'LV','code' => 'Rucavas novads','default_name' => 'Rucavas novads'),
  array('region_id' => '440','country_id' => 'LV','code' => 'Rugāju novads','default_name' => 'Rugāju novads'),
  array('region_id' => '441','country_id' => 'LV','code' => 'Rundāles novads','default_name' => 'Rundāles novads'),
  array('region_id' => '442','country_id' => 'LV','code' => 'LV-RE','default_name' => 'Rēzeknes novads'),
  array('region_id' => '443','country_id' => 'LV','code' => 'Rūjienas novads','default_name' => 'Rūjienas novads'),
  array('region_id' => '444','country_id' => 'LV','code' => 'Salacgrīvas novads','default_name' => 'Salacgrīvas novads'),
  array('region_id' => '445','country_id' => 'LV','code' => 'Salas novads','default_name' => 'Salas novads'),
  array('region_id' => '446','country_id' => 'LV','code' => 'Salaspils novads','default_name' => 'Salaspils novads'),
  array('region_id' => '447','country_id' => 'LV','code' => 'LV-SA','default_name' => 'Saldus novads'),
  array('region_id' => '448','country_id' => 'LV','code' => 'Saulkrastu novads','default_name' => 'Saulkrastu novads'),
  array('region_id' => '449','country_id' => 'LV','code' => 'Siguldas novads','default_name' => 'Siguldas novads'),
  array('region_id' => '450','country_id' => 'LV','code' => 'Skrundas novads','default_name' => 'Skrundas novads'),
  array('region_id' => '451','country_id' => 'LV','code' => 'Skrīveru novads','default_name' => 'Skrīveru novads'),
  array('region_id' => '452','country_id' => 'LV','code' => 'Smiltenes novads','default_name' => 'Smiltenes novads'),
  array('region_id' => '453','country_id' => 'LV','code' => 'Stopiņu novads','default_name' => 'Stopiņu novads'),
  array('region_id' => '454','country_id' => 'LV','code' => 'Strenču novads','default_name' => 'Strenču novads'),
  array('region_id' => '455','country_id' => 'LV','code' => 'Sējas novads','default_name' => 'Sējas novads'),
  array('region_id' => '456','country_id' => 'LV','code' => 'LV-TA','default_name' => 'Talsu novads'),
  array('region_id' => '457','country_id' => 'LV','code' => 'LV-TU','default_name' => 'Tukuma novads'),
  array('region_id' => '458','country_id' => 'LV','code' => 'Tērvetes novads','default_name' => 'Tērvetes novads'),
  array('region_id' => '459','country_id' => 'LV','code' => 'Vaiņodes novads','default_name' => 'Vaiņodes novads'),
  array('region_id' => '460','country_id' => 'LV','code' => 'LV-VK','default_name' => 'Valkas novads'),
  array('region_id' => '461','country_id' => 'LV','code' => 'LV-VM','default_name' => 'Valmieras novads'),
  array('region_id' => '462','country_id' => 'LV','code' => 'Varakļānu novads','default_name' => 'Varakļānu novads'),
  array('region_id' => '463','country_id' => 'LV','code' => 'Vecpiebalgas novads','default_name' => 'Vecpiebalgas novads'),
  array('region_id' => '464','country_id' => 'LV','code' => 'Vecumnieku novads','default_name' => 'Vecumnieku novads'),
  array('region_id' => '465','country_id' => 'LV','code' => 'LV-VE','default_name' => 'Ventspils novads'),
  array('region_id' => '466','country_id' => 'LV','code' => 'Viesītes novads','default_name' => 'Viesītes novads'),
  array('region_id' => '467','country_id' => 'LV','code' => 'Viļakas novads','default_name' => 'Viļakas novads'),
  array('region_id' => '468','country_id' => 'LV','code' => 'Viļānu novads','default_name' => 'Viļānu novads'),
  array('region_id' => '469','country_id' => 'LV','code' => 'Vārkavas novads','default_name' => 'Vārkavas novads'),
  array('region_id' => '470','country_id' => 'LV','code' => 'Zilupes novads','default_name' => 'Zilupes novads'),
  array('region_id' => '471','country_id' => 'LV','code' => 'Ādažu novads','default_name' => 'Ādažu novads'),
  array('region_id' => '472','country_id' => 'LV','code' => 'Ērgļu novads','default_name' => 'Ērgļu novads'),
  array('region_id' => '473','country_id' => 'LV','code' => 'Ķeguma novads','default_name' => 'Ķeguma novads'),
  array('region_id' => '474','country_id' => 'LV','code' => 'Ķekavas novads','default_name' => 'Ķekavas novads'),
  array('region_id' => '475','country_id' => 'LT','code' => 'LT-AL','default_name' => 'Alytaus Apskritis'),
  array('region_id' => '476','country_id' => 'LT','code' => 'LT-KU','default_name' => 'Kauno Apskritis'),
  array('region_id' => '477','country_id' => 'LT','code' => 'LT-KL','default_name' => 'Klaipėdos Apskritis'),
  array('region_id' => '478','country_id' => 'LT','code' => 'LT-MR','default_name' => 'Marijampolės Apskritis'),
  array('region_id' => '479','country_id' => 'LT','code' => 'LT-PN','default_name' => 'Panevėžio Apskritis'),
  array('region_id' => '480','country_id' => 'LT','code' => 'LT-SA','default_name' => 'Šiaulių Apskritis'),
  array('region_id' => '481','country_id' => 'LT','code' => 'LT-TA','default_name' => 'Tauragės Apskritis'),
  array('region_id' => '482','country_id' => 'LT','code' => 'LT-TE','default_name' => 'Telšių Apskritis'),
  array('region_id' => '483','country_id' => 'LT','code' => 'LT-UT','default_name' => 'Utenos Apskritis'),
  array('region_id' => '484','country_id' => 'LT','code' => 'LT-VL','default_name' => 'Vilniaus Apskritis')
);

/* `magento`.`directory_country_region_name` */
$directory_country_region_name = array(
  array('locale' => 'en_US','region_id' => '1','name' => 'Alabama'),
  array('locale' => 'en_US','region_id' => '2','name' => 'Alaska'),
  array('locale' => 'en_US','region_id' => '3','name' => 'American Samoa'),
  array('locale' => 'en_US','region_id' => '4','name' => 'Arizona'),
  array('locale' => 'en_US','region_id' => '5','name' => 'Arkansas'),
  array('locale' => 'en_US','region_id' => '6','name' => 'Armed Forces Africa'),
  array('locale' => 'en_US','region_id' => '7','name' => 'Armed Forces Americas'),
  array('locale' => 'en_US','region_id' => '8','name' => 'Armed Forces Canada'),
  array('locale' => 'en_US','region_id' => '9','name' => 'Armed Forces Europe'),
  array('locale' => 'en_US','region_id' => '10','name' => 'Armed Forces Middle East'),
  array('locale' => 'en_US','region_id' => '11','name' => 'Armed Forces Pacific'),
  array('locale' => 'en_US','region_id' => '12','name' => 'California'),
  array('locale' => 'en_US','region_id' => '13','name' => 'Colorado'),
  array('locale' => 'en_US','region_id' => '14','name' => 'Connecticut'),
  array('locale' => 'en_US','region_id' => '15','name' => 'Delaware'),
  array('locale' => 'en_US','region_id' => '16','name' => 'District of Columbia'),
  array('locale' => 'en_US','region_id' => '17','name' => 'Federated States Of Micronesia'),
  array('locale' => 'en_US','region_id' => '18','name' => 'Florida'),
  array('locale' => 'en_US','region_id' => '19','name' => 'Georgia'),
  array('locale' => 'en_US','region_id' => '20','name' => 'Guam'),
  array('locale' => 'en_US','region_id' => '21','name' => 'Hawaii'),
  array('locale' => 'en_US','region_id' => '22','name' => 'Idaho'),
  array('locale' => 'en_US','region_id' => '23','name' => 'Illinois'),
  array('locale' => 'en_US','region_id' => '24','name' => 'Indiana'),
  array('locale' => 'en_US','region_id' => '25','name' => 'Iowa'),
  array('locale' => 'en_US','region_id' => '26','name' => 'Kansas'),
  array('locale' => 'en_US','region_id' => '27','name' => 'Kentucky'),
  array('locale' => 'en_US','region_id' => '28','name' => 'Louisiana'),
  array('locale' => 'en_US','region_id' => '29','name' => 'Maine'),
  array('locale' => 'en_US','region_id' => '30','name' => 'Marshall Islands'),
  array('locale' => 'en_US','region_id' => '31','name' => 'Maryland'),
  array('locale' => 'en_US','region_id' => '32','name' => 'Massachusetts'),
  array('locale' => 'en_US','region_id' => '33','name' => 'Michigan'),
  array('locale' => 'en_US','region_id' => '34','name' => 'Minnesota'),
  array('locale' => 'en_US','region_id' => '35','name' => 'Mississippi'),
  array('locale' => 'en_US','region_id' => '36','name' => 'Missouri'),
  array('locale' => 'en_US','region_id' => '37','name' => 'Montana'),
  array('locale' => 'en_US','region_id' => '38','name' => 'Nebraska'),
  array('locale' => 'en_US','region_id' => '39','name' => 'Nevada'),
  array('locale' => 'en_US','region_id' => '40','name' => 'New Hampshire'),
  array('locale' => 'en_US','region_id' => '41','name' => 'New Jersey'),
  array('locale' => 'en_US','region_id' => '42','name' => 'New Mexico'),
  array('locale' => 'en_US','region_id' => '43','name' => 'New York'),
  array('locale' => 'en_US','region_id' => '44','name' => 'North Carolina'),
  array('locale' => 'en_US','region_id' => '45','name' => 'North Dakota'),
  array('locale' => 'en_US','region_id' => '46','name' => 'Northern Mariana Islands'),
  array('locale' => 'en_US','region_id' => '47','name' => 'Ohio'),
  array('locale' => 'en_US','region_id' => '48','name' => 'Oklahoma'),
  array('locale' => 'en_US','region_id' => '49','name' => 'Oregon'),
  array('locale' => 'en_US','region_id' => '50','name' => 'Palau'),
  array('locale' => 'en_US','region_id' => '51','name' => 'Pennsylvania'),
  array('locale' => 'en_US','region_id' => '52','name' => 'Puerto Rico'),
  array('locale' => 'en_US','region_id' => '53','name' => 'Rhode Island'),
  array('locale' => 'en_US','region_id' => '54','name' => 'South Carolina'),
  array('locale' => 'en_US','region_id' => '55','name' => 'South Dakota'),
  array('locale' => 'en_US','region_id' => '56','name' => 'Tennessee'),
  array('locale' => 'en_US','region_id' => '57','name' => 'Texas'),
  array('locale' => 'en_US','region_id' => '58','name' => 'Utah'),
  array('locale' => 'en_US','region_id' => '59','name' => 'Vermont'),
  array('locale' => 'en_US','region_id' => '60','name' => 'Virgin Islands'),
  array('locale' => 'en_US','region_id' => '61','name' => 'Virginia'),
  array('locale' => 'en_US','region_id' => '62','name' => 'Washington'),
  array('locale' => 'en_US','region_id' => '63','name' => 'West Virginia'),
  array('locale' => 'en_US','region_id' => '64','name' => 'Wisconsin'),
  array('locale' => 'en_US','region_id' => '65','name' => 'Wyoming'),
  array('locale' => 'en_US','region_id' => '66','name' => 'Alberta'),
  array('locale' => 'en_US','region_id' => '67','name' => 'British Columbia'),
  array('locale' => 'en_US','region_id' => '68','name' => 'Manitoba'),
  array('locale' => 'en_US','region_id' => '69','name' => 'Newfoundland and Labrador'),
  array('locale' => 'en_US','region_id' => '70','name' => 'New Brunswick'),
  array('locale' => 'en_US','region_id' => '71','name' => 'Nova Scotia'),
  array('locale' => 'en_US','region_id' => '72','name' => 'Northwest Territories'),
  array('locale' => 'en_US','region_id' => '73','name' => 'Nunavut'),
  array('locale' => 'en_US','region_id' => '74','name' => 'Ontario'),
  array('locale' => 'en_US','region_id' => '75','name' => 'Prince Edward Island'),
  array('locale' => 'en_US','region_id' => '76','name' => 'Quebec'),
  array('locale' => 'en_US','region_id' => '77','name' => 'Saskatchewan'),
  array('locale' => 'en_US','region_id' => '78','name' => 'Yukon Territory'),
  array('locale' => 'en_US','region_id' => '79','name' => 'Niedersachsen'),
  array('locale' => 'en_US','region_id' => '80','name' => 'Baden-Württemberg'),
  array('locale' => 'en_US','region_id' => '81','name' => 'Bayern'),
  array('locale' => 'en_US','region_id' => '82','name' => 'Berlin'),
  array('locale' => 'en_US','region_id' => '83','name' => 'Brandenburg'),
  array('locale' => 'en_US','region_id' => '84','name' => 'Bremen'),
  array('locale' => 'en_US','region_id' => '85','name' => 'Hamburg'),
  array('locale' => 'en_US','region_id' => '86','name' => 'Hessen'),
  array('locale' => 'en_US','region_id' => '87','name' => 'Mecklenburg-Vorpommern'),
  array('locale' => 'en_US','region_id' => '88','name' => 'Nordrhein-Westfalen'),
  array('locale' => 'en_US','region_id' => '89','name' => 'Rheinland-Pfalz'),
  array('locale' => 'en_US','region_id' => '90','name' => 'Saarland'),
  array('locale' => 'en_US','region_id' => '91','name' => 'Sachsen'),
  array('locale' => 'en_US','region_id' => '92','name' => 'Sachsen-Anhalt'),
  array('locale' => 'en_US','region_id' => '93','name' => 'Schleswig-Holstein'),
  array('locale' => 'en_US','region_id' => '94','name' => 'Thüringen'),
  array('locale' => 'en_US','region_id' => '95','name' => 'Wien'),
  array('locale' => 'en_US','region_id' => '96','name' => 'Niederösterreich'),
  array('locale' => 'en_US','region_id' => '97','name' => 'Oberösterreich'),
  array('locale' => 'en_US','region_id' => '98','name' => 'Salzburg'),
  array('locale' => 'en_US','region_id' => '99','name' => 'Kärnten'),
  array('locale' => 'en_US','region_id' => '100','name' => 'Steiermark'),
  array('locale' => 'en_US','region_id' => '101','name' => 'Tirol'),
  array('locale' => 'en_US','region_id' => '102','name' => 'Burgenland'),
  array('locale' => 'en_US','region_id' => '103','name' => 'Vorarlberg'),
  array('locale' => 'en_US','region_id' => '104','name' => 'Aargau'),
  array('locale' => 'en_US','region_id' => '105','name' => 'Appenzell Innerrhoden'),
  array('locale' => 'en_US','region_id' => '106','name' => 'Appenzell Ausserrhoden'),
  array('locale' => 'en_US','region_id' => '107','name' => 'Bern'),
  array('locale' => 'en_US','region_id' => '108','name' => 'Basel-Landschaft'),
  array('locale' => 'en_US','region_id' => '109','name' => 'Basel-Stadt'),
  array('locale' => 'en_US','region_id' => '110','name' => 'Freiburg'),
  array('locale' => 'en_US','region_id' => '111','name' => 'Genf'),
  array('locale' => 'en_US','region_id' => '112','name' => 'Glarus'),
  array('locale' => 'en_US','region_id' => '113','name' => 'Graubünden'),
  array('locale' => 'en_US','region_id' => '114','name' => 'Jura'),
  array('locale' => 'en_US','region_id' => '115','name' => 'Luzern'),
  array('locale' => 'en_US','region_id' => '116','name' => 'Neuenburg'),
  array('locale' => 'en_US','region_id' => '117','name' => 'Nidwalden'),
  array('locale' => 'en_US','region_id' => '118','name' => 'Obwalden'),
  array('locale' => 'en_US','region_id' => '119','name' => 'St. Gallen'),
  array('locale' => 'en_US','region_id' => '120','name' => 'Schaffhausen'),
  array('locale' => 'en_US','region_id' => '121','name' => 'Solothurn'),
  array('locale' => 'en_US','region_id' => '122','name' => 'Schwyz'),
  array('locale' => 'en_US','region_id' => '123','name' => 'Thurgau'),
  array('locale' => 'en_US','region_id' => '124','name' => 'Tessin'),
  array('locale' => 'en_US','region_id' => '125','name' => 'Uri'),
  array('locale' => 'en_US','region_id' => '126','name' => 'Waadt'),
  array('locale' => 'en_US','region_id' => '127','name' => 'Wallis'),
  array('locale' => 'en_US','region_id' => '128','name' => 'Zug'),
  array('locale' => 'en_US','region_id' => '129','name' => 'Zürich'),
  array('locale' => 'en_US','region_id' => '130','name' => 'A Coruña'),
  array('locale' => 'en_US','region_id' => '131','name' => 'Alava'),
  array('locale' => 'en_US','region_id' => '132','name' => 'Albacete'),
  array('locale' => 'en_US','region_id' => '133','name' => 'Alicante'),
  array('locale' => 'en_US','region_id' => '134','name' => 'Almeria'),
  array('locale' => 'en_US','region_id' => '135','name' => 'Asturias'),
  array('locale' => 'en_US','region_id' => '136','name' => 'Avila'),
  array('locale' => 'en_US','region_id' => '137','name' => 'Badajoz'),
  array('locale' => 'en_US','region_id' => '138','name' => 'Baleares'),
  array('locale' => 'en_US','region_id' => '139','name' => 'Barcelona'),
  array('locale' => 'en_US','region_id' => '140','name' => 'Burgos'),
  array('locale' => 'en_US','region_id' => '141','name' => 'Caceres'),
  array('locale' => 'en_US','region_id' => '142','name' => 'Cadiz'),
  array('locale' => 'en_US','region_id' => '143','name' => 'Cantabria'),
  array('locale' => 'en_US','region_id' => '144','name' => 'Castellon'),
  array('locale' => 'en_US','region_id' => '145','name' => 'Ceuta'),
  array('locale' => 'en_US','region_id' => '146','name' => 'Ciudad Real'),
  array('locale' => 'en_US','region_id' => '147','name' => 'Cordoba'),
  array('locale' => 'en_US','region_id' => '148','name' => 'Cuenca'),
  array('locale' => 'en_US','region_id' => '149','name' => 'Girona'),
  array('locale' => 'en_US','region_id' => '150','name' => 'Granada'),
  array('locale' => 'en_US','region_id' => '151','name' => 'Guadalajara'),
  array('locale' => 'en_US','region_id' => '152','name' => 'Guipuzcoa'),
  array('locale' => 'en_US','region_id' => '153','name' => 'Huelva'),
  array('locale' => 'en_US','region_id' => '154','name' => 'Huesca'),
  array('locale' => 'en_US','region_id' => '155','name' => 'Jaen'),
  array('locale' => 'en_US','region_id' => '156','name' => 'La Rioja'),
  array('locale' => 'en_US','region_id' => '157','name' => 'Las Palmas'),
  array('locale' => 'en_US','region_id' => '158','name' => 'Leon'),
  array('locale' => 'en_US','region_id' => '159','name' => 'Lleida'),
  array('locale' => 'en_US','region_id' => '160','name' => 'Lugo'),
  array('locale' => 'en_US','region_id' => '161','name' => 'Madrid'),
  array('locale' => 'en_US','region_id' => '162','name' => 'Malaga'),
  array('locale' => 'en_US','region_id' => '163','name' => 'Melilla'),
  array('locale' => 'en_US','region_id' => '164','name' => 'Murcia'),
  array('locale' => 'en_US','region_id' => '165','name' => 'Navarra'),
  array('locale' => 'en_US','region_id' => '166','name' => 'Ourense'),
  array('locale' => 'en_US','region_id' => '167','name' => 'Palencia'),
  array('locale' => 'en_US','region_id' => '168','name' => 'Pontevedra'),
  array('locale' => 'en_US','region_id' => '169','name' => 'Salamanca'),
  array('locale' => 'en_US','region_id' => '170','name' => 'Santa Cruz de Tenerife'),
  array('locale' => 'en_US','region_id' => '171','name' => 'Segovia'),
  array('locale' => 'en_US','region_id' => '172','name' => 'Sevilla'),
  array('locale' => 'en_US','region_id' => '173','name' => 'Soria'),
  array('locale' => 'en_US','region_id' => '174','name' => 'Tarragona'),
  array('locale' => 'en_US','region_id' => '175','name' => 'Teruel'),
  array('locale' => 'en_US','region_id' => '176','name' => 'Toledo'),
  array('locale' => 'en_US','region_id' => '177','name' => 'Valencia'),
  array('locale' => 'en_US','region_id' => '178','name' => 'Valladolid'),
  array('locale' => 'en_US','region_id' => '179','name' => 'Vizcaya'),
  array('locale' => 'en_US','region_id' => '180','name' => 'Zamora'),
  array('locale' => 'en_US','region_id' => '181','name' => 'Zaragoza'),
  array('locale' => 'en_US','region_id' => '182','name' => 'Ain'),
  array('locale' => 'en_US','region_id' => '183','name' => 'Aisne'),
  array('locale' => 'en_US','region_id' => '184','name' => 'Allier'),
  array('locale' => 'en_US','region_id' => '185','name' => 'Alpes-de-Haute-Provence'),
  array('locale' => 'en_US','region_id' => '186','name' => 'Hautes-Alpes'),
  array('locale' => 'en_US','region_id' => '187','name' => 'Alpes-Maritimes'),
  array('locale' => 'en_US','region_id' => '188','name' => 'Ardèche'),
  array('locale' => 'en_US','region_id' => '189','name' => 'Ardennes'),
  array('locale' => 'en_US','region_id' => '190','name' => 'Ariège'),
  array('locale' => 'en_US','region_id' => '191','name' => 'Aube'),
  array('locale' => 'en_US','region_id' => '192','name' => 'Aude'),
  array('locale' => 'en_US','region_id' => '193','name' => 'Aveyron'),
  array('locale' => 'en_US','region_id' => '194','name' => 'Bouches-du-Rhône'),
  array('locale' => 'en_US','region_id' => '195','name' => 'Calvados'),
  array('locale' => 'en_US','region_id' => '196','name' => 'Cantal'),
  array('locale' => 'en_US','region_id' => '197','name' => 'Charente'),
  array('locale' => 'en_US','region_id' => '198','name' => 'Charente-Maritime'),
  array('locale' => 'en_US','region_id' => '199','name' => 'Cher'),
  array('locale' => 'en_US','region_id' => '200','name' => 'Corrèze'),
  array('locale' => 'en_US','region_id' => '201','name' => 'Corse-du-Sud'),
  array('locale' => 'en_US','region_id' => '202','name' => 'Haute-Corse'),
  array('locale' => 'en_US','region_id' => '203','name' => 'Côte-d\'Or'),
  array('locale' => 'en_US','region_id' => '204','name' => 'Côtes-d\'Armor'),
  array('locale' => 'en_US','region_id' => '205','name' => 'Creuse'),
  array('locale' => 'en_US','region_id' => '206','name' => 'Dordogne'),
  array('locale' => 'en_US','region_id' => '207','name' => 'Doubs'),
  array('locale' => 'en_US','region_id' => '208','name' => 'Drôme'),
  array('locale' => 'en_US','region_id' => '209','name' => 'Eure'),
  array('locale' => 'en_US','region_id' => '210','name' => 'Eure-et-Loir'),
  array('locale' => 'en_US','region_id' => '211','name' => 'Finistère'),
  array('locale' => 'en_US','region_id' => '212','name' => 'Gard'),
  array('locale' => 'en_US','region_id' => '213','name' => 'Haute-Garonne'),
  array('locale' => 'en_US','region_id' => '214','name' => 'Gers'),
  array('locale' => 'en_US','region_id' => '215','name' => 'Gironde'),
  array('locale' => 'en_US','region_id' => '216','name' => 'Hérault'),
  array('locale' => 'en_US','region_id' => '217','name' => 'Ille-et-Vilaine'),
  array('locale' => 'en_US','region_id' => '218','name' => 'Indre'),
  array('locale' => 'en_US','region_id' => '219','name' => 'Indre-et-Loire'),
  array('locale' => 'en_US','region_id' => '220','name' => 'Isère'),
  array('locale' => 'en_US','region_id' => '221','name' => 'Jura'),
  array('locale' => 'en_US','region_id' => '222','name' => 'Landes'),
  array('locale' => 'en_US','region_id' => '223','name' => 'Loir-et-Cher'),
  array('locale' => 'en_US','region_id' => '224','name' => 'Loire'),
  array('locale' => 'en_US','region_id' => '225','name' => 'Haute-Loire'),
  array('locale' => 'en_US','region_id' => '226','name' => 'Loire-Atlantique'),
  array('locale' => 'en_US','region_id' => '227','name' => 'Loiret'),
  array('locale' => 'en_US','region_id' => '228','name' => 'Lot'),
  array('locale' => 'en_US','region_id' => '229','name' => 'Lot-et-Garonne'),
  array('locale' => 'en_US','region_id' => '230','name' => 'Lozère'),
  array('locale' => 'en_US','region_id' => '231','name' => 'Maine-et-Loire'),
  array('locale' => 'en_US','region_id' => '232','name' => 'Manche'),
  array('locale' => 'en_US','region_id' => '233','name' => 'Marne'),
  array('locale' => 'en_US','region_id' => '234','name' => 'Haute-Marne'),
  array('locale' => 'en_US','region_id' => '235','name' => 'Mayenne'),
  array('locale' => 'en_US','region_id' => '236','name' => 'Meurthe-et-Moselle'),
  array('locale' => 'en_US','region_id' => '237','name' => 'Meuse'),
  array('locale' => 'en_US','region_id' => '238','name' => 'Morbihan'),
  array('locale' => 'en_US','region_id' => '239','name' => 'Moselle'),
  array('locale' => 'en_US','region_id' => '240','name' => 'Nièvre'),
  array('locale' => 'en_US','region_id' => '241','name' => 'Nord'),
  array('locale' => 'en_US','region_id' => '242','name' => 'Oise'),
  array('locale' => 'en_US','region_id' => '243','name' => 'Orne'),
  array('locale' => 'en_US','region_id' => '244','name' => 'Pas-de-Calais'),
  array('locale' => 'en_US','region_id' => '245','name' => 'Puy-de-Dôme'),
  array('locale' => 'en_US','region_id' => '246','name' => 'Pyrénées-Atlantiques'),
  array('locale' => 'en_US','region_id' => '247','name' => 'Hautes-Pyrénées'),
  array('locale' => 'en_US','region_id' => '248','name' => 'Pyrénées-Orientales'),
  array('locale' => 'en_US','region_id' => '249','name' => 'Bas-Rhin'),
  array('locale' => 'en_US','region_id' => '250','name' => 'Haut-Rhin'),
  array('locale' => 'en_US','region_id' => '251','name' => 'Rhône'),
  array('locale' => 'en_US','region_id' => '252','name' => 'Haute-Saône'),
  array('locale' => 'en_US','region_id' => '253','name' => 'Saône-et-Loire'),
  array('locale' => 'en_US','region_id' => '254','name' => 'Sarthe'),
  array('locale' => 'en_US','region_id' => '255','name' => 'Savoie'),
  array('locale' => 'en_US','region_id' => '256','name' => 'Haute-Savoie'),
  array('locale' => 'en_US','region_id' => '257','name' => 'Paris'),
  array('locale' => 'en_US','region_id' => '258','name' => 'Seine-Maritime'),
  array('locale' => 'en_US','region_id' => '259','name' => 'Seine-et-Marne'),
  array('locale' => 'en_US','region_id' => '260','name' => 'Yvelines'),
  array('locale' => 'en_US','region_id' => '261','name' => 'Deux-Sèvres'),
  array('locale' => 'en_US','region_id' => '262','name' => 'Somme'),
  array('locale' => 'en_US','region_id' => '263','name' => 'Tarn'),
  array('locale' => 'en_US','region_id' => '264','name' => 'Tarn-et-Garonne'),
  array('locale' => 'en_US','region_id' => '265','name' => 'Var'),
  array('locale' => 'en_US','region_id' => '266','name' => 'Vaucluse'),
  array('locale' => 'en_US','region_id' => '267','name' => 'Vendée'),
  array('locale' => 'en_US','region_id' => '268','name' => 'Vienne'),
  array('locale' => 'en_US','region_id' => '269','name' => 'Haute-Vienne'),
  array('locale' => 'en_US','region_id' => '270','name' => 'Vosges'),
  array('locale' => 'en_US','region_id' => '271','name' => 'Yonne'),
  array('locale' => 'en_US','region_id' => '272','name' => 'Territoire-de-Belfort'),
  array('locale' => 'en_US','region_id' => '273','name' => 'Essonne'),
  array('locale' => 'en_US','region_id' => '274','name' => 'Hauts-de-Seine'),
  array('locale' => 'en_US','region_id' => '275','name' => 'Seine-Saint-Denis'),
  array('locale' => 'en_US','region_id' => '276','name' => 'Val-de-Marne'),
  array('locale' => 'en_US','region_id' => '277','name' => 'Val-d\'Oise'),
  array('locale' => 'en_US','region_id' => '278','name' => 'Alba'),
  array('locale' => 'en_US','region_id' => '279','name' => 'Arad'),
  array('locale' => 'en_US','region_id' => '280','name' => 'Argeş'),
  array('locale' => 'en_US','region_id' => '281','name' => 'Bacău'),
  array('locale' => 'en_US','region_id' => '282','name' => 'Bihor'),
  array('locale' => 'en_US','region_id' => '283','name' => 'Bistriţa-Năsăud'),
  array('locale' => 'en_US','region_id' => '284','name' => 'Botoşani'),
  array('locale' => 'en_US','region_id' => '285','name' => 'Braşov'),
  array('locale' => 'en_US','region_id' => '286','name' => 'Brăila'),
  array('locale' => 'en_US','region_id' => '287','name' => 'Bucureşti'),
  array('locale' => 'en_US','region_id' => '288','name' => 'Buzău'),
  array('locale' => 'en_US','region_id' => '289','name' => 'Caraş-Severin'),
  array('locale' => 'en_US','region_id' => '290','name' => 'Călăraşi'),
  array('locale' => 'en_US','region_id' => '291','name' => 'Cluj'),
  array('locale' => 'en_US','region_id' => '292','name' => 'Constanţa'),
  array('locale' => 'en_US','region_id' => '293','name' => 'Covasna'),
  array('locale' => 'en_US','region_id' => '294','name' => 'Dâmboviţa'),
  array('locale' => 'en_US','region_id' => '295','name' => 'Dolj'),
  array('locale' => 'en_US','region_id' => '296','name' => 'Galaţi'),
  array('locale' => 'en_US','region_id' => '297','name' => 'Giurgiu'),
  array('locale' => 'en_US','region_id' => '298','name' => 'Gorj'),
  array('locale' => 'en_US','region_id' => '299','name' => 'Harghita'),
  array('locale' => 'en_US','region_id' => '300','name' => 'Hunedoara'),
  array('locale' => 'en_US','region_id' => '301','name' => 'Ialomiţa'),
  array('locale' => 'en_US','region_id' => '302','name' => 'Iaşi'),
  array('locale' => 'en_US','region_id' => '303','name' => 'Ilfov'),
  array('locale' => 'en_US','region_id' => '304','name' => 'Maramureş'),
  array('locale' => 'en_US','region_id' => '305','name' => 'Mehedinţi'),
  array('locale' => 'en_US','region_id' => '306','name' => 'Mureş'),
  array('locale' => 'en_US','region_id' => '307','name' => 'Neamţ'),
  array('locale' => 'en_US','region_id' => '308','name' => 'Olt'),
  array('locale' => 'en_US','region_id' => '309','name' => 'Prahova'),
  array('locale' => 'en_US','region_id' => '310','name' => 'Satu-Mare'),
  array('locale' => 'en_US','region_id' => '311','name' => 'Sălaj'),
  array('locale' => 'en_US','region_id' => '312','name' => 'Sibiu'),
  array('locale' => 'en_US','region_id' => '313','name' => 'Suceava'),
  array('locale' => 'en_US','region_id' => '314','name' => 'Teleorman'),
  array('locale' => 'en_US','region_id' => '315','name' => 'Timiş'),
  array('locale' => 'en_US','region_id' => '316','name' => 'Tulcea'),
  array('locale' => 'en_US','region_id' => '317','name' => 'Vaslui'),
  array('locale' => 'en_US','region_id' => '318','name' => 'Vâlcea'),
  array('locale' => 'en_US','region_id' => '319','name' => 'Vrancea'),
  array('locale' => 'en_US','region_id' => '320','name' => 'Lappi'),
  array('locale' => 'en_US','region_id' => '321','name' => 'Pohjois-Pohjanmaa'),
  array('locale' => 'en_US','region_id' => '322','name' => 'Kainuu'),
  array('locale' => 'en_US','region_id' => '323','name' => 'Pohjois-Karjala'),
  array('locale' => 'en_US','region_id' => '324','name' => 'Pohjois-Savo'),
  array('locale' => 'en_US','region_id' => '325','name' => 'Etelä-Savo'),
  array('locale' => 'en_US','region_id' => '326','name' => 'Etelä-Pohjanmaa'),
  array('locale' => 'en_US','region_id' => '327','name' => 'Pohjanmaa'),
  array('locale' => 'en_US','region_id' => '328','name' => 'Pirkanmaa'),
  array('locale' => 'en_US','region_id' => '329','name' => 'Satakunta'),
  array('locale' => 'en_US','region_id' => '330','name' => 'Keski-Pohjanmaa'),
  array('locale' => 'en_US','region_id' => '331','name' => 'Keski-Suomi'),
  array('locale' => 'en_US','region_id' => '332','name' => 'Varsinais-Suomi'),
  array('locale' => 'en_US','region_id' => '333','name' => 'Etelä-Karjala'),
  array('locale' => 'en_US','region_id' => '334','name' => 'Päijät-Häme'),
  array('locale' => 'en_US','region_id' => '335','name' => 'Kanta-Häme'),
  array('locale' => 'en_US','region_id' => '336','name' => 'Uusimaa'),
  array('locale' => 'en_US','region_id' => '337','name' => 'Itä-Uusimaa'),
  array('locale' => 'en_US','region_id' => '338','name' => 'Kymenlaakso'),
  array('locale' => 'en_US','region_id' => '339','name' => 'Ahvenanmaa'),
  array('locale' => 'en_US','region_id' => '340','name' => 'Harjumaa'),
  array('locale' => 'en_US','region_id' => '341','name' => 'Hiiumaa'),
  array('locale' => 'en_US','region_id' => '342','name' => 'Ida-Virumaa'),
  array('locale' => 'en_US','region_id' => '343','name' => 'Jõgevamaa'),
  array('locale' => 'en_US','region_id' => '344','name' => 'Järvamaa'),
  array('locale' => 'en_US','region_id' => '345','name' => 'Läänemaa'),
  array('locale' => 'en_US','region_id' => '346','name' => 'Lääne-Virumaa'),
  array('locale' => 'en_US','region_id' => '347','name' => 'Põlvamaa'),
  array('locale' => 'en_US','region_id' => '348','name' => 'Pärnumaa'),
  array('locale' => 'en_US','region_id' => '349','name' => 'Raplamaa'),
  array('locale' => 'en_US','region_id' => '350','name' => 'Saaremaa'),
  array('locale' => 'en_US','region_id' => '351','name' => 'Tartumaa'),
  array('locale' => 'en_US','region_id' => '352','name' => 'Valgamaa'),
  array('locale' => 'en_US','region_id' => '353','name' => 'Viljandimaa'),
  array('locale' => 'en_US','region_id' => '354','name' => 'Võrumaa'),
  array('locale' => 'en_US','region_id' => '355','name' => 'Daugavpils'),
  array('locale' => 'en_US','region_id' => '356','name' => 'Jelgava'),
  array('locale' => 'en_US','region_id' => '357','name' => 'Jēkabpils'),
  array('locale' => 'en_US','region_id' => '358','name' => 'Jūrmala'),
  array('locale' => 'en_US','region_id' => '359','name' => 'Liepāja'),
  array('locale' => 'en_US','region_id' => '360','name' => 'Liepājas novads'),
  array('locale' => 'en_US','region_id' => '361','name' => 'Rēzekne'),
  array('locale' => 'en_US','region_id' => '362','name' => 'Rīga'),
  array('locale' => 'en_US','region_id' => '363','name' => 'Rīgas novads'),
  array('locale' => 'en_US','region_id' => '364','name' => 'Valmiera'),
  array('locale' => 'en_US','region_id' => '365','name' => 'Ventspils'),
  array('locale' => 'en_US','region_id' => '366','name' => 'Aglonas novads'),
  array('locale' => 'en_US','region_id' => '367','name' => 'Aizkraukles novads'),
  array('locale' => 'en_US','region_id' => '368','name' => 'Aizputes novads'),
  array('locale' => 'en_US','region_id' => '369','name' => 'Aknīstes novads'),
  array('locale' => 'en_US','region_id' => '370','name' => 'Alojas novads'),
  array('locale' => 'en_US','region_id' => '371','name' => 'Alsungas novads'),
  array('locale' => 'en_US','region_id' => '372','name' => 'Alūksnes novads'),
  array('locale' => 'en_US','region_id' => '373','name' => 'Amatas novads'),
  array('locale' => 'en_US','region_id' => '374','name' => 'Apes novads'),
  array('locale' => 'en_US','region_id' => '375','name' => 'Auces novads'),
  array('locale' => 'en_US','region_id' => '376','name' => 'Babītes novads'),
  array('locale' => 'en_US','region_id' => '377','name' => 'Baldones novads'),
  array('locale' => 'en_US','region_id' => '378','name' => 'Baltinavas novads'),
  array('locale' => 'en_US','region_id' => '379','name' => 'Balvu novads'),
  array('locale' => 'en_US','region_id' => '380','name' => 'Bauskas novads'),
  array('locale' => 'en_US','region_id' => '381','name' => 'Beverīnas novads'),
  array('locale' => 'en_US','region_id' => '382','name' => 'Brocēnu novads'),
  array('locale' => 'en_US','region_id' => '383','name' => 'Burtnieku novads'),
  array('locale' => 'en_US','region_id' => '384','name' => 'Carnikavas novads'),
  array('locale' => 'en_US','region_id' => '385','name' => 'Cesvaines novads'),
  array('locale' => 'en_US','region_id' => '386','name' => 'Ciblas novads'),
  array('locale' => 'en_US','region_id' => '387','name' => 'Cēsu novads'),
  array('locale' => 'en_US','region_id' => '388','name' => 'Dagdas novads'),
  array('locale' => 'en_US','region_id' => '389','name' => 'Daugavpils novads'),
  array('locale' => 'en_US','region_id' => '390','name' => 'Dobeles novads'),
  array('locale' => 'en_US','region_id' => '391','name' => 'Dundagas novads'),
  array('locale' => 'en_US','region_id' => '392','name' => 'Durbes novads'),
  array('locale' => 'en_US','region_id' => '393','name' => 'Engures novads'),
  array('locale' => 'en_US','region_id' => '394','name' => 'Garkalnes novads'),
  array('locale' => 'en_US','region_id' => '395','name' => 'Grobiņas novads'),
  array('locale' => 'en_US','region_id' => '396','name' => 'Gulbenes novads'),
  array('locale' => 'en_US','region_id' => '397','name' => 'Iecavas novads'),
  array('locale' => 'en_US','region_id' => '398','name' => 'Ikšķiles novads'),
  array('locale' => 'en_US','region_id' => '399','name' => 'Ilūkstes novads'),
  array('locale' => 'en_US','region_id' => '400','name' => 'Inčukalna novads'),
  array('locale' => 'en_US','region_id' => '401','name' => 'Jaunjelgavas novads'),
  array('locale' => 'en_US','region_id' => '402','name' => 'Jaunpiebalgas novads'),
  array('locale' => 'en_US','region_id' => '403','name' => 'Jaunpils novads'),
  array('locale' => 'en_US','region_id' => '404','name' => 'Jelgavas novads'),
  array('locale' => 'en_US','region_id' => '405','name' => 'Jēkabpils novads'),
  array('locale' => 'en_US','region_id' => '406','name' => 'Kandavas novads'),
  array('locale' => 'en_US','region_id' => '407','name' => 'Kokneses novads'),
  array('locale' => 'en_US','region_id' => '408','name' => 'Krimuldas novads'),
  array('locale' => 'en_US','region_id' => '409','name' => 'Krustpils novads'),
  array('locale' => 'en_US','region_id' => '410','name' => 'Krāslavas novads'),
  array('locale' => 'en_US','region_id' => '411','name' => 'Kuldīgas novads'),
  array('locale' => 'en_US','region_id' => '412','name' => 'Kārsavas novads'),
  array('locale' => 'en_US','region_id' => '413','name' => 'Lielvārdes novads'),
  array('locale' => 'en_US','region_id' => '414','name' => 'Limbažu novads'),
  array('locale' => 'en_US','region_id' => '415','name' => 'Lubānas novads'),
  array('locale' => 'en_US','region_id' => '416','name' => 'Ludzas novads'),
  array('locale' => 'en_US','region_id' => '417','name' => 'Līgatnes novads'),
  array('locale' => 'en_US','region_id' => '418','name' => 'Līvānu novads'),
  array('locale' => 'en_US','region_id' => '419','name' => 'Madonas novads'),
  array('locale' => 'en_US','region_id' => '420','name' => 'Mazsalacas novads'),
  array('locale' => 'en_US','region_id' => '421','name' => 'Mālpils novads'),
  array('locale' => 'en_US','region_id' => '422','name' => 'Mārupes novads'),
  array('locale' => 'en_US','region_id' => '423','name' => 'Naukšēnu novads'),
  array('locale' => 'en_US','region_id' => '424','name' => 'Neretas novads'),
  array('locale' => 'en_US','region_id' => '425','name' => 'Nīcas novads'),
  array('locale' => 'en_US','region_id' => '426','name' => 'Ogres novads'),
  array('locale' => 'en_US','region_id' => '427','name' => 'Olaines novads'),
  array('locale' => 'en_US','region_id' => '428','name' => 'Ozolnieku novads'),
  array('locale' => 'en_US','region_id' => '429','name' => 'Preiļu novads'),
  array('locale' => 'en_US','region_id' => '430','name' => 'Priekules novads'),
  array('locale' => 'en_US','region_id' => '431','name' => 'Priekuļu novads'),
  array('locale' => 'en_US','region_id' => '432','name' => 'Pārgaujas novads'),
  array('locale' => 'en_US','region_id' => '433','name' => 'Pāvilostas novads'),
  array('locale' => 'en_US','region_id' => '434','name' => 'Pļaviņu novads'),
  array('locale' => 'en_US','region_id' => '435','name' => 'Raunas novads'),
  array('locale' => 'en_US','region_id' => '436','name' => 'Riebiņu novads'),
  array('locale' => 'en_US','region_id' => '437','name' => 'Rojas novads'),
  array('locale' => 'en_US','region_id' => '438','name' => 'Ropažu novads'),
  array('locale' => 'en_US','region_id' => '439','name' => 'Rucavas novads'),
  array('locale' => 'en_US','region_id' => '440','name' => 'Rugāju novads'),
  array('locale' => 'en_US','region_id' => '441','name' => 'Rundāles novads'),
  array('locale' => 'en_US','region_id' => '442','name' => 'Rēzeknes novads'),
  array('locale' => 'en_US','region_id' => '443','name' => 'Rūjienas novads'),
  array('locale' => 'en_US','region_id' => '444','name' => 'Salacgrīvas novads'),
  array('locale' => 'en_US','region_id' => '445','name' => 'Salas novads'),
  array('locale' => 'en_US','region_id' => '446','name' => 'Salaspils novads'),
  array('locale' => 'en_US','region_id' => '447','name' => 'Saldus novads'),
  array('locale' => 'en_US','region_id' => '448','name' => 'Saulkrastu novads'),
  array('locale' => 'en_US','region_id' => '449','name' => 'Siguldas novads'),
  array('locale' => 'en_US','region_id' => '450','name' => 'Skrundas novads'),
  array('locale' => 'en_US','region_id' => '451','name' => 'Skrīveru novads'),
  array('locale' => 'en_US','region_id' => '452','name' => 'Smiltenes novads'),
  array('locale' => 'en_US','region_id' => '453','name' => 'Stopiņu novads'),
  array('locale' => 'en_US','region_id' => '454','name' => 'Strenču novads'),
  array('locale' => 'en_US','region_id' => '455','name' => 'Sējas novads'),
  array('locale' => 'en_US','region_id' => '456','name' => 'Talsu novads'),
  array('locale' => 'en_US','region_id' => '457','name' => 'Tukuma novads'),
  array('locale' => 'en_US','region_id' => '458','name' => 'Tērvetes novads'),
  array('locale' => 'en_US','region_id' => '459','name' => 'Vaiņodes novads'),
  array('locale' => 'en_US','region_id' => '460','name' => 'Valkas novads'),
  array('locale' => 'en_US','region_id' => '461','name' => 'Valmieras novads'),
  array('locale' => 'en_US','region_id' => '462','name' => 'Varakļānu novads'),
  array('locale' => 'en_US','region_id' => '463','name' => 'Vecpiebalgas novads'),
  array('locale' => 'en_US','region_id' => '464','name' => 'Vecumnieku novads'),
  array('locale' => 'en_US','region_id' => '465','name' => 'Ventspils novads'),
  array('locale' => 'en_US','region_id' => '466','name' => 'Viesītes novads'),
  array('locale' => 'en_US','region_id' => '467','name' => 'Viļakas novads'),
  array('locale' => 'en_US','region_id' => '468','name' => 'Viļānu novads'),
  array('locale' => 'en_US','region_id' => '469','name' => 'Vārkavas novads'),
  array('locale' => 'en_US','region_id' => '470','name' => 'Zilupes novads'),
  array('locale' => 'en_US','region_id' => '471','name' => 'Ādažu novads'),
  array('locale' => 'en_US','region_id' => '472','name' => 'Ērgļu novads'),
  array('locale' => 'en_US','region_id' => '473','name' => 'Ķeguma novads'),
  array('locale' => 'en_US','region_id' => '474','name' => 'Ķekavas novads'),
  array('locale' => 'en_US','region_id' => '475','name' => 'Alytaus Apskritis'),
  array('locale' => 'en_US','region_id' => '476','name' => 'Kauno Apskritis'),
  array('locale' => 'en_US','region_id' => '477','name' => 'Klaipėdos Apskritis'),
  array('locale' => 'en_US','region_id' => '478','name' => 'Marijampolės Apskritis'),
  array('locale' => 'en_US','region_id' => '479','name' => 'Panevėžio Apskritis'),
  array('locale' => 'en_US','region_id' => '480','name' => 'Šiaulių Apskritis'),
  array('locale' => 'en_US','region_id' => '481','name' => 'Tauragės Apskritis'),
  array('locale' => 'en_US','region_id' => '482','name' => 'Telšių Apskritis'),
  array('locale' => 'en_US','region_id' => '483','name' => 'Utenos Apskritis'),
  array('locale' => 'en_US','region_id' => '484','name' => 'Vilniaus Apskritis')
);

/* `magento`.`directory_currency_rate` */
$directory_currency_rate = array(
  array('currency_from' => 'EUR','currency_to' => 'EUR','rate' => '1.000000000000'),
  array('currency_from' => 'EUR','currency_to' => 'USD','rate' => '1.415000000000'),
  array('currency_from' => 'USD','currency_to' => 'EUR','rate' => '0.706700000000'),
  array('currency_from' => 'USD','currency_to' => 'USD','rate' => '1.000000000000')
);

/* `magento`.`downloadable_link` */
$downloadable_link = array(
);

/* `magento`.`downloadable_link_price` */
$downloadable_link_price = array(
);

/* `magento`.`downloadable_link_purchased` */
$downloadable_link_purchased = array(
);

/* `magento`.`downloadable_link_purchased_item` */
$downloadable_link_purchased_item = array(
);

/* `magento`.`downloadable_link_title` */
$downloadable_link_title = array(
);

/* `magento`.`downloadable_sample` */
$downloadable_sample = array(
);

/* `magento`.`downloadable_sample_title` */
$downloadable_sample_title = array(
);

/* `magento`.`eav_attribute` */
$eav_attribute = array(
  array('attribute_id' => '1','entity_type_id' => '1','attribute_code' => 'website_id','attribute_model' => NULL,'backend_model' => 'customer/customer_attribute_backend_website','backend_type' => 'static','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Associate to Website','frontend_class' => NULL,'source_model' => 'customer/customer_attribute_source_website','is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '2','entity_type_id' => '1','attribute_code' => 'store_id','attribute_model' => NULL,'backend_model' => 'customer/customer_attribute_backend_store','backend_type' => 'static','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Create In','frontend_class' => NULL,'source_model' => 'customer/customer_attribute_source_store','is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '3','entity_type_id' => '1','attribute_code' => 'created_in','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Created From','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '4','entity_type_id' => '1','attribute_code' => 'prefix','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Prefix','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '5','entity_type_id' => '1','attribute_code' => 'firstname','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'First Name','frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '6','entity_type_id' => '1','attribute_code' => 'middlename','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Middle Name/Initial','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '7','entity_type_id' => '1','attribute_code' => 'lastname','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Last Name','frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '8','entity_type_id' => '1','attribute_code' => 'suffix','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Suffix','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '9','entity_type_id' => '1','attribute_code' => 'email','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'static','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Email','frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '10','entity_type_id' => '1','attribute_code' => 'group_id','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'static','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Group','frontend_class' => NULL,'source_model' => 'customer/customer_attribute_source_group','is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '11','entity_type_id' => '1','attribute_code' => 'dob','attribute_model' => NULL,'backend_model' => 'eav/entity_attribute_backend_datetime','backend_type' => 'datetime','backend_table' => NULL,'frontend_model' => 'eav/entity_attribute_frontend_datetime','frontend_input' => 'date','frontend_label' => 'Date Of Birth','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '12','entity_type_id' => '1','attribute_code' => 'password_hash','attribute_model' => NULL,'backend_model' => 'customer/customer_attribute_backend_password','backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'hidden','frontend_label' => NULL,'frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '13','entity_type_id' => '1','attribute_code' => 'default_billing','attribute_model' => NULL,'backend_model' => 'customer/customer_attribute_backend_billing','backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Default Billing Address','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '14','entity_type_id' => '1','attribute_code' => 'default_shipping','attribute_model' => NULL,'backend_model' => 'customer/customer_attribute_backend_shipping','backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Default Shipping Address','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '15','entity_type_id' => '1','attribute_code' => 'taxvat','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Tax/VAT Number','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '16','entity_type_id' => '1','attribute_code' => 'confirmation','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Is Confirmed','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '17','entity_type_id' => '1','attribute_code' => 'created_at','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'static','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'datetime','frontend_label' => 'Created At','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '18','entity_type_id' => '1','attribute_code' => 'gender','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Gender','frontend_class' => NULL,'source_model' => 'eav/entity_attribute_source_table','is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '19','entity_type_id' => '2','attribute_code' => 'prefix','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Prefix','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '20','entity_type_id' => '2','attribute_code' => 'firstname','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'First Name','frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '21','entity_type_id' => '2','attribute_code' => 'middlename','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Middle Name/Initial','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '22','entity_type_id' => '2','attribute_code' => 'lastname','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Last Name','frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '23','entity_type_id' => '2','attribute_code' => 'suffix','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Suffix','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '24','entity_type_id' => '2','attribute_code' => 'company','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Company','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '25','entity_type_id' => '2','attribute_code' => 'street','attribute_model' => NULL,'backend_model' => 'customer/entity_address_attribute_backend_street','backend_type' => 'text','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'multiline','frontend_label' => 'Street Address','frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '26','entity_type_id' => '2','attribute_code' => 'city','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'City','frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '27','entity_type_id' => '2','attribute_code' => 'country_id','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Country','frontend_class' => NULL,'source_model' => 'customer/entity_address_attribute_source_country','is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '28','entity_type_id' => '2','attribute_code' => 'region','attribute_model' => NULL,'backend_model' => 'customer/entity_address_attribute_backend_region','backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'State/Province','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '29','entity_type_id' => '2','attribute_code' => 'region_id','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'hidden','frontend_label' => 'State/Province','frontend_class' => NULL,'source_model' => 'customer/entity_address_attribute_source_region','is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '30','entity_type_id' => '2','attribute_code' => 'postcode','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Zip/Postal Code','frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '31','entity_type_id' => '2','attribute_code' => 'telephone','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Telephone','frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '32','entity_type_id' => '2','attribute_code' => 'fax','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Fax','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '33','entity_type_id' => '1','attribute_code' => 'rp_token','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'hidden','frontend_label' => NULL,'frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '34','entity_type_id' => '1','attribute_code' => 'rp_token_created_at','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'datetime','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'date','frontend_label' => NULL,'frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '35','entity_type_id' => '1','attribute_code' => 'disable_auto_group_change','attribute_model' => NULL,'backend_model' => 'customer/attribute_backend_data_boolean','backend_type' => 'static','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'boolean','frontend_label' => 'Disable Automatic Group Change Based on VAT ID','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '36','entity_type_id' => '2','attribute_code' => 'vat_id','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'VAT number','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '37','entity_type_id' => '2','attribute_code' => 'vat_is_valid','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'VAT number validity','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '38','entity_type_id' => '2','attribute_code' => 'vat_request_id','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'VAT number validation request ID','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '39','entity_type_id' => '2','attribute_code' => 'vat_request_date','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'VAT number validation request date','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '40','entity_type_id' => '2','attribute_code' => 'vat_request_success','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'VAT number validation request success','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '41','entity_type_id' => '3','attribute_code' => 'name','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Name','frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '42','entity_type_id' => '3','attribute_code' => 'is_active','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Is Active','frontend_class' => NULL,'source_model' => 'eav/entity_attribute_source_boolean','is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '43','entity_type_id' => '3','attribute_code' => 'url_key','attribute_model' => NULL,'backend_model' => 'catalog/category_attribute_backend_urlkey','backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'URL Key','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '44','entity_type_id' => '3','attribute_code' => 'description','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'text','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'textarea','frontend_label' => 'Description','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '45','entity_type_id' => '3','attribute_code' => 'image','attribute_model' => NULL,'backend_model' => 'catalog/category_attribute_backend_image','backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'image','frontend_label' => 'Image','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '46','entity_type_id' => '3','attribute_code' => 'meta_title','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Page Title','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '47','entity_type_id' => '3','attribute_code' => 'meta_keywords','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'text','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'textarea','frontend_label' => 'Meta Keywords','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '48','entity_type_id' => '3','attribute_code' => 'meta_description','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'text','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'textarea','frontend_label' => 'Meta Description','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '49','entity_type_id' => '3','attribute_code' => 'display_mode','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Display Mode','frontend_class' => NULL,'source_model' => 'catalog/category_attribute_source_mode','is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '50','entity_type_id' => '3','attribute_code' => 'landing_page','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'CMS Block','frontend_class' => NULL,'source_model' => 'catalog/category_attribute_source_page','is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '51','entity_type_id' => '3','attribute_code' => 'is_anchor','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Is Anchor','frontend_class' => NULL,'source_model' => 'eav/entity_attribute_source_boolean','is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '52','entity_type_id' => '3','attribute_code' => 'path','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'static','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Path','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '53','entity_type_id' => '3','attribute_code' => 'position','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'static','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Position','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '54','entity_type_id' => '3','attribute_code' => 'all_children','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'text','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => NULL,'frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '55','entity_type_id' => '3','attribute_code' => 'path_in_store','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'text','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => NULL,'frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '56','entity_type_id' => '3','attribute_code' => 'children','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'text','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => NULL,'frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '57','entity_type_id' => '3','attribute_code' => 'url_path','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => NULL,'frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '58','entity_type_id' => '3','attribute_code' => 'custom_design','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Custom Design','frontend_class' => NULL,'source_model' => 'core/design_source_design','is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '59','entity_type_id' => '3','attribute_code' => 'custom_design_from','attribute_model' => NULL,'backend_model' => 'eav/entity_attribute_backend_datetime','backend_type' => 'datetime','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'date','frontend_label' => 'Active From','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '60','entity_type_id' => '3','attribute_code' => 'custom_design_to','attribute_model' => NULL,'backend_model' => 'eav/entity_attribute_backend_datetime','backend_type' => 'datetime','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'date','frontend_label' => 'Active To','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '61','entity_type_id' => '3','attribute_code' => 'page_layout','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Page Layout','frontend_class' => NULL,'source_model' => 'catalog/category_attribute_source_layout','is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '62','entity_type_id' => '3','attribute_code' => 'custom_layout_update','attribute_model' => NULL,'backend_model' => 'catalog/attribute_backend_customlayoutupdate','backend_type' => 'text','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'textarea','frontend_label' => 'Custom Layout Update','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '63','entity_type_id' => '3','attribute_code' => 'level','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'static','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Level','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '64','entity_type_id' => '3','attribute_code' => 'children_count','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'static','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Children Count','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '65','entity_type_id' => '3','attribute_code' => 'available_sort_by','attribute_model' => NULL,'backend_model' => 'catalog/category_attribute_backend_sortby','backend_type' => 'text','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'multiselect','frontend_label' => 'Available Product Listing Sort By','frontend_class' => NULL,'source_model' => 'catalog/category_attribute_source_sortby','is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '66','entity_type_id' => '3','attribute_code' => 'default_sort_by','attribute_model' => NULL,'backend_model' => 'catalog/category_attribute_backend_sortby','backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Default Product Listing Sort By','frontend_class' => NULL,'source_model' => 'catalog/category_attribute_source_sortby','is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '67','entity_type_id' => '3','attribute_code' => 'include_in_menu','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Include in Navigation Menu','frontend_class' => NULL,'source_model' => 'eav/entity_attribute_source_boolean','is_required' => '1','is_user_defined' => '0','default_value' => '1','is_unique' => '0','note' => NULL),
  array('attribute_id' => '68','entity_type_id' => '3','attribute_code' => 'custom_use_parent_settings','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Use Parent Category Settings','frontend_class' => NULL,'source_model' => 'eav/entity_attribute_source_boolean','is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '69','entity_type_id' => '3','attribute_code' => 'custom_apply_to_products','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Apply To Products','frontend_class' => NULL,'source_model' => 'eav/entity_attribute_source_boolean','is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '70','entity_type_id' => '3','attribute_code' => 'filter_price_range','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'decimal','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Layered Navigation Price Step','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '71','entity_type_id' => '4','attribute_code' => 'name','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Name','frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '72','entity_type_id' => '4','attribute_code' => 'description','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'text','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'textarea','frontend_label' => 'Description','frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '73','entity_type_id' => '4','attribute_code' => 'short_description','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'text','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'textarea','frontend_label' => 'Short Description','frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '74','entity_type_id' => '4','attribute_code' => 'sku','attribute_model' => NULL,'backend_model' => 'catalog/product_attribute_backend_sku','backend_type' => 'static','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'SKU','frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '1','note' => NULL),
  array('attribute_id' => '75','entity_type_id' => '4','attribute_code' => 'price','attribute_model' => NULL,'backend_model' => 'catalog/product_attribute_backend_price','backend_type' => 'decimal','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'price','frontend_label' => 'Price','frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '76','entity_type_id' => '4','attribute_code' => 'special_price','attribute_model' => NULL,'backend_model' => 'catalog/product_attribute_backend_price','backend_type' => 'decimal','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'price','frontend_label' => 'Special Price','frontend_class' => 'validate-special-price','source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '77','entity_type_id' => '4','attribute_code' => 'special_from_date','attribute_model' => NULL,'backend_model' => 'catalog/product_attribute_backend_startdate_specialprice','backend_type' => 'datetime','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'date','frontend_label' => 'Special Price From Date','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '78','entity_type_id' => '4','attribute_code' => 'special_to_date','attribute_model' => NULL,'backend_model' => 'eav/entity_attribute_backend_datetime','backend_type' => 'datetime','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'date','frontend_label' => 'Special Price To Date','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '79','entity_type_id' => '4','attribute_code' => 'cost','attribute_model' => NULL,'backend_model' => 'catalog/product_attribute_backend_price','backend_type' => 'decimal','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'price','frontend_label' => 'Cost','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '1','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '80','entity_type_id' => '4','attribute_code' => 'weight','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'decimal','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'weight','frontend_label' => 'Weight','frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '81','entity_type_id' => '4','attribute_code' => 'manufacturer','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Manufacturer','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '1','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '82','entity_type_id' => '4','attribute_code' => 'meta_title','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Meta Title','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '83','entity_type_id' => '4','attribute_code' => 'meta_keyword','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'text','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'textarea','frontend_label' => 'Meta Keywords','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '84','entity_type_id' => '4','attribute_code' => 'meta_description','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'textarea','frontend_label' => 'Meta Description','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => 'Maximum 255 chars'),
  array('attribute_id' => '85','entity_type_id' => '4','attribute_code' => 'image','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => 'catalog/product_attribute_frontend_image','frontend_input' => 'media_image','frontend_label' => 'Base Image','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '86','entity_type_id' => '4','attribute_code' => 'small_image','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => 'catalog/product_attribute_frontend_image','frontend_input' => 'media_image','frontend_label' => 'Small Image','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '87','entity_type_id' => '4','attribute_code' => 'thumbnail','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => 'catalog/product_attribute_frontend_image','frontend_input' => 'media_image','frontend_label' => 'Thumbnail','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '88','entity_type_id' => '4','attribute_code' => 'media_gallery','attribute_model' => NULL,'backend_model' => 'catalog/product_attribute_backend_media','backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'gallery','frontend_label' => 'Media Gallery','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '89','entity_type_id' => '4','attribute_code' => 'old_id','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => NULL,'frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '90','entity_type_id' => '4','attribute_code' => 'group_price','attribute_model' => NULL,'backend_model' => 'catalog/product_attribute_backend_groupprice','backend_type' => 'decimal','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Group Price','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '91','entity_type_id' => '4','attribute_code' => 'tier_price','attribute_model' => NULL,'backend_model' => 'catalog/product_attribute_backend_tierprice','backend_type' => 'decimal','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Tier Price','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '92','entity_type_id' => '4','attribute_code' => 'color','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Color','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '1','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '93','entity_type_id' => '4','attribute_code' => 'news_from_date','attribute_model' => NULL,'backend_model' => 'catalog/product_attribute_backend_startdate','backend_type' => 'datetime','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'date','frontend_label' => 'Set Product as New from Date','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '94','entity_type_id' => '4','attribute_code' => 'news_to_date','attribute_model' => NULL,'backend_model' => 'eav/entity_attribute_backend_datetime','backend_type' => 'datetime','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'date','frontend_label' => 'Set Product as New to Date','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '95','entity_type_id' => '4','attribute_code' => 'gallery','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'gallery','frontend_label' => 'Image Gallery','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '96','entity_type_id' => '4','attribute_code' => 'status','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Status','frontend_class' => NULL,'source_model' => 'catalog/product_status','is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '97','entity_type_id' => '4','attribute_code' => 'url_key','attribute_model' => NULL,'backend_model' => 'catalog/product_attribute_backend_urlkey','backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'URL Key','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '98','entity_type_id' => '4','attribute_code' => 'url_path','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => NULL,'frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '99','entity_type_id' => '4','attribute_code' => 'minimal_price','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'decimal','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'price','frontend_label' => 'Minimal Price','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '100','entity_type_id' => '4','attribute_code' => 'is_recurring','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Enable Recurring Profile','frontend_class' => NULL,'source_model' => 'eav/entity_attribute_source_boolean','is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => 'Products with recurring profile participate in catalog as nominal items.'),
  array('attribute_id' => '101','entity_type_id' => '4','attribute_code' => 'recurring_profile','attribute_model' => NULL,'backend_model' => 'catalog/product_attribute_backend_recurring','backend_type' => 'text','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Recurring Payment Profile','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '102','entity_type_id' => '4','attribute_code' => 'visibility','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Visibility','frontend_class' => NULL,'source_model' => 'catalog/product_visibility','is_required' => '1','is_user_defined' => '0','default_value' => '4','is_unique' => '0','note' => NULL),
  array('attribute_id' => '103','entity_type_id' => '4','attribute_code' => 'custom_design','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Custom Design','frontend_class' => NULL,'source_model' => 'core/design_source_design','is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '104','entity_type_id' => '4','attribute_code' => 'custom_design_from','attribute_model' => NULL,'backend_model' => 'catalog/product_attribute_backend_startdate','backend_type' => 'datetime','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'date','frontend_label' => 'Active From','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '105','entity_type_id' => '4','attribute_code' => 'custom_design_to','attribute_model' => NULL,'backend_model' => 'eav/entity_attribute_backend_datetime','backend_type' => 'datetime','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'date','frontend_label' => 'Active To','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '106','entity_type_id' => '4','attribute_code' => 'custom_layout_update','attribute_model' => NULL,'backend_model' => 'catalog/attribute_backend_customlayoutupdate','backend_type' => 'text','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'textarea','frontend_label' => 'Custom Layout Update','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '107','entity_type_id' => '4','attribute_code' => 'page_layout','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Page Layout','frontend_class' => NULL,'source_model' => 'catalog/product_attribute_source_layout','is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '108','entity_type_id' => '4','attribute_code' => 'category_ids','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'static','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => NULL,'frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '109','entity_type_id' => '4','attribute_code' => 'options_container','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Display Product Options In','frontend_class' => NULL,'source_model' => 'catalog/entity_product_attribute_design_options_container','is_required' => '0','is_user_defined' => '0','default_value' => 'container1','is_unique' => '0','note' => NULL),
  array('attribute_id' => '110','entity_type_id' => '4','attribute_code' => 'required_options','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'static','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => NULL,'frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '111','entity_type_id' => '4','attribute_code' => 'has_options','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'static','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => NULL,'frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '112','entity_type_id' => '4','attribute_code' => 'image_label','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Image Label','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '113','entity_type_id' => '4','attribute_code' => 'small_image_label','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Small Image Label','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '114','entity_type_id' => '4','attribute_code' => 'thumbnail_label','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Thumbnail Label','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '115','entity_type_id' => '4','attribute_code' => 'created_at','attribute_model' => NULL,'backend_model' => 'eav/entity_attribute_backend_time_created','backend_type' => 'static','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => NULL,'frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '116','entity_type_id' => '4','attribute_code' => 'updated_at','attribute_model' => NULL,'backend_model' => 'eav/entity_attribute_backend_time_updated','backend_type' => 'static','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => NULL,'frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '117','entity_type_id' => '4','attribute_code' => 'country_of_manufacture','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Country of Manufacture','frontend_class' => NULL,'source_model' => 'catalog/product_attribute_source_countryofmanufacture','is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '118','entity_type_id' => '4','attribute_code' => 'msrp_enabled','attribute_model' => NULL,'backend_model' => 'catalog/product_attribute_backend_msrp','backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Apply MAP','frontend_class' => NULL,'source_model' => 'catalog/product_attribute_source_msrp_type_enabled','is_required' => '0','is_user_defined' => '0','default_value' => '2','is_unique' => '0','note' => NULL),
  array('attribute_id' => '119','entity_type_id' => '4','attribute_code' => 'msrp_display_actual_price_type','attribute_model' => NULL,'backend_model' => 'catalog/product_attribute_backend_boolean','backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Display Actual Price','frontend_class' => NULL,'source_model' => 'catalog/product_attribute_source_msrp_type_price','is_required' => '0','is_user_defined' => '0','default_value' => '4','is_unique' => '0','note' => NULL),
  array('attribute_id' => '120','entity_type_id' => '4','attribute_code' => 'msrp','attribute_model' => NULL,'backend_model' => 'catalog/product_attribute_backend_price','backend_type' => 'decimal','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'price','frontend_label' => 'Manufacturer\'s Suggested Retail Price','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '121','entity_type_id' => '4','attribute_code' => 'tax_class_id','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Tax Class','frontend_class' => NULL,'source_model' => 'tax/class_source_product','is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '122','entity_type_id' => '4','attribute_code' => 'gift_message_available','attribute_model' => NULL,'backend_model' => 'catalog/product_attribute_backend_boolean','backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Allow Gift Message','frontend_class' => NULL,'source_model' => 'eav/entity_attribute_source_boolean','is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '123','entity_type_id' => '4','attribute_code' => 'price_type','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => NULL,'frontend_label' => NULL,'frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '124','entity_type_id' => '4','attribute_code' => 'sku_type','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => NULL,'frontend_label' => NULL,'frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '125','entity_type_id' => '4','attribute_code' => 'weight_type','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => NULL,'frontend_label' => NULL,'frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '126','entity_type_id' => '4','attribute_code' => 'price_view','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Price View','frontend_class' => NULL,'source_model' => 'bundle/product_attribute_source_price_view','is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '127','entity_type_id' => '4','attribute_code' => 'shipment_type','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => NULL,'frontend_label' => 'Shipment','frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '128','entity_type_id' => '4','attribute_code' => 'links_purchased_separately','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => NULL,'frontend_label' => 'Links can be purchased separately','frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '129','entity_type_id' => '4','attribute_code' => 'samples_title','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => NULL,'frontend_label' => 'Samples title','frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '130','entity_type_id' => '4','attribute_code' => 'links_title','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'varchar','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => NULL,'frontend_label' => 'Links title','frontend_class' => NULL,'source_model' => NULL,'is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '131','entity_type_id' => '4','attribute_code' => 'links_exist','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => NULL,'frontend_label' => NULL,'frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => '0','is_unique' => '0','note' => NULL),
  array('attribute_id' => '132','entity_type_id' => '4','attribute_code' => 'product_status','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'select','frontend_label' => 'Product Status','frontend_class' => NULL,'source_model' => 'marketplace/catalog_product_attribute_status','is_required' => '1','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '133','entity_type_id' => '4','attribute_code' => 'domestic_shipping_cost','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'Domestic Shipping Cost','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL),
  array('attribute_id' => '134','entity_type_id' => '4','attribute_code' => 'international_shipping_cost','attribute_model' => NULL,'backend_model' => NULL,'backend_type' => 'int','backend_table' => NULL,'frontend_model' => NULL,'frontend_input' => 'text','frontend_label' => 'International Shipping Cost','frontend_class' => NULL,'source_model' => NULL,'is_required' => '0','is_user_defined' => '0','default_value' => NULL,'is_unique' => '0','note' => NULL)
);

/* `magento`.`eav_attribute_group` */
$eav_attribute_group = array(
  array('attribute_group_id' => '1','attribute_set_id' => '1','attribute_group_name' => 'General','sort_order' => '1','default_id' => '1'),
  array('attribute_group_id' => '2','attribute_set_id' => '2','attribute_group_name' => 'General','sort_order' => '1','default_id' => '1'),
  array('attribute_group_id' => '3','attribute_set_id' => '3','attribute_group_name' => 'General','sort_order' => '10','default_id' => '1'),
  array('attribute_group_id' => '4','attribute_set_id' => '3','attribute_group_name' => 'General Information','sort_order' => '2','default_id' => '0'),
  array('attribute_group_id' => '5','attribute_set_id' => '3','attribute_group_name' => 'Display Settings','sort_order' => '20','default_id' => '0'),
  array('attribute_group_id' => '6','attribute_set_id' => '3','attribute_group_name' => 'Custom Design','sort_order' => '30','default_id' => '0'),
  array('attribute_group_id' => '7','attribute_set_id' => '4','attribute_group_name' => 'General','sort_order' => '1','default_id' => '1'),
  array('attribute_group_id' => '8','attribute_set_id' => '4','attribute_group_name' => 'Prices','sort_order' => '2','default_id' => '0'),
  array('attribute_group_id' => '9','attribute_set_id' => '4','attribute_group_name' => 'Meta Information','sort_order' => '3','default_id' => '0'),
  array('attribute_group_id' => '10','attribute_set_id' => '4','attribute_group_name' => 'Images','sort_order' => '4','default_id' => '0'),
  array('attribute_group_id' => '11','attribute_set_id' => '4','attribute_group_name' => 'Recurring Profile','sort_order' => '5','default_id' => '0'),
  array('attribute_group_id' => '12','attribute_set_id' => '4','attribute_group_name' => 'Design','sort_order' => '6','default_id' => '0'),
  array('attribute_group_id' => '13','attribute_set_id' => '5','attribute_group_name' => 'General','sort_order' => '1','default_id' => '1'),
  array('attribute_group_id' => '14','attribute_set_id' => '6','attribute_group_name' => 'General','sort_order' => '1','default_id' => '1'),
  array('attribute_group_id' => '15','attribute_set_id' => '7','attribute_group_name' => 'General','sort_order' => '1','default_id' => '1'),
  array('attribute_group_id' => '16','attribute_set_id' => '8','attribute_group_name' => 'General','sort_order' => '1','default_id' => '1'),
  array('attribute_group_id' => '17','attribute_set_id' => '4','attribute_group_name' => 'Gift Options','sort_order' => '7','default_id' => '0')
);

/* `magento`.`eav_attribute_label` */
$eav_attribute_label = array(
);

/* `magento`.`eav_attribute_option` */
$eav_attribute_option = array(
  array('option_id' => '1','attribute_id' => '18','sort_order' => '0'),
  array('option_id' => '2','attribute_id' => '18','sort_order' => '1')
);

/* `magento`.`eav_attribute_option_value` */
$eav_attribute_option_value = array(
  array('value_id' => '1','option_id' => '1','store_id' => '0','value' => 'Male'),
  array('value_id' => '2','option_id' => '2','store_id' => '0','value' => 'Female')
);

/* `magento`.`eav_attribute_set` */
$eav_attribute_set = array(
  array('attribute_set_id' => '1','entity_type_id' => '1','attribute_set_name' => 'Default','sort_order' => '1'),
  array('attribute_set_id' => '2','entity_type_id' => '2','attribute_set_name' => 'Default','sort_order' => '1'),
  array('attribute_set_id' => '3','entity_type_id' => '3','attribute_set_name' => 'Default','sort_order' => '1'),
  array('attribute_set_id' => '4','entity_type_id' => '4','attribute_set_name' => 'Default','sort_order' => '1'),
  array('attribute_set_id' => '5','entity_type_id' => '5','attribute_set_name' => 'Default','sort_order' => '1'),
  array('attribute_set_id' => '6','entity_type_id' => '6','attribute_set_name' => 'Default','sort_order' => '1'),
  array('attribute_set_id' => '7','entity_type_id' => '7','attribute_set_name' => 'Default','sort_order' => '1'),
  array('attribute_set_id' => '8','entity_type_id' => '8','attribute_set_name' => 'Default','sort_order' => '1')
);

/* `magento`.`eav_entity` */
$eav_entity = array(
);

/* `magento`.`eav_entity_attribute` */
$eav_entity_attribute = array(
  array('entity_attribute_id' => '1','entity_type_id' => '1','attribute_set_id' => '1','attribute_group_id' => '1','attribute_id' => '1','sort_order' => '10'),
  array('entity_attribute_id' => '2','entity_type_id' => '1','attribute_set_id' => '1','attribute_group_id' => '1','attribute_id' => '2','sort_order' => '0'),
  array('entity_attribute_id' => '3','entity_type_id' => '1','attribute_set_id' => '1','attribute_group_id' => '1','attribute_id' => '3','sort_order' => '20'),
  array('entity_attribute_id' => '4','entity_type_id' => '1','attribute_set_id' => '1','attribute_group_id' => '1','attribute_id' => '4','sort_order' => '30'),
  array('entity_attribute_id' => '5','entity_type_id' => '1','attribute_set_id' => '1','attribute_group_id' => '1','attribute_id' => '5','sort_order' => '40'),
  array('entity_attribute_id' => '6','entity_type_id' => '1','attribute_set_id' => '1','attribute_group_id' => '1','attribute_id' => '6','sort_order' => '50'),
  array('entity_attribute_id' => '7','entity_type_id' => '1','attribute_set_id' => '1','attribute_group_id' => '1','attribute_id' => '7','sort_order' => '60'),
  array('entity_attribute_id' => '8','entity_type_id' => '1','attribute_set_id' => '1','attribute_group_id' => '1','attribute_id' => '8','sort_order' => '70'),
  array('entity_attribute_id' => '9','entity_type_id' => '1','attribute_set_id' => '1','attribute_group_id' => '1','attribute_id' => '9','sort_order' => '80'),
  array('entity_attribute_id' => '10','entity_type_id' => '1','attribute_set_id' => '1','attribute_group_id' => '1','attribute_id' => '10','sort_order' => '25'),
  array('entity_attribute_id' => '11','entity_type_id' => '1','attribute_set_id' => '1','attribute_group_id' => '1','attribute_id' => '11','sort_order' => '90'),
  array('entity_attribute_id' => '12','entity_type_id' => '1','attribute_set_id' => '1','attribute_group_id' => '1','attribute_id' => '12','sort_order' => '0'),
  array('entity_attribute_id' => '13','entity_type_id' => '1','attribute_set_id' => '1','attribute_group_id' => '1','attribute_id' => '13','sort_order' => '0'),
  array('entity_attribute_id' => '14','entity_type_id' => '1','attribute_set_id' => '1','attribute_group_id' => '1','attribute_id' => '14','sort_order' => '0'),
  array('entity_attribute_id' => '15','entity_type_id' => '1','attribute_set_id' => '1','attribute_group_id' => '1','attribute_id' => '15','sort_order' => '100'),
  array('entity_attribute_id' => '16','entity_type_id' => '1','attribute_set_id' => '1','attribute_group_id' => '1','attribute_id' => '16','sort_order' => '0'),
  array('entity_attribute_id' => '17','entity_type_id' => '1','attribute_set_id' => '1','attribute_group_id' => '1','attribute_id' => '17','sort_order' => '86'),
  array('entity_attribute_id' => '18','entity_type_id' => '1','attribute_set_id' => '1','attribute_group_id' => '1','attribute_id' => '18','sort_order' => '110'),
  array('entity_attribute_id' => '19','entity_type_id' => '2','attribute_set_id' => '2','attribute_group_id' => '2','attribute_id' => '19','sort_order' => '10'),
  array('entity_attribute_id' => '20','entity_type_id' => '2','attribute_set_id' => '2','attribute_group_id' => '2','attribute_id' => '20','sort_order' => '20'),
  array('entity_attribute_id' => '21','entity_type_id' => '2','attribute_set_id' => '2','attribute_group_id' => '2','attribute_id' => '21','sort_order' => '30'),
  array('entity_attribute_id' => '22','entity_type_id' => '2','attribute_set_id' => '2','attribute_group_id' => '2','attribute_id' => '22','sort_order' => '40'),
  array('entity_attribute_id' => '23','entity_type_id' => '2','attribute_set_id' => '2','attribute_group_id' => '2','attribute_id' => '23','sort_order' => '50'),
  array('entity_attribute_id' => '24','entity_type_id' => '2','attribute_set_id' => '2','attribute_group_id' => '2','attribute_id' => '24','sort_order' => '60'),
  array('entity_attribute_id' => '25','entity_type_id' => '2','attribute_set_id' => '2','attribute_group_id' => '2','attribute_id' => '25','sort_order' => '70'),
  array('entity_attribute_id' => '26','entity_type_id' => '2','attribute_set_id' => '2','attribute_group_id' => '2','attribute_id' => '26','sort_order' => '80'),
  array('entity_attribute_id' => '27','entity_type_id' => '2','attribute_set_id' => '2','attribute_group_id' => '2','attribute_id' => '27','sort_order' => '90'),
  array('entity_attribute_id' => '28','entity_type_id' => '2','attribute_set_id' => '2','attribute_group_id' => '2','attribute_id' => '28','sort_order' => '100'),
  array('entity_attribute_id' => '29','entity_type_id' => '2','attribute_set_id' => '2','attribute_group_id' => '2','attribute_id' => '29','sort_order' => '100'),
  array('entity_attribute_id' => '30','entity_type_id' => '2','attribute_set_id' => '2','attribute_group_id' => '2','attribute_id' => '30','sort_order' => '110'),
  array('entity_attribute_id' => '31','entity_type_id' => '2','attribute_set_id' => '2','attribute_group_id' => '2','attribute_id' => '31','sort_order' => '120'),
  array('entity_attribute_id' => '32','entity_type_id' => '2','attribute_set_id' => '2','attribute_group_id' => '2','attribute_id' => '32','sort_order' => '130'),
  array('entity_attribute_id' => '33','entity_type_id' => '1','attribute_set_id' => '1','attribute_group_id' => '1','attribute_id' => '33','sort_order' => '111'),
  array('entity_attribute_id' => '34','entity_type_id' => '1','attribute_set_id' => '1','attribute_group_id' => '1','attribute_id' => '34','sort_order' => '112'),
  array('entity_attribute_id' => '35','entity_type_id' => '1','attribute_set_id' => '1','attribute_group_id' => '1','attribute_id' => '35','sort_order' => '28'),
  array('entity_attribute_id' => '36','entity_type_id' => '2','attribute_set_id' => '2','attribute_group_id' => '2','attribute_id' => '36','sort_order' => '140'),
  array('entity_attribute_id' => '37','entity_type_id' => '2','attribute_set_id' => '2','attribute_group_id' => '2','attribute_id' => '37','sort_order' => '132'),
  array('entity_attribute_id' => '38','entity_type_id' => '2','attribute_set_id' => '2','attribute_group_id' => '2','attribute_id' => '38','sort_order' => '133'),
  array('entity_attribute_id' => '39','entity_type_id' => '2','attribute_set_id' => '2','attribute_group_id' => '2','attribute_id' => '39','sort_order' => '134'),
  array('entity_attribute_id' => '40','entity_type_id' => '2','attribute_set_id' => '2','attribute_group_id' => '2','attribute_id' => '40','sort_order' => '135'),
  array('entity_attribute_id' => '41','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '4','attribute_id' => '41','sort_order' => '1'),
  array('entity_attribute_id' => '42','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '4','attribute_id' => '42','sort_order' => '2'),
  array('entity_attribute_id' => '43','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '4','attribute_id' => '43','sort_order' => '3'),
  array('entity_attribute_id' => '44','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '4','attribute_id' => '44','sort_order' => '4'),
  array('entity_attribute_id' => '45','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '4','attribute_id' => '45','sort_order' => '5'),
  array('entity_attribute_id' => '46','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '4','attribute_id' => '46','sort_order' => '6'),
  array('entity_attribute_id' => '47','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '4','attribute_id' => '47','sort_order' => '7'),
  array('entity_attribute_id' => '48','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '4','attribute_id' => '48','sort_order' => '8'),
  array('entity_attribute_id' => '49','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '5','attribute_id' => '49','sort_order' => '10'),
  array('entity_attribute_id' => '50','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '5','attribute_id' => '50','sort_order' => '20'),
  array('entity_attribute_id' => '51','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '5','attribute_id' => '51','sort_order' => '30'),
  array('entity_attribute_id' => '52','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '4','attribute_id' => '52','sort_order' => '12'),
  array('entity_attribute_id' => '53','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '4','attribute_id' => '53','sort_order' => '13'),
  array('entity_attribute_id' => '54','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '4','attribute_id' => '54','sort_order' => '14'),
  array('entity_attribute_id' => '55','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '4','attribute_id' => '55','sort_order' => '15'),
  array('entity_attribute_id' => '56','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '4','attribute_id' => '56','sort_order' => '16'),
  array('entity_attribute_id' => '57','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '4','attribute_id' => '57','sort_order' => '17'),
  array('entity_attribute_id' => '58','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '6','attribute_id' => '58','sort_order' => '10'),
  array('entity_attribute_id' => '59','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '6','attribute_id' => '59','sort_order' => '30'),
  array('entity_attribute_id' => '60','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '6','attribute_id' => '60','sort_order' => '40'),
  array('entity_attribute_id' => '61','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '6','attribute_id' => '61','sort_order' => '50'),
  array('entity_attribute_id' => '62','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '6','attribute_id' => '62','sort_order' => '60'),
  array('entity_attribute_id' => '63','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '4','attribute_id' => '63','sort_order' => '24'),
  array('entity_attribute_id' => '64','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '4','attribute_id' => '64','sort_order' => '25'),
  array('entity_attribute_id' => '65','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '5','attribute_id' => '65','sort_order' => '40'),
  array('entity_attribute_id' => '66','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '5','attribute_id' => '66','sort_order' => '50'),
  array('entity_attribute_id' => '67','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '4','attribute_id' => '67','sort_order' => '10'),
  array('entity_attribute_id' => '68','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '6','attribute_id' => '68','sort_order' => '5'),
  array('entity_attribute_id' => '69','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '6','attribute_id' => '69','sort_order' => '6'),
  array('entity_attribute_id' => '70','entity_type_id' => '3','attribute_set_id' => '3','attribute_group_id' => '5','attribute_id' => '70','sort_order' => '51'),
  array('entity_attribute_id' => '71','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '71','sort_order' => '1'),
  array('entity_attribute_id' => '72','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '72','sort_order' => '2'),
  array('entity_attribute_id' => '73','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '73','sort_order' => '3'),
  array('entity_attribute_id' => '74','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '74','sort_order' => '4'),
  array('entity_attribute_id' => '75','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '8','attribute_id' => '75','sort_order' => '1'),
  array('entity_attribute_id' => '76','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '8','attribute_id' => '76','sort_order' => '3'),
  array('entity_attribute_id' => '77','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '8','attribute_id' => '77','sort_order' => '4'),
  array('entity_attribute_id' => '78','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '8','attribute_id' => '78','sort_order' => '5'),
  array('entity_attribute_id' => '79','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '8','attribute_id' => '79','sort_order' => '6'),
  array('entity_attribute_id' => '80','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '80','sort_order' => '5'),
  array('entity_attribute_id' => '81','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '9','attribute_id' => '82','sort_order' => '1'),
  array('entity_attribute_id' => '82','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '9','attribute_id' => '83','sort_order' => '2'),
  array('entity_attribute_id' => '83','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '9','attribute_id' => '84','sort_order' => '3'),
  array('entity_attribute_id' => '84','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '10','attribute_id' => '85','sort_order' => '1'),
  array('entity_attribute_id' => '85','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '10','attribute_id' => '86','sort_order' => '2'),
  array('entity_attribute_id' => '86','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '10','attribute_id' => '87','sort_order' => '3'),
  array('entity_attribute_id' => '87','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '10','attribute_id' => '88','sort_order' => '4'),
  array('entity_attribute_id' => '88','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '89','sort_order' => '6'),
  array('entity_attribute_id' => '89','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '8','attribute_id' => '90','sort_order' => '2'),
  array('entity_attribute_id' => '90','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '8','attribute_id' => '91','sort_order' => '7'),
  array('entity_attribute_id' => '91','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '93','sort_order' => '7'),
  array('entity_attribute_id' => '92','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '94','sort_order' => '8'),
  array('entity_attribute_id' => '93','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '10','attribute_id' => '95','sort_order' => '5'),
  array('entity_attribute_id' => '94','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '96','sort_order' => '9'),
  array('entity_attribute_id' => '95','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '97','sort_order' => '10'),
  array('entity_attribute_id' => '96','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '98','sort_order' => '11'),
  array('entity_attribute_id' => '97','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '8','attribute_id' => '99','sort_order' => '8'),
  array('entity_attribute_id' => '98','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '11','attribute_id' => '100','sort_order' => '1'),
  array('entity_attribute_id' => '99','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '11','attribute_id' => '101','sort_order' => '2'),
  array('entity_attribute_id' => '100','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '102','sort_order' => '12'),
  array('entity_attribute_id' => '101','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '12','attribute_id' => '103','sort_order' => '1'),
  array('entity_attribute_id' => '102','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '12','attribute_id' => '104','sort_order' => '2'),
  array('entity_attribute_id' => '103','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '12','attribute_id' => '105','sort_order' => '3'),
  array('entity_attribute_id' => '104','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '12','attribute_id' => '106','sort_order' => '4'),
  array('entity_attribute_id' => '105','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '12','attribute_id' => '107','sort_order' => '5'),
  array('entity_attribute_id' => '106','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '108','sort_order' => '13'),
  array('entity_attribute_id' => '107','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '12','attribute_id' => '109','sort_order' => '6'),
  array('entity_attribute_id' => '108','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '110','sort_order' => '14'),
  array('entity_attribute_id' => '109','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '111','sort_order' => '15'),
  array('entity_attribute_id' => '110','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '112','sort_order' => '16'),
  array('entity_attribute_id' => '111','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '113','sort_order' => '17'),
  array('entity_attribute_id' => '112','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '114','sort_order' => '18'),
  array('entity_attribute_id' => '113','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '115','sort_order' => '19'),
  array('entity_attribute_id' => '114','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '116','sort_order' => '20'),
  array('entity_attribute_id' => '115','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '117','sort_order' => '21'),
  array('entity_attribute_id' => '116','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '8','attribute_id' => '118','sort_order' => '9'),
  array('entity_attribute_id' => '117','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '8','attribute_id' => '119','sort_order' => '10'),
  array('entity_attribute_id' => '118','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '8','attribute_id' => '120','sort_order' => '11'),
  array('entity_attribute_id' => '119','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '8','attribute_id' => '121','sort_order' => '12'),
  array('entity_attribute_id' => '120','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '17','attribute_id' => '122','sort_order' => '1'),
  array('entity_attribute_id' => '121','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '123','sort_order' => '22'),
  array('entity_attribute_id' => '122','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '124','sort_order' => '23'),
  array('entity_attribute_id' => '123','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '125','sort_order' => '24'),
  array('entity_attribute_id' => '124','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '8','attribute_id' => '126','sort_order' => '13'),
  array('entity_attribute_id' => '125','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '127','sort_order' => '25'),
  array('entity_attribute_id' => '126','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '128','sort_order' => '26'),
  array('entity_attribute_id' => '127','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '129','sort_order' => '27'),
  array('entity_attribute_id' => '128','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '130','sort_order' => '28'),
  array('entity_attribute_id' => '129','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '131','sort_order' => '29'),
  array('entity_attribute_id' => '130','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '132','sort_order' => '30'),
  array('entity_attribute_id' => '131','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '133','sort_order' => '31'),
  array('entity_attribute_id' => '132','entity_type_id' => '4','attribute_set_id' => '4','attribute_group_id' => '7','attribute_id' => '134','sort_order' => '32')
);

/* `magento`.`eav_entity_datetime` */
$eav_entity_datetime = array(
);

/* `magento`.`eav_entity_decimal` */
$eav_entity_decimal = array(
);

/* `magento`.`eav_entity_int` */
$eav_entity_int = array(
);

/* `magento`.`eav_entity_store` */
$eav_entity_store = array(
);

/* `magento`.`eav_entity_text` */
$eav_entity_text = array(
);

/* `magento`.`eav_entity_type` */
$eav_entity_type = array(
  array('entity_type_id' => '1','entity_type_code' => 'customer','entity_model' => 'customer/customer','attribute_model' => 'customer/attribute','entity_table' => 'customer/entity','value_table_prefix' => NULL,'entity_id_field' => NULL,'is_data_sharing' => '1','data_sharing_key' => 'default','default_attribute_set_id' => '1','increment_model' => 'eav/entity_increment_numeric','increment_per_store' => '0','increment_pad_length' => '8','increment_pad_char' => '0','additional_attribute_table' => 'customer/eav_attribute','entity_attribute_collection' => 'customer/attribute_collection'),
  array('entity_type_id' => '2','entity_type_code' => 'customer_address','entity_model' => 'customer/address','attribute_model' => 'customer/attribute','entity_table' => 'customer/address_entity','value_table_prefix' => NULL,'entity_id_field' => NULL,'is_data_sharing' => '1','data_sharing_key' => 'default','default_attribute_set_id' => '2','increment_model' => NULL,'increment_per_store' => '0','increment_pad_length' => '8','increment_pad_char' => '0','additional_attribute_table' => 'customer/eav_attribute','entity_attribute_collection' => 'customer/address_attribute_collection'),
  array('entity_type_id' => '3','entity_type_code' => 'catalog_category','entity_model' => 'catalog/category','attribute_model' => 'catalog/resource_eav_attribute','entity_table' => 'catalog/category','value_table_prefix' => NULL,'entity_id_field' => NULL,'is_data_sharing' => '1','data_sharing_key' => 'default','default_attribute_set_id' => '3','increment_model' => NULL,'increment_per_store' => '0','increment_pad_length' => '8','increment_pad_char' => '0','additional_attribute_table' => 'catalog/eav_attribute','entity_attribute_collection' => 'catalog/category_attribute_collection'),
  array('entity_type_id' => '4','entity_type_code' => 'catalog_product','entity_model' => 'catalog/product','attribute_model' => 'catalog/resource_eav_attribute','entity_table' => 'catalog/product','value_table_prefix' => NULL,'entity_id_field' => NULL,'is_data_sharing' => '1','data_sharing_key' => 'default','default_attribute_set_id' => '4','increment_model' => NULL,'increment_per_store' => '0','increment_pad_length' => '8','increment_pad_char' => '0','additional_attribute_table' => 'catalog/eav_attribute','entity_attribute_collection' => 'catalog/product_attribute_collection'),
  array('entity_type_id' => '5','entity_type_code' => 'order','entity_model' => 'sales/order','attribute_model' => NULL,'entity_table' => 'sales/order','value_table_prefix' => NULL,'entity_id_field' => NULL,'is_data_sharing' => '1','data_sharing_key' => 'default','default_attribute_set_id' => '0','increment_model' => 'eav/entity_increment_numeric','increment_per_store' => '1','increment_pad_length' => '8','increment_pad_char' => '0','additional_attribute_table' => NULL,'entity_attribute_collection' => NULL),
  array('entity_type_id' => '6','entity_type_code' => 'invoice','entity_model' => 'sales/order_invoice','attribute_model' => NULL,'entity_table' => 'sales/invoice','value_table_prefix' => NULL,'entity_id_field' => NULL,'is_data_sharing' => '1','data_sharing_key' => 'default','default_attribute_set_id' => '0','increment_model' => 'eav/entity_increment_numeric','increment_per_store' => '1','increment_pad_length' => '8','increment_pad_char' => '0','additional_attribute_table' => NULL,'entity_attribute_collection' => NULL),
  array('entity_type_id' => '7','entity_type_code' => 'creditmemo','entity_model' => 'sales/order_creditmemo','attribute_model' => NULL,'entity_table' => 'sales/creditmemo','value_table_prefix' => NULL,'entity_id_field' => NULL,'is_data_sharing' => '1','data_sharing_key' => 'default','default_attribute_set_id' => '0','increment_model' => 'eav/entity_increment_numeric','increment_per_store' => '1','increment_pad_length' => '8','increment_pad_char' => '0','additional_attribute_table' => NULL,'entity_attribute_collection' => NULL),
  array('entity_type_id' => '8','entity_type_code' => 'shipment','entity_model' => 'sales/order_shipment','attribute_model' => NULL,'entity_table' => 'sales/shipment','value_table_prefix' => NULL,'entity_id_field' => NULL,'is_data_sharing' => '1','data_sharing_key' => 'default','default_attribute_set_id' => '0','increment_model' => 'eav/entity_increment_numeric','increment_per_store' => '1','increment_pad_length' => '8','increment_pad_char' => '0','additional_attribute_table' => NULL,'entity_attribute_collection' => NULL)
);

/* `magento`.`eav_entity_varchar` */
$eav_entity_varchar = array(
);

/* `magento`.`eav_form_element` */
$eav_form_element = array(
  array('element_id' => '1','type_id' => '1','fieldset_id' => NULL,'attribute_id' => '20','sort_order' => '0'),
  array('element_id' => '2','type_id' => '1','fieldset_id' => NULL,'attribute_id' => '21','sort_order' => '1'),
  array('element_id' => '3','type_id' => '1','fieldset_id' => NULL,'attribute_id' => '22','sort_order' => '2'),
  array('element_id' => '4','type_id' => '1','fieldset_id' => NULL,'attribute_id' => '24','sort_order' => '3'),
  array('element_id' => '5','type_id' => '1','fieldset_id' => NULL,'attribute_id' => '9','sort_order' => '4'),
  array('element_id' => '6','type_id' => '1','fieldset_id' => NULL,'attribute_id' => '25','sort_order' => '5'),
  array('element_id' => '7','type_id' => '1','fieldset_id' => NULL,'attribute_id' => '26','sort_order' => '6'),
  array('element_id' => '8','type_id' => '1','fieldset_id' => NULL,'attribute_id' => '28','sort_order' => '7'),
  array('element_id' => '9','type_id' => '1','fieldset_id' => NULL,'attribute_id' => '30','sort_order' => '8'),
  array('element_id' => '10','type_id' => '1','fieldset_id' => NULL,'attribute_id' => '27','sort_order' => '9'),
  array('element_id' => '11','type_id' => '1','fieldset_id' => NULL,'attribute_id' => '31','sort_order' => '10'),
  array('element_id' => '12','type_id' => '1','fieldset_id' => NULL,'attribute_id' => '32','sort_order' => '11'),
  array('element_id' => '13','type_id' => '2','fieldset_id' => NULL,'attribute_id' => '20','sort_order' => '0'),
  array('element_id' => '14','type_id' => '2','fieldset_id' => NULL,'attribute_id' => '21','sort_order' => '1'),
  array('element_id' => '15','type_id' => '2','fieldset_id' => NULL,'attribute_id' => '22','sort_order' => '2'),
  array('element_id' => '16','type_id' => '2','fieldset_id' => NULL,'attribute_id' => '24','sort_order' => '3'),
  array('element_id' => '17','type_id' => '2','fieldset_id' => NULL,'attribute_id' => '9','sort_order' => '4'),
  array('element_id' => '18','type_id' => '2','fieldset_id' => NULL,'attribute_id' => '25','sort_order' => '5'),
  array('element_id' => '19','type_id' => '2','fieldset_id' => NULL,'attribute_id' => '26','sort_order' => '6'),
  array('element_id' => '20','type_id' => '2','fieldset_id' => NULL,'attribute_id' => '28','sort_order' => '7'),
  array('element_id' => '21','type_id' => '2','fieldset_id' => NULL,'attribute_id' => '30','sort_order' => '8'),
  array('element_id' => '22','type_id' => '2','fieldset_id' => NULL,'attribute_id' => '27','sort_order' => '9'),
  array('element_id' => '23','type_id' => '2','fieldset_id' => NULL,'attribute_id' => '31','sort_order' => '10'),
  array('element_id' => '24','type_id' => '2','fieldset_id' => NULL,'attribute_id' => '32','sort_order' => '11'),
  array('element_id' => '25','type_id' => '3','fieldset_id' => NULL,'attribute_id' => '20','sort_order' => '0'),
  array('element_id' => '26','type_id' => '3','fieldset_id' => NULL,'attribute_id' => '21','sort_order' => '1'),
  array('element_id' => '27','type_id' => '3','fieldset_id' => NULL,'attribute_id' => '22','sort_order' => '2'),
  array('element_id' => '28','type_id' => '3','fieldset_id' => NULL,'attribute_id' => '24','sort_order' => '3'),
  array('element_id' => '29','type_id' => '3','fieldset_id' => NULL,'attribute_id' => '25','sort_order' => '4'),
  array('element_id' => '30','type_id' => '3','fieldset_id' => NULL,'attribute_id' => '26','sort_order' => '5'),
  array('element_id' => '31','type_id' => '3','fieldset_id' => NULL,'attribute_id' => '28','sort_order' => '6'),
  array('element_id' => '32','type_id' => '3','fieldset_id' => NULL,'attribute_id' => '30','sort_order' => '7'),
  array('element_id' => '33','type_id' => '3','fieldset_id' => NULL,'attribute_id' => '27','sort_order' => '8'),
  array('element_id' => '34','type_id' => '3','fieldset_id' => NULL,'attribute_id' => '31','sort_order' => '9'),
  array('element_id' => '35','type_id' => '3','fieldset_id' => NULL,'attribute_id' => '32','sort_order' => '10'),
  array('element_id' => '36','type_id' => '4','fieldset_id' => NULL,'attribute_id' => '20','sort_order' => '0'),
  array('element_id' => '37','type_id' => '4','fieldset_id' => NULL,'attribute_id' => '21','sort_order' => '1'),
  array('element_id' => '38','type_id' => '4','fieldset_id' => NULL,'attribute_id' => '22','sort_order' => '2'),
  array('element_id' => '39','type_id' => '4','fieldset_id' => NULL,'attribute_id' => '24','sort_order' => '3'),
  array('element_id' => '40','type_id' => '4','fieldset_id' => NULL,'attribute_id' => '25','sort_order' => '4'),
  array('element_id' => '41','type_id' => '4','fieldset_id' => NULL,'attribute_id' => '26','sort_order' => '5'),
  array('element_id' => '42','type_id' => '4','fieldset_id' => NULL,'attribute_id' => '28','sort_order' => '6'),
  array('element_id' => '43','type_id' => '4','fieldset_id' => NULL,'attribute_id' => '30','sort_order' => '7'),
  array('element_id' => '44','type_id' => '4','fieldset_id' => NULL,'attribute_id' => '27','sort_order' => '8'),
  array('element_id' => '45','type_id' => '4','fieldset_id' => NULL,'attribute_id' => '31','sort_order' => '9'),
  array('element_id' => '46','type_id' => '4','fieldset_id' => NULL,'attribute_id' => '32','sort_order' => '10'),
  array('element_id' => '47','type_id' => '5','fieldset_id' => '1','attribute_id' => '5','sort_order' => '0'),
  array('element_id' => '48','type_id' => '5','fieldset_id' => '1','attribute_id' => '6','sort_order' => '1'),
  array('element_id' => '49','type_id' => '5','fieldset_id' => '1','attribute_id' => '7','sort_order' => '2'),
  array('element_id' => '50','type_id' => '5','fieldset_id' => '1','attribute_id' => '9','sort_order' => '3'),
  array('element_id' => '51','type_id' => '5','fieldset_id' => '2','attribute_id' => '24','sort_order' => '0'),
  array('element_id' => '52','type_id' => '5','fieldset_id' => '2','attribute_id' => '31','sort_order' => '1'),
  array('element_id' => '53','type_id' => '5','fieldset_id' => '2','attribute_id' => '25','sort_order' => '2'),
  array('element_id' => '54','type_id' => '5','fieldset_id' => '2','attribute_id' => '26','sort_order' => '3'),
  array('element_id' => '55','type_id' => '5','fieldset_id' => '2','attribute_id' => '28','sort_order' => '4'),
  array('element_id' => '56','type_id' => '5','fieldset_id' => '2','attribute_id' => '30','sort_order' => '5'),
  array('element_id' => '57','type_id' => '5','fieldset_id' => '2','attribute_id' => '27','sort_order' => '6')
);

/* `magento`.`eav_form_fieldset` */
$eav_form_fieldset = array(
  array('fieldset_id' => '1','type_id' => '5','code' => 'general','sort_order' => '1'),
  array('fieldset_id' => '2','type_id' => '5','code' => 'address','sort_order' => '2')
);

/* `magento`.`eav_form_fieldset_label` */
$eav_form_fieldset_label = array(
  array('fieldset_id' => '1','store_id' => '0','label' => 'Personal Information'),
  array('fieldset_id' => '2','store_id' => '0','label' => 'Address Information')
);

/* `magento`.`eav_form_type` */
$eav_form_type = array(
  array('type_id' => '1','code' => 'checkout_onepage_register','label' => 'checkout_onepage_register','is_system' => '1','theme' => '','store_id' => '0'),
  array('type_id' => '2','code' => 'checkout_onepage_register_guest','label' => 'checkout_onepage_register_guest','is_system' => '1','theme' => '','store_id' => '0'),
  array('type_id' => '3','code' => 'checkout_onepage_billing_address','label' => 'checkout_onepage_billing_address','is_system' => '1','theme' => '','store_id' => '0'),
  array('type_id' => '4','code' => 'checkout_onepage_shipping_address','label' => 'checkout_onepage_shipping_address','is_system' => '1','theme' => '','store_id' => '0'),
  array('type_id' => '5','code' => 'checkout_multishipping_register','label' => 'checkout_multishipping_register','is_system' => '1','theme' => '','store_id' => '0')
);

/* `magento`.`eav_form_type_entity` */
$eav_form_type_entity = array(
  array('type_id' => '1','entity_type_id' => '1'),
  array('type_id' => '2','entity_type_id' => '1'),
  array('type_id' => '5','entity_type_id' => '1'),
  array('type_id' => '1','entity_type_id' => '2'),
  array('type_id' => '2','entity_type_id' => '2'),
  array('type_id' => '3','entity_type_id' => '2'),
  array('type_id' => '4','entity_type_id' => '2'),
  array('type_id' => '5','entity_type_id' => '2')
);

/* `magento`.`gift_message` */
$gift_message = array(
);

/* `magento`.`importexport_importdata` */
$importexport_importdata = array(
);

/* `magento`.`index_event` */
$index_event = array(
  array('event_id' => '1','type' => 'save','entity' => 'catalog_category','entity_pk' => '1','created_at' => '2018-02-10 15:58:40','old_data' => NULL,'new_data' => 'a:5:{s:35:"cataloginventory_stock_match_result";b:0;s:34:"catalog_product_price_match_result";b:0;s:24:"catalog_url_match_result";b:1;s:37:"catalog_category_product_match_result";b:1;s:35:"catalogsearch_fulltext_match_result";b:1;}'),
  array('event_id' => '2','type' => 'save','entity' => 'catalog_category','entity_pk' => '2','created_at' => '2018-02-10 15:58:40','old_data' => NULL,'new_data' => 'a:5:{s:35:"cataloginventory_stock_match_result";b:0;s:34:"catalog_product_price_match_result";b:0;s:24:"catalog_url_match_result";b:1;s:37:"catalog_category_product_match_result";b:1;s:35:"catalogsearch_fulltext_match_result";b:1;}')
);

/* `magento`.`index_process` */
$index_process = array(
  array('process_id' => '1','indexer_code' => 'catalog_product_attribute','status' => 'pending','started_at' => '2018-02-10 16:05:46','ended_at' => '2018-02-10 16:05:46','mode' => 'real_time'),
  array('process_id' => '2','indexer_code' => 'catalog_product_price','status' => 'pending','started_at' => '2018-02-10 16:05:46','ended_at' => '2018-02-10 16:05:47','mode' => 'real_time'),
  array('process_id' => '3','indexer_code' => 'catalog_url','status' => 'pending','started_at' => '2018-02-10 16:05:47','ended_at' => '2018-02-10 16:05:47','mode' => 'real_time'),
  array('process_id' => '4','indexer_code' => 'catalog_product_flat','status' => 'pending','started_at' => '2018-02-10 16:05:47','ended_at' => '2018-02-10 16:05:47','mode' => 'real_time'),
  array('process_id' => '5','indexer_code' => 'catalog_category_flat','status' => 'pending','started_at' => '2018-02-10 16:05:47','ended_at' => '2018-02-10 16:05:47','mode' => 'real_time'),
  array('process_id' => '6','indexer_code' => 'catalog_category_product','status' => 'pending','started_at' => '2018-02-10 16:05:47','ended_at' => '2018-02-10 16:05:47','mode' => 'real_time'),
  array('process_id' => '7','indexer_code' => 'catalogsearch_fulltext','status' => 'pending','started_at' => '2018-02-10 16:05:47','ended_at' => '2018-02-10 16:05:47','mode' => 'real_time'),
  array('process_id' => '8','indexer_code' => 'cataloginventory_stock','status' => 'pending','started_at' => '2018-02-10 16:05:46','ended_at' => '2018-02-10 16:05:46','mode' => 'real_time'),
  array('process_id' => '9','indexer_code' => 'tag_summary','status' => 'pending','started_at' => '2018-02-10 16:05:47','ended_at' => '2018-02-10 16:05:47','mode' => 'real_time')
);

/* `magento`.`index_process_event` */
$index_process_event = array(
);

/* `magento`.`log_customer` */
$log_customer = array(
);

/* `magento`.`log_quote` */
$log_quote = array(
  array('quote_id' => '1','visitor_id' => '1','created_at' => '2018-02-10 16:01:51','deleted_at' => NULL)
);

/* `magento`.`log_summary` */
$log_summary = array(
);

/* `magento`.`log_summary_type` */
$log_summary_type = array(
  array('type_id' => '1','type_code' => 'hour','period' => '1','period_type' => 'HOUR'),
  array('type_id' => '2','type_code' => 'day','period' => '1','period_type' => 'DAY')
);

/* `magento`.`log_url` */
$log_url = array(
);

/* `magento`.`log_url_info` */
$log_url_info = array(
);

/* `magento`.`log_visitor` */
$log_visitor = array(
  array('visitor_id' => '1','session_id' => 'iqvik9labba0ag4gt2cihe63r4','first_visit_at' => '2018-02-10 15:59:31','last_visit_at' => '2018-02-10 16:54:33','last_url_id' => '0','store_id' => '1'),
  array('visitor_id' => '2','session_id' => 'l5i4abirp8ef5mub1j2cu8i1p6','first_visit_at' => '2018-02-10 16:17:49','last_visit_at' => '2018-02-10 16:17:49','last_url_id' => '0','store_id' => '1')
);

/* `magento`.`log_visitor_info` */
$log_visitor_info = array(
  array('visitor_id' => '1','http_referer' => 'http://localhost/magento/index.php/install/wizard/end/','http_user_agent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:57.0) Gecko/20100101 Firefox/57.0','http_accept_charset' => NULL,'http_accept_language' => 'en-US,en;q=0.5','server_addr' => '' . "\0" . '' . "\0" . '','remote_addr' => '' . "\0" . '' . "\0" . ''),
  array('visitor_id' => '2','http_referer' => NULL,'http_user_agent' => 'Mozilla/5.0 (X11; Linux x86_64; rv:57.0) Gecko/20100101 Firefox/57.0','http_accept_charset' => NULL,'http_accept_language' => 'en-US,en;q=0.5','server_addr' => '' . "\0" . '' . "\0" . '','remote_addr' => '' . "\0" . '' . "\0" . '')
);

/* `magento`.`log_visitor_online` */
$log_visitor_online = array(
);

/* `magento`.`manthan_marketplace_payment` */
$manthan_marketplace_payment = array(
);

/* `magento`.`manthan_marketplace_rating` */
$manthan_marketplace_rating = array(
);

/* `magento`.`manthan_marketplace_review` */
$manthan_marketplace_review = array(
);

/* `magento`.`manthan_marketplace_seller` */
$manthan_marketplace_seller = array(
  array('entity_id' => '1','shop_name' => 'StuffInc','shop_description' => 'How do iset url','url_path' => 'stuffinc','telephone' => '5555555555','image' => NULL,'country' => 'US','postcode' => '111111','admin_total_earn' => NULL,'admin_commission_by_percentage' => '5.00','total_vendor_earn' => '0.00','user_id' => '2','created_date' => '2018-02-10 08:42:16','bank_name' => NULL,'account_holder_name' => NULL,'account_number' => NULL,'bank_branch' => NULL,'ifsc_code' => NULL)
);

/* `magento`.`manthan_marketplace_seller_rated` */
$manthan_marketplace_seller_rated = array(
);

/* `magento`.`manthan_marketplace_vendorproduct` */
$manthan_marketplace_vendorproduct = array(
);

/* `magento`.`newsletter_problem` */
$newsletter_problem = array(
);

/* `magento`.`newsletter_queue` */
$newsletter_queue = array(
);

/* `magento`.`newsletter_queue_link` */
$newsletter_queue_link = array(
);

/* `magento`.`newsletter_queue_store_link` */
$newsletter_queue_store_link = array(
);

/* `magento`.`newsletter_subscriber` */
$newsletter_subscriber = array(
);

/* `magento`.`newsletter_template` */
$newsletter_template = array(
  array('template_id' => '1','template_code' => 'Example Newsletter Template','template_text' => '{{template config_path="design/email/header"}}
{{inlinecss file="email-inline.css"}}

<table cellpadding="0" cellspacing="0" border="0">
<tr>
    <td class="full">
        <table class="columns">
            <tr>
                <td class="email-heading">
                    <h1>Welcome</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et.</p>
                </td>
                <td class="store-info">
                    <h4>Contact Us</h4>
                    <p>
                        {{depend store_phone}}
                        <b>Call Us:</b>
                        <a href="tel:{{var phone}}">{{var store_phone}}</a><br>
                        {{/depend}}
                        {{depend store_hours}}
                        <span class="no-link">{{var store_hours}}</span><br>
                        {{/depend}}
                        {{depend store_email}}
                        <b>Email:</b> <a href="mailto:{{var store_email}}">{{var store_email}}</a>
                        {{/depend}}
                    </p>
                </td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td class="full">
        <table class="columns">
            <tr>
                <td>
                    <img width="600" src="http://placehold.it/600x200" class="main-image">
                </td>
                <td class="expander"></td>
            </tr>
        </table>
        <table class="columns">
            <tr>
                <td class="panel">
                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra
                    vitae. <a href="#">Click it! &raquo;</a></p>
                </td>
                <td class="expander"></td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td>
        <table class="row">
            <tr>
                <td class="half left wrapper">
                    <table class="columns">
                        <tr>
                            <td>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet.</p>
                                <table class="button">
                                    <tr>
                                        <td>
                                            <a href="#">Click Me!</a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td class="expander"></td>
                        </tr>
                    </table>
                </td>
                <td class="half right wrapper last">
                    <table class="columns">
                        <tr>
                            <td class="panel sidebar-links">
                                <h6>Header Thing</h6>
                                <p>Sub-head or something</p>
                                <table>
                                    <tr>
                                        <td>
                                            <p><a href="#">Just a Plain Link &raquo;</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><a href="#">Just a Plain Link &raquo;</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><a href="#">Just a Plain Link &raquo;</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><a href="#">Just a Plain Link &raquo;</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><a href="#">Just a Plain Link &raquo;</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><a href="#">Just a Plain Link &raquo;</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><a href="#">Just a Plain Link &raquo;</a></p>
                                        </td>
                                    </tr>
                                    <tr><td>&nbsp;</td></tr>
                                </table>
                            </td>
                            <td class="expander"></td>
                        </tr>
                    </table>
                    <br>
                    <table class="columns">
                        <tr>
                            <td class="panel">
                                <h6>Connect With Us:</h6>
                                <table class="social-button facebook">
                                    <tr>
                                        <td>
                                            <a href="#">Facebook</a>
                                        </td>
                                    </tr>
                                </table>
                                <hr>
                                <table class="social-button twitter">
                                    <tr>
                                        <td>
                                            <a href="#">Twitter</a>
                                        </td>
                                    </tr>
                                </table>
                                <hr>
                                <table class="social-button google-plus">
                                    <tr>
                                        <td>
                                            <a href="#">Google +</a>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <h6>Contact Info:</h6>
                                {{depend store_phone}}
                                <p>
                                    <b>Call Us:</b>
                                    <a href="tel:{{var phone}}">{{var store_phone}}</a>
                                </p>
                                {{/depend}}
                                {{depend store_hours}}
                                <p><span class="no-link">{{var store_hours}}</span><br></p>
                                {{/depend}}
                                {{depend store_email}}
                                <p><b>Email:</b> <a href="mailto:{{var store_email}}">{{var store_email}}</a></p>
                                {{/depend}}
                            </td>
                            <td class="expander"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table class="row">
            <tr>
                <td class="full wrapper">
                    {{block type="catalog/product_new" template="email/catalog/product/new.phtml" products_count="4"
                    column_count="4" }}
                </td>
            </tr>
        </table>
        <table class="row">
            <tr>
                <td class="full wrapper last">
                    <table class="columns">
                        <tr>
                            <td align="center">
                                <center>
                                    <p><a href="#">Terms</a> | <a href="#">Privacy</a> | <a href="#">Unsubscribe</a></p>
                                </center>
                            </td>
                            <td class="expander"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
</table>

{{template config_path="design/email/footer"}}','template_text_preprocessed' => NULL,'template_styles' => NULL,'template_type' => '2','template_subject' => 'Example Subject','template_sender_name' => 'Owner','template_sender_email' => 'owner@example.com','template_actual' => '1','added_at' => '2018-02-10 15:58:41','modified_at' => '2018-02-10 15:58:41')
);

/* `magento`.`oauth_consumer` */
$oauth_consumer = array(
);

/* `magento`.`oauth_nonce` */
$oauth_nonce = array(
);

/* `magento`.`oauth_token` */
$oauth_token = array(
);

/* `magento`.`paypal_cert` */
$paypal_cert = array(
);

/* `magento`.`paypal_payment_transaction` */
$paypal_payment_transaction = array(
);

/* `magento`.`paypal_settlement_report` */
$paypal_settlement_report = array(
);

/* `magento`.`paypal_settlement_report_row` */
$paypal_settlement_report_row = array(
);

/* `magento`.`permission_block` */
$permission_block = array(
  array('block_id' => '1','block_name' => 'core/template','is_allowed' => '1'),
  array('block_id' => '2','block_name' => 'catalog/product_new','is_allowed' => '1')
);

/* `magento`.`permission_variable` */
$permission_variable = array(
  array('variable_id' => '1','variable_name' => 'trans_email/ident_support/name','is_allowed' => '1'),
  array('variable_id' => '2','variable_name' => 'trans_email/ident_support/email','is_allowed' => '1'),
  array('variable_id' => '3','variable_name' => 'web/unsecure/base_url','is_allowed' => '1'),
  array('variable_id' => '4','variable_name' => 'web/secure/base_url','is_allowed' => '1'),
  array('variable_id' => '5','variable_name' => 'trans_email/ident_general/name','is_allowed' => '1'),
  array('variable_id' => '6','variable_name' => 'trans_email/ident_general/email','is_allowed' => '1'),
  array('variable_id' => '7','variable_name' => 'trans_email/ident_sales/name','is_allowed' => '1'),
  array('variable_id' => '8','variable_name' => 'trans_email/ident_sales/email','is_allowed' => '1'),
  array('variable_id' => '9','variable_name' => 'trans_email/ident_custom1/name','is_allowed' => '1'),
  array('variable_id' => '10','variable_name' => 'trans_email/ident_custom1/email','is_allowed' => '1'),
  array('variable_id' => '11','variable_name' => 'trans_email/ident_custom2/name','is_allowed' => '1'),
  array('variable_id' => '12','variable_name' => 'trans_email/ident_custom2/email','is_allowed' => '1'),
  array('variable_id' => '13','variable_name' => 'general/store_information/name','is_allowed' => '1'),
  array('variable_id' => '14','variable_name' => 'general/store_information/phone','is_allowed' => '1'),
  array('variable_id' => '15','variable_name' => 'general/store_information/address','is_allowed' => '1')
);

/* `magento`.`persistent_session` */
$persistent_session = array(
);

/* `magento`.`poll` */
$poll = array(
  array('poll_id' => '1','poll_title' => 'What is your favorite color','votes_count' => '8','store_id' => '0','date_posted' => '2018-02-10 15:58:41','date_closed' => NULL,'active' => '1','closed' => '0','answers_display' => NULL)
);

/* `magento`.`poll_answer` */
$poll_answer = array(
  array('answer_id' => '1','poll_id' => '1','answer_title' => 'Green','votes_count' => '4','answer_order' => '0'),
  array('answer_id' => '2','poll_id' => '1','answer_title' => 'Red','votes_count' => '2','answer_order' => '0'),
  array('answer_id' => '3','poll_id' => '1','answer_title' => 'Black','votes_count' => '0','answer_order' => '0'),
  array('answer_id' => '4','poll_id' => '1','answer_title' => 'Magenta','votes_count' => '2','answer_order' => '0')
);

/* `magento`.`poll_store` */
$poll_store = array(
  array('poll_id' => '1','store_id' => '1')
);

/* `magento`.`poll_vote` */
$poll_vote = array(
  array('vote_id' => '1','poll_id' => '1','poll_answer_id' => '2','ip_address' => '' . "\0" . '' . "\0" . '','customer_id' => '1','vote_time' => '2018-02-10 16:24:00')
);

/* `magento`.`product_alert_price` */
$product_alert_price = array(
);

/* `magento`.`product_alert_stock` */
$product_alert_stock = array(
);

/* `magento`.`rating` */
$rating = array(
  array('rating_id' => '1','entity_id' => '1','rating_code' => 'Quality','position' => '0'),
  array('rating_id' => '2','entity_id' => '1','rating_code' => 'Value','position' => '0'),
  array('rating_id' => '3','entity_id' => '1','rating_code' => 'Price','position' => '0')
);

/* `magento`.`rating_entity` */
$rating_entity = array(
  array('entity_id' => '1','entity_code' => 'product'),
  array('entity_id' => '2','entity_code' => 'product_review'),
  array('entity_id' => '3','entity_code' => 'review')
);

/* `magento`.`rating_option` */
$rating_option = array(
  array('option_id' => '1','rating_id' => '1','code' => '1','value' => '1','position' => '1'),
  array('option_id' => '2','rating_id' => '1','code' => '2','value' => '2','position' => '2'),
  array('option_id' => '3','rating_id' => '1','code' => '3','value' => '3','position' => '3'),
  array('option_id' => '4','rating_id' => '1','code' => '4','value' => '4','position' => '4'),
  array('option_id' => '5','rating_id' => '1','code' => '5','value' => '5','position' => '5'),
  array('option_id' => '6','rating_id' => '2','code' => '1','value' => '1','position' => '1'),
  array('option_id' => '7','rating_id' => '2','code' => '2','value' => '2','position' => '2'),
  array('option_id' => '8','rating_id' => '2','code' => '3','value' => '3','position' => '3'),
  array('option_id' => '9','rating_id' => '2','code' => '4','value' => '4','position' => '4'),
  array('option_id' => '10','rating_id' => '2','code' => '5','value' => '5','position' => '5'),
  array('option_id' => '11','rating_id' => '3','code' => '1','value' => '1','position' => '1'),
  array('option_id' => '12','rating_id' => '3','code' => '2','value' => '2','position' => '2'),
  array('option_id' => '13','rating_id' => '3','code' => '3','value' => '3','position' => '3'),
  array('option_id' => '14','rating_id' => '3','code' => '4','value' => '4','position' => '4'),
  array('option_id' => '15','rating_id' => '3','code' => '5','value' => '5','position' => '5')
);

/* `magento`.`rating_option_vote` */
$rating_option_vote = array(
);

/* `magento`.`rating_option_vote_aggregated` */
$rating_option_vote_aggregated = array(
);

/* `magento`.`rating_store` */
$rating_store = array(
);

/* `magento`.`rating_title` */
$rating_title = array(
);

/* `magento`.`report_compared_product_index` */
$report_compared_product_index = array(
);

/* `magento`.`report_event` */
$report_event = array(
);

/* `magento`.`report_event_types` */
$report_event_types = array(
  array('event_type_id' => '1','event_name' => 'catalog_product_view','customer_login' => '0'),
  array('event_type_id' => '2','event_name' => 'sendfriend_product','customer_login' => '0'),
  array('event_type_id' => '3','event_name' => 'catalog_product_compare_add_product','customer_login' => '0'),
  array('event_type_id' => '4','event_name' => 'checkout_cart_add_product','customer_login' => '0'),
  array('event_type_id' => '5','event_name' => 'wishlist_add_product','customer_login' => '0'),
  array('event_type_id' => '6','event_name' => 'wishlist_share','customer_login' => '0')
);

/* `magento`.`report_viewed_product_aggregated_daily` */
$report_viewed_product_aggregated_daily = array(
);

/* `magento`.`report_viewed_product_aggregated_monthly` */
$report_viewed_product_aggregated_monthly = array(
);

/* `magento`.`report_viewed_product_aggregated_yearly` */
$report_viewed_product_aggregated_yearly = array(
);

/* `magento`.`report_viewed_product_index` */
$report_viewed_product_index = array(
);

/* `magento`.`review` */
$review = array(
);

/* `magento`.`review_detail` */
$review_detail = array(
);

/* `magento`.`review_entity` */
$review_entity = array(
  array('entity_id' => '1','entity_code' => 'product'),
  array('entity_id' => '2','entity_code' => 'customer'),
  array('entity_id' => '3','entity_code' => 'category')
);

/* `magento`.`review_entity_summary` */
$review_entity_summary = array(
);

/* `magento`.`review_status` */
$review_status = array(
  array('status_id' => '1','status_code' => 'Approved'),
  array('status_id' => '2','status_code' => 'Pending'),
  array('status_id' => '3','status_code' => 'Not Approved')
);

/* `magento`.`review_store` */
$review_store = array(
);

/* `magento`.`salesrule` */
$salesrule = array(
);

/* `magento`.`salesrule_coupon` */
$salesrule_coupon = array(
);

/* `magento`.`salesrule_coupon_usage` */
$salesrule_coupon_usage = array(
);

/* `magento`.`salesrule_customer` */
$salesrule_customer = array(
);

/* `magento`.`salesrule_customer_group` */
$salesrule_customer_group = array(
);

/* `magento`.`salesrule_label` */
$salesrule_label = array(
);

/* `magento`.`salesrule_product_attribute` */
$salesrule_product_attribute = array(
);

/* `magento`.`salesrule_website` */
$salesrule_website = array(
);

/* `magento`.`sales_bestsellers_aggregated_daily` */
$sales_bestsellers_aggregated_daily = array(
);

/* `magento`.`sales_bestsellers_aggregated_monthly` */
$sales_bestsellers_aggregated_monthly = array(
);

/* `magento`.`sales_bestsellers_aggregated_yearly` */
$sales_bestsellers_aggregated_yearly = array(
);

/* `magento`.`sales_billing_agreement` */
$sales_billing_agreement = array(
);

/* `magento`.`sales_billing_agreement_order` */
$sales_billing_agreement_order = array(
);

/* `magento`.`sales_flat_creditmemo` */
$sales_flat_creditmemo = array(
);

/* `magento`.`sales_flat_creditmemo_comment` */
$sales_flat_creditmemo_comment = array(
);

/* `magento`.`sales_flat_creditmemo_grid` */
$sales_flat_creditmemo_grid = array(
);

/* `magento`.`sales_flat_creditmemo_item` */
$sales_flat_creditmemo_item = array(
);

/* `magento`.`sales_flat_invoice` */
$sales_flat_invoice = array(
);

/* `magento`.`sales_flat_invoice_comment` */
$sales_flat_invoice_comment = array(
);

/* `magento`.`sales_flat_invoice_grid` */
$sales_flat_invoice_grid = array(
);

/* `magento`.`sales_flat_invoice_item` */
$sales_flat_invoice_item = array(
);

/* `magento`.`sales_flat_order` */
$sales_flat_order = array(
);

/* `magento`.`sales_flat_order_address` */
$sales_flat_order_address = array(
);

/* `magento`.`sales_flat_order_grid` */
$sales_flat_order_grid = array(
);

/* `magento`.`sales_flat_order_item` */
$sales_flat_order_item = array(
);

/* `magento`.`sales_flat_order_payment` */
$sales_flat_order_payment = array(
);

/* `magento`.`sales_flat_order_status_history` */
$sales_flat_order_status_history = array(
);

/* `magento`.`sales_flat_quote` */
$sales_flat_quote = array(
  array('entity_id' => '1','store_id' => '1','created_at' => '2018-02-10 16:01:51','updated_at' => '2018-02-10 16:01:51','converted_at' => NULL,'is_active' => '1','is_virtual' => '0','is_multi_shipping' => '0','items_count' => '0','items_qty' => '0.0000','orig_order_id' => '0','store_to_base_rate' => '1.0000','store_to_quote_rate' => '1.0000','base_currency_code' => 'USD','store_currency_code' => 'USD','quote_currency_code' => 'USD','grand_total' => '0.0000','base_grand_total' => '0.0000','checkout_method' => NULL,'customer_id' => '1','customer_tax_class_id' => '3','customer_group_id' => '1','customer_email' => 'johndoe@example.com','customer_prefix' => NULL,'customer_firstname' => 'Test','customer_middlename' => NULL,'customer_lastname' => 'User','customer_suffix' => NULL,'customer_dob' => NULL,'customer_note' => NULL,'customer_note_notify' => '1','customer_is_guest' => '0','remote_ip' => '127.0.0.1','applied_rule_ids' => NULL,'reserved_order_id' => NULL,'password_hash' => NULL,'coupon_code' => NULL,'global_currency_code' => 'USD','base_to_global_rate' => '1.0000','base_to_quote_rate' => '1.0000','customer_taxvat' => NULL,'customer_gender' => NULL,'subtotal' => '0.0000','base_subtotal' => '0.0000','subtotal_with_discount' => '0.0000','base_subtotal_with_discount' => '0.0000','is_changed' => '1','trigger_recollect' => '0','ext_shipping_info' => NULL,'gift_message_id' => NULL,'is_persistent' => '0')
);

/* `magento`.`sales_flat_quote_address` */
$sales_flat_quote_address = array(
  array('address_id' => '1','quote_id' => '1','created_at' => '2018-02-10 16:01:51','updated_at' => '2018-02-10 16:01:51','customer_id' => '1','save_in_address_book' => '0','customer_address_id' => NULL,'address_type' => 'billing','email' => NULL,'prefix' => NULL,'firstname' => NULL,'middlename' => NULL,'lastname' => NULL,'suffix' => NULL,'company' => NULL,'street' => NULL,'city' => NULL,'region' => NULL,'region_id' => NULL,'postcode' => NULL,'country_id' => NULL,'telephone' => NULL,'fax' => NULL,'same_as_billing' => '0','free_shipping' => '0','collect_shipping_rates' => '0','shipping_method' => NULL,'shipping_description' => NULL,'weight' => '0.0000','subtotal' => '0.0000','base_subtotal' => '0.0000','subtotal_with_discount' => '0.0000','base_subtotal_with_discount' => '0.0000','tax_amount' => '0.0000','base_tax_amount' => '0.0000','shipping_amount' => '0.0000','base_shipping_amount' => '0.0000','shipping_tax_amount' => '0.0000','base_shipping_tax_amount' => '0.0000','discount_amount' => '0.0000','base_discount_amount' => '0.0000','grand_total' => '0.0000','base_grand_total' => '0.0000','customer_notes' => NULL,'applied_taxes' => 'a:0:{}','discount_description' => NULL,'shipping_discount_amount' => NULL,'base_shipping_discount_amount' => NULL,'subtotal_incl_tax' => '0.0000','base_subtotal_total_incl_tax' => NULL,'hidden_tax_amount' => NULL,'base_hidden_tax_amount' => NULL,'shipping_hidden_tax_amount' => NULL,'base_shipping_hidden_tax_amnt' => NULL,'shipping_incl_tax' => '0.0000','base_shipping_incl_tax' => '0.0000','vat_id' => NULL,'vat_is_valid' => NULL,'vat_request_id' => NULL,'vat_request_date' => NULL,'vat_request_success' => NULL,'gift_message_id' => NULL),
  array('address_id' => '2','quote_id' => '1','created_at' => '2018-02-10 16:01:51','updated_at' => '2018-02-10 16:01:51','customer_id' => '1','save_in_address_book' => '0','customer_address_id' => NULL,'address_type' => 'shipping','email' => NULL,'prefix' => NULL,'firstname' => NULL,'middlename' => NULL,'lastname' => NULL,'suffix' => NULL,'company' => NULL,'street' => NULL,'city' => NULL,'region' => NULL,'region_id' => NULL,'postcode' => NULL,'country_id' => NULL,'telephone' => NULL,'fax' => NULL,'same_as_billing' => '1','free_shipping' => '0','collect_shipping_rates' => '0','shipping_method' => NULL,'shipping_description' => NULL,'weight' => '0.0000','subtotal' => '0.0000','base_subtotal' => '0.0000','subtotal_with_discount' => '0.0000','base_subtotal_with_discount' => '0.0000','tax_amount' => '0.0000','base_tax_amount' => '0.0000','shipping_amount' => '0.0000','base_shipping_amount' => '0.0000','shipping_tax_amount' => '0.0000','base_shipping_tax_amount' => '0.0000','discount_amount' => '0.0000','base_discount_amount' => '0.0000','grand_total' => '0.0000','base_grand_total' => '0.0000','customer_notes' => NULL,'applied_taxes' => 'a:0:{}','discount_description' => NULL,'shipping_discount_amount' => NULL,'base_shipping_discount_amount' => NULL,'subtotal_incl_tax' => '0.0000','base_subtotal_total_incl_tax' => NULL,'hidden_tax_amount' => NULL,'base_hidden_tax_amount' => NULL,'shipping_hidden_tax_amount' => NULL,'base_shipping_hidden_tax_amnt' => NULL,'shipping_incl_tax' => '0.0000','base_shipping_incl_tax' => '0.0000','vat_id' => NULL,'vat_is_valid' => NULL,'vat_request_id' => NULL,'vat_request_date' => NULL,'vat_request_success' => NULL,'gift_message_id' => NULL)
);

/* `magento`.`sales_flat_quote_address_item` */
$sales_flat_quote_address_item = array(
);

/* `magento`.`sales_flat_quote_item` */
$sales_flat_quote_item = array(
);

/* `magento`.`sales_flat_quote_item_option` */
$sales_flat_quote_item_option = array(
);

/* `magento`.`sales_flat_quote_payment` */
$sales_flat_quote_payment = array(
);

/* `magento`.`sales_flat_quote_shipping_rate` */
$sales_flat_quote_shipping_rate = array(
);

/* `magento`.`sales_flat_shipment` */
$sales_flat_shipment = array(
);

/* `magento`.`sales_flat_shipment_comment` */
$sales_flat_shipment_comment = array(
);

/* `magento`.`sales_flat_shipment_grid` */
$sales_flat_shipment_grid = array(
);

/* `magento`.`sales_flat_shipment_item` */
$sales_flat_shipment_item = array(
);

/* `magento`.`sales_flat_shipment_track` */
$sales_flat_shipment_track = array(
);

/* `magento`.`sales_invoiced_aggregated` */
$sales_invoiced_aggregated = array(
);

/* `magento`.`sales_invoiced_aggregated_order` */
$sales_invoiced_aggregated_order = array(
);

/* `magento`.`sales_order_aggregated_created` */
$sales_order_aggregated_created = array(
);

/* `magento`.`sales_order_aggregated_updated` */
$sales_order_aggregated_updated = array(
);

/* `magento`.`sales_order_status` */
$sales_order_status = array(
  array('status' => 'canceled','label' => 'Canceled'),
  array('status' => 'closed','label' => 'Closed'),
  array('status' => 'complete','label' => 'Complete'),
  array('status' => 'fraud','label' => 'Suspected Fraud'),
  array('status' => 'holded','label' => 'On Hold'),
  array('status' => 'payment_review','label' => 'Payment Review'),
  array('status' => 'paypal_canceled_reversal','label' => 'PayPal Canceled Reversal'),
  array('status' => 'paypal_reversed','label' => 'PayPal Reversed'),
  array('status' => 'pending','label' => 'Pending'),
  array('status' => 'pending_payment','label' => 'Pending Payment'),
  array('status' => 'pending_paypal','label' => 'Pending PayPal'),
  array('status' => 'processing','label' => 'Processing')
);

/* `magento`.`sales_order_status_label` */
$sales_order_status_label = array(
);

/* `magento`.`sales_order_status_state` */
$sales_order_status_state = array(
  array('status' => 'canceled','state' => 'canceled','is_default' => '1'),
  array('status' => 'closed','state' => 'closed','is_default' => '1'),
  array('status' => 'complete','state' => 'complete','is_default' => '1'),
  array('status' => 'fraud','state' => 'payment_review','is_default' => '0'),
  array('status' => 'holded','state' => 'holded','is_default' => '1'),
  array('status' => 'payment_review','state' => 'payment_review','is_default' => '1'),
  array('status' => 'pending','state' => 'new','is_default' => '1'),
  array('status' => 'pending_payment','state' => 'pending_payment','is_default' => '1'),
  array('status' => 'processing','state' => 'processing','is_default' => '1')
);

/* `magento`.`sales_order_tax` */
$sales_order_tax = array(
);

/* `magento`.`sales_order_tax_item` */
$sales_order_tax_item = array(
);

/* `magento`.`sales_payment_transaction` */
$sales_payment_transaction = array(
);

/* `magento`.`sales_recurring_profile` */
$sales_recurring_profile = array(
);

/* `magento`.`sales_recurring_profile_order` */
$sales_recurring_profile_order = array(
);

/* `magento`.`sales_refunded_aggregated` */
$sales_refunded_aggregated = array(
);

/* `magento`.`sales_refunded_aggregated_order` */
$sales_refunded_aggregated_order = array(
);

/* `magento`.`sales_shipping_aggregated` */
$sales_shipping_aggregated = array(
);

/* `magento`.`sales_shipping_aggregated_order` */
$sales_shipping_aggregated_order = array(
);

/* `magento`.`sendfriend_log` */
$sendfriend_log = array(
);

/* `magento`.`shipping_tablerate` */
$shipping_tablerate = array(
);

/* `magento`.`sitemap` */
$sitemap = array(
);

/* `magento`.`tag` */
$tag = array(
);

/* `magento`.`tag_properties` */
$tag_properties = array(
);

/* `magento`.`tag_relation` */
$tag_relation = array(
);

/* `magento`.`tag_summary` */
$tag_summary = array(
);

/* `magento`.`tax_calculation` */
$tax_calculation = array(
  array('tax_calculation_id' => '1','tax_calculation_rate_id' => '1','tax_calculation_rule_id' => '1','customer_tax_class_id' => '3','product_tax_class_id' => '2'),
  array('tax_calculation_id' => '2','tax_calculation_rate_id' => '2','tax_calculation_rule_id' => '1','customer_tax_class_id' => '3','product_tax_class_id' => '2')
);

/* `magento`.`tax_calculation_rate` */
$tax_calculation_rate = array(
  array('tax_calculation_rate_id' => '1','tax_country_id' => 'US','tax_region_id' => '12','tax_postcode' => '*','code' => 'US-CA-*-Rate 1','rate' => '8.2500','zip_is_range' => NULL,'zip_from' => NULL,'zip_to' => NULL),
  array('tax_calculation_rate_id' => '2','tax_country_id' => 'US','tax_region_id' => '43','tax_postcode' => '*','code' => 'US-NY-*-Rate 1','rate' => '8.3750','zip_is_range' => NULL,'zip_from' => NULL,'zip_to' => NULL)
);

/* `magento`.`tax_calculation_rate_title` */
$tax_calculation_rate_title = array(
);

/* `magento`.`tax_calculation_rule` */
$tax_calculation_rule = array(
  array('tax_calculation_rule_id' => '1','code' => 'Retail Customer-Taxable Goods-Rate 1','priority' => '1','position' => '1','calculate_subtotal' => '0')
);

/* `magento`.`tax_class` */
$tax_class = array(
  array('class_id' => '2','class_name' => 'Taxable Goods','class_type' => 'PRODUCT'),
  array('class_id' => '3','class_name' => 'Retail Customer','class_type' => 'CUSTOMER'),
  array('class_id' => '4','class_name' => 'Shipping','class_type' => 'PRODUCT')
);

/* `magento`.`tax_order_aggregated_created` */
$tax_order_aggregated_created = array(
);

/* `magento`.`tax_order_aggregated_updated` */
$tax_order_aggregated_updated = array(
);

/* `magento`.`weee_discount` */
$weee_discount = array(
);

/* `magento`.`weee_tax` */
$weee_tax = array(
);

/* `magento`.`widget` */
$widget = array(
);

/* `magento`.`widget_instance` */
$widget_instance = array(
);

/* `magento`.`widget_instance_page` */
$widget_instance_page = array(
);

/* `magento`.`widget_instance_page_layout` */
$widget_instance_page_layout = array(
);

/* `magento`.`wishlist` */
$wishlist = array(
  array('wishlist_id' => '1','customer_id' => '1','shared' => '0','sharing_code' => 'e5778569075a2cb1534a8172caa379bb','updated_at' => '2018-02-10 16:45:05')
);

/* `magento`.`wishlist_item` */
$wishlist_item = array(
);

/* `magento`.`wishlist_item_option` */
$wishlist_item_option = array(
);
