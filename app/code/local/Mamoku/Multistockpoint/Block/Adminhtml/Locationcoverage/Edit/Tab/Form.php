<?php
class Mamoku_Multistockpoint_Block_Adminhtml_Locationcoverage_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("multistockpoint_form", array("legend"=>Mage::helper("multistockpoint")->__("Item information")));

				
						$fieldset->addField("stockpoint_code", "text", array(
						"label" => Mage::helper("multistockpoint")->__("location code"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "stockpoint_code",
						));
					
						$fieldset->addField("propinsi", "text", array(
						"label" => Mage::helper("multistockpoint")->__("propinsi"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "propinsi",
						));
					
						$fieldset->addField("kota", "text", array(
						"label" => Mage::helper("multistockpoint")->__("kota"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "kota",
						));
					
						$fieldset->addField("kecamatan", "text", array(
						"label" => Mage::helper("multistockpoint")->__("kecamatan"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "kecamatan",
						));
					
						$fieldset->addField("kelurahan", "text", array(
						"label" => Mage::helper("multistockpoint")->__("kelurahan"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "kelurahan",
						));
					
						$fieldset->addField("id", "text", array(
						"label" => Mage::helper("multistockpoint")->__("id"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "id",
						));
					

				if (Mage::getSingleton("adminhtml/session")->getLocationcoverageData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getLocationcoverageData());
					Mage::getSingleton("adminhtml/session")->setLocationcoverageData(null);
				} 
				elseif(Mage::registry("locationcoverage_data")) {
				    $form->setValues(Mage::registry("locationcoverage_data")->getData());
				}
				return parent::_prepareForm();
		}
}
