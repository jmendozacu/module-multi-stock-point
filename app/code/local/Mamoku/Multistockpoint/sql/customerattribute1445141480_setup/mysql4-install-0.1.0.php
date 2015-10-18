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
	
	
	

$installer->addAttribute("customer", "kecamatan",  array(
    "type"     => "int",
    "backend"  => "",
    "label"    => "kecamatan",
    "input"    => "select",
    "source"   => "multistockpoint/eav_entity_attribute_source_customeroptions14451414801",
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
    "input"    => "select",
    "source"   => "multistockpoint/eav_entity_attribute_source_customeroptions14451414802",
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
	
	
	
$installer->endSetup();
	 