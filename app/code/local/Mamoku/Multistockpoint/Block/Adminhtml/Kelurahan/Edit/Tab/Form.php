<?php
class Mamoku_Multistockpoint_Block_Adminhtml_Kelurahan_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("multistockpoint_form", array("legend"=>Mage::helper("multistockpoint")->__("Item information")));

				
						$fieldset->addField("nama", "text", array(
						"label" => Mage::helper("multistockpoint")->__("nama"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "nama",
						));
					
						$fieldset->addField("kodepos", "text", array(
						"label" => Mage::helper("multistockpoint")->__("kodepos"),
						"name" => "kodepos",
						));
									
						 $fieldset->addField('kecamatan', 'select', array(
						'label'     => Mage::helper('multistockpoint')->__('kecamatan'),
						'values'   => Mamoku_Multistockpoint_Block_Adminhtml_Kelurahan_Grid::getValueArray9(),
						'name' => 'kecamatan',
						));

				if (Mage::getSingleton("adminhtml/session")->getKelurahanData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getKelurahanData());
					Mage::getSingleton("adminhtml/session")->setKelurahanData(null);
				} 
				elseif(Mage::registry("kelurahan_data")) {
				    $form->setValues(Mage::registry("kelurahan_data")->getData());
				}
				return parent::_prepareForm();
		}
}
