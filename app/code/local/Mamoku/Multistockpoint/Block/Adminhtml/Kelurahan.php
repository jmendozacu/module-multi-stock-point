<?php


class Mamoku_Multistockpoint_Block_Adminhtml_Kelurahan extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_kelurahan";
	$this->_blockGroup = "multistockpoint";
	$this->_headerText = Mage::helper("multistockpoint")->__("Kelurahan Manager");
	$this->_addButtonLabel = Mage::helper("multistockpoint")->__("Add New Item");
	parent::__construct();
	
	}

}