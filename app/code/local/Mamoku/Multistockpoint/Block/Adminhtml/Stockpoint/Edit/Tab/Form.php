<?php
class Mamoku_Multistockpoint_Block_Adminhtml_Stockpoint_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("multistockpoint_form", array("legend"=>Mage::helper("multistockpoint")->__("Item information")));

				
						$fieldset->addField("code", "text", array(
						"label" => Mage::helper("multistockpoint")->__("code"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "code",
						));
					
						$fieldset->addField("name", "text", array(
						"label" => Mage::helper("multistockpoint")->__("name"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "name",
						));
					
						$fieldset->addField("location", "text", array(
						"label" => Mage::helper("multistockpoint")->__("location"),
						"name" => "location",
						));
					
						$fieldset->addField("area_kecamatan", "text", array(
						"label" => Mage::helper("multistockpoint")->__("area_kecamatan"),
						"name" => "area_kecamatan",
						));
					
						$fieldset->addField("address", "textarea", array(
						"label" => Mage::helper("multistockpoint")->__("address"),
						"name" => "address",
						));
					
						$fieldset->addField("kodepos", "text", array(
						"label" => Mage::helper("multistockpoint")->__("kodepos"),
						"name" => "kodepos",
						));
					

				if (Mage::getSingleton("adminhtml/session")->getStockpointData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getStockpointData());
					Mage::getSingleton("adminhtml/session")->setStockpointData(null);
				} 
				elseif(Mage::registry("stockpoint_data")) {
				    $form->setValues(Mage::registry("stockpoint_data")->getData());
				}
				return parent::_prepareForm();
		}
}
