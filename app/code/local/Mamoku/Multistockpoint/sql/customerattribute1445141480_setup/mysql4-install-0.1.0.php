<?php
$installer = $this;
$installer->startSetup();


$installer->addAttribute("customer", "photo",  array(
    "type"     => "varchar",
    "backend"  => "catalog/category_attribute_backend_image",
    "label"    => "photo",
    "input"    => "image",
    "source"   => "",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

	));

        $attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "photo");

        
$used_in_forms=array();

$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="checkout_register";
$used_in_forms[]="customer_account_create";
$used_in_forms[]="customer_account_edit";
$used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
		->setData("is_used_for_customer_segment", true)
		->setData("is_system", 0)
		->setData("is_user_defined", 1)
		->setData("is_visible", 1)
		->setData("sort_order", 100)
		;
        $attribute->save();

$installer->addAttribute('catalog_product', 'price_qty', array(
  'type'              => 'varchar',
  'backend'           => '',
  'frontend'          => '',
  'label'             => 'price_qty',
  'input'             => 'select',
  'class'             => '',
  'source'            => 'catalog/product_attribute_source_layout',
  'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
  'visible'           => true,
  'required'          => false,
  'user_defined'      => false,
  'default'           => '',
  'searchable'        => false,
  'filterable'        => false,
  'comparable'        => false,
  'visible_on_front'  => false,
  'unique'            => false,
  'group'             => 'Design'
));
	
	

$installer->addAttribute("customer", "kecamatan",  array(
    "type"     => "int",
    "backend"  => "",
    "label"    => "kecamatan",
    "input"    => "text",
    
    "visible"  => true,
    "required" => true,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

	));

        $attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "kecamatan");

        
$used_in_forms=array();

$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="checkout_register";
$used_in_forms[]="customer_account_create";
$used_in_forms[]="customer_account_edit";
$used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
		->setData("is_used_for_customer_segment", true)
		->setData("is_system", 0)
		->setData("is_user_defined", 1)
		->setData("is_visible", 1)
		->setData("sort_order", 100)
		;
        $attribute->save();
	
	
	

$installer->addAttribute("customer", "kelurahan",  array(
    "type"     => "int",
    "backend"  => "",
    "label"    => "kelurahan",
    "input"    => "text",    
    "visible"  => true,
    "required" => true,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

	));

        $attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "kelurahan");

        
$used_in_forms=array();

$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="checkout_register";
$used_in_forms[]="customer_account_create";
$used_in_forms[]="customer_account_edit";
$used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
		->setData("is_used_for_customer_segment", true)
		->setData("is_system", 0)
		->setData("is_user_defined", 1)
		->setData("is_visible", 1)
		->setData("sort_order", 100)
		;
        $attribute->save();
	
	
	

$installer->addAttribute("customer", "is_verified",  array(
    "type"     => "int",
    "backend"  => "",
    "label"    => "is_verified",
    "input"    => "select",
    "source"   => "eav/entity_attribute_source_boolean",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

	));

        $attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "is_verified");

        
$used_in_forms=array();

$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
		->setData("is_used_for_customer_segment", true)
		->setData("is_system", 0)
		->setData("is_user_defined", 1)
		->setData("is_visible", 1)
		->setData("sort_order", 100)
		;
        $attribute->save();	

$installer->addAttribute("customer", "stockpoint_id",  array(
    "type"     => "int",
    "backend"  => "",
    "label"    => "stockpoint_id",
    "input"    => "text",
    "source"   => "multistockpoint/eav_entity_attribute_source_customeroptions14451414802",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

  )); 
$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "stockpoint_id"); 
$used_in_forms = array();
$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
    ->setData("is_used_for_customer_segment", true)
    ->setData("is_system", 0)
    ->setData("is_user_defined", 1)
    ->setData("is_visible", 1)
    ->setData("sort_order", 100)
    ;
$attribute->save();
$installer->addAttribute("customer", "outlet_type",  array(
    "type"     => "varchar",
    "backend"  => "",
    "label"    => "outlet_type",
    "input"    => "select",
    "source"   => "multistockpoint/eav_entity_attribute_source_customeroptions14451414802",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

  )); 
$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "outlet_type"); 
$attribute->save();
$installer->addAttribute("customer", "outlet_owner",  array(
    "type"     => "varchar",
    "backend"  => "",
    "label"    => "outlet_owner",
    "input"    => "text",
    "source"   => "multistockpoint/eav_entity_attribute_source_customeroptions14451414802",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

  )); 
$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "outlet_owner"); 
$used_in_forms = array();
$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
    ->setData("is_used_for_customer_segment", true)
    ->setData("is_system", 0)
    ->setData("is_user_defined", 1)
    ->setData("is_visible", 1)
    ->setData("sort_order", 100)
    ;
$attribute->save();
$installer->addAttribute("customer", "outlet_name",  array(
    "type"     => "varchar",
    "backend"  => "",
    "label"    => "outlet_name",
    "input"    => "text",
    "source"   => "multistockpoint/eav_entity_attribute_source_customeroptions14451414802",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

  )); 
$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "outlet_name"); 
$used_in_forms = array();
$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
    ->setData("is_used_for_customer_segment", true)
    ->setData("is_system", 0)
    ->setData("is_user_defined", 1)
    ->setData("is_visible", 1)
    ->setData("sort_order", 100)
    ;
$attribute->save();
$installer->addAttribute("customer", "ktp_number",  array(
    "type"     => "varchar",
    "backend"  => "",
    "label"    => "ktp_number",
    "input"    => "text",
    "source"   => "multistockpoint/eav_entity_attribute_source_customeroptions14451414802",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

  )); 
$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "ktp_number"); 
$used_in_forms = array();
$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
    ->setData("is_used_for_customer_segment", true)
    ->setData("is_system", 0)
    ->setData("is_user_defined", 1)
    ->setData("is_visible", 1)
    ->setData("sort_order", 100)
    ;
$attribute->save();
$installer->addAttribute("customer", "npwp_type",  array(
    "type"     => "varchar",
    "backend"  => "",
    "label"    => "npwp_type",
    "input"    => "text",
    "source"   => "multistockpoint/eav_entity_attribute_source_customeroptions14451414802",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

  )); 
$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "npwp_type"); 
$used_in_forms = array();
$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
    ->setData("is_used_for_customer_segment", true)
    ->setData("is_system", 0)
    ->setData("is_user_defined", 1)
    ->setData("is_visible", 1)
    ->setData("sort_order", 100)
    ;
$attribute->save();
$installer->addAttribute("customer", "npwp_number",  array(
    "type"     => "varchar",
    "backend"  => "",
    "label"    => "npwp_number",
    "input"    => "text",
    "source"   => "multistockpoint/eav_entity_attribute_source_customeroptions14451414802",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

  )); 
$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "npwp_number"); 
$used_in_forms = array();
$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
    ->setData("is_used_for_customer_segment", true)
    ->setData("is_system", 0)
    ->setData("is_user_defined", 1)
    ->setData("is_visible", 1)
    ->setData("sort_order", 100)
    ;
$attribute->save();
$installer->addAttribute("customer", "npwp_name",  array(
    "type"     => "varchar",
    "backend"  => "",
    "label"    => "npwp_name",
    "input"    => "text",
    "source"   => "multistockpoint/eav_entity_attribute_source_customeroptions14451414802",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

  )); 
$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "npwp_name"); 
$used_in_forms = array();
$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
    ->setData("is_used_for_customer_segment", true)
    ->setData("is_system", 0)
    ->setData("is_user_defined", 1)
    ->setData("is_visible", 1)
    ->setData("sort_order", 100)
    ;
$attribute->save();
$installer->addAttribute("customer", "npwp_address",  array(
    "type"     => "varchar",
    "backend"  => "",
    "label"    => "npwp_address",
    "input"    => "text",
    "source"   => "multistockpoint/eav_entity_attribute_source_customeroptions14451414802",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

  )); 
$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "npwp_address"); 
$used_in_forms = array();
$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
    ->setData("is_used_for_customer_segment", true)
    ->setData("is_system", 0)
    ->setData("is_user_defined", 1)
    ->setData("is_visible", 1)
    ->setData("sort_order", 100)
    ;
$attribute->save();
$installer->addAttribute("customer", "mobile_number",  array(
    "type"     => "varchar",
    "backend"  => "",
    "label"    => "mobile_number",
    "input"    => "text",
    "source"   => "multistockpoint/eav_entity_attribute_source_customeroptions14451414802",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

  )); 
$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "mobile_number"); 
$used_in_forms = array();
$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
    ->setData("is_used_for_customer_segment", true)
    ->setData("is_system", 0)
    ->setData("is_user_defined", 1)
    ->setData("is_visible", 1)
    ->setData("sort_order", 100)
    ;
$attribute->save();
$installer->addAttribute("customer", "email_cc",  array(
    "type"     => "varchar",
    "backend"  => "",
    "label"    => "email_cc",
    "input"    => "text",
    "source"   => "multistockpoint/eav_entity_attribute_source_customeroptions14451414802",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

  )); 
$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "email_cc"); 
$used_in_forms = array();
$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
    ->setData("is_used_for_customer_segment", true)
    ->setData("is_system", 0)
    ->setData("is_user_defined", 1)
    ->setData("is_visible", 1)
    ->setData("sort_order", 100)
    ;
$attribute->save();
$installer->addAttribute("customer", "latitude",  array(
    "type"     => "varchar",
    "backend"  => "",
    "label"    => "latitude",
    "input"    => "text",
    "source"   => "multistockpoint/eav_entity_attribute_source_customeroptions14451414802",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

  )); 
$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "latitude"); 
$used_in_forms = array();
$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
    ->setData("is_used_for_customer_segment", true)
    ->setData("is_system", 0)
    ->setData("is_user_defined", 1)
    ->setData("is_visible", 1)
    ->setData("sort_order", 100)
    ;
$attribute->save();
$installer->addAttribute("customer", "longitude",  array(
    "type"     => "varchar",
    "backend"  => "",
    "label"    => "longitude",
    "input"    => "text",
    "source"   => "multistockpoint/eav_entity_attribute_source_customeroptions14451414802",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

  )); 
$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "longitude"); 
$used_in_forms = array();
$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
    ->setData("is_used_for_customer_segment", true)
    ->setData("is_system", 0)
    ->setData("is_user_defined", 1)
    ->setData("is_visible", 1)
    ->setData("sort_order", 100)
    ;
$attribute->save();
$installer->addAttribute("customer", "note_verification_pull_flag",  array(
    "type"     => "varchar",
    "backend"  => "",
    "label"    => "note_verification_pull_flag",
    "input"    => "text",
    "source"   => "multistockpoint/eav_entity_attribute_source_customeroptions14451414802",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

  )); 
$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "note_verification_pull_flag"); 
$used_in_forms = array();
$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
    ->setData("is_used_for_customer_segment", true)
    ->setData("is_system", 0)
    ->setData("is_user_defined", 1)
    ->setData("is_visible", 1)
    ->setData("sort_order", 100)
    ;
$attribute->save();
$installer->addAttribute("customer", "verification_pull_date_time",  array(
    "type"     => "date",
    "backend"  => "",
    "label"    => "verification_pull_date_time",
    "input"    => "date",
    "source"   => "multistockpoint/eav_entity_attribute_source_customeroptions14451414802",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

  )); 
$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "verification_pull_date_time"); 
$used_in_forms = array();
$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
    ->setData("is_used_for_customer_segment", true)
    ->setData("is_system", 0)
    ->setData("is_user_defined", 1)
    ->setData("is_visible", 1)
    ->setData("sort_order", 100)
    ;
$attribute->save();
$installer->addAttribute("customer", "imo_status",  array(
    "type"     => "varchar",
    "backend"  => "",
    "label"    => "imo_status",
    "input"    => "select",
    "source"   => "multistockpoint/eav_entity_attribute_source_customeroptions14451414802",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

  )); 
$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "imo_status"); 
$used_in_forms = array();
$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
    ->setData("is_used_for_customer_segment", true)
    ->setData("is_system", 0)
    ->setData("is_user_defined", 1)
    ->setData("is_visible", 1)
    ->setData("sort_order", 100)
    ;
$attribute->save();
$installer->addAttribute("customer", "imo_update_date_time",  array(
    "type"     => "date",
    "backend"  => "",
    "label"    => "imo_update_date_time",
    "input"    => "date",
    "source"   => "multistockpoint/eav_entity_attribute_source_customeroptions14451414802",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

  )); 
$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "imo_update_date_time"); 
$used_in_forms = array();
$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="adminhtml_checkout";
        $attribute->setData("used_in_forms", $used_in_forms)
    ->setData("is_used_for_customer_segment", true)
    ->setData("is_system", 0)
    ->setData("is_user_defined", 1)
    ->setData("is_visible", 1)
    ->setData("sort_order", 100)
    ;
$attribute->save();

$installer->endSetup();
	 