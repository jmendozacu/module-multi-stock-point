<?php
class Mamoku_Multistockpoint_Block_Adminhtml_Kecamatan_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
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
									
						 $fieldset->addField('kabupaten_kota', 'select', array(
						'label'     => Mage::helper('multistockpoint')->__('kabupaten_kota'),
						'values'   => Mamoku_Multistockpoint_Block_Adminhtml_Kecamatan_Grid::getValueArray12(),
						'name' => 'kabupaten_kota',
						));

				if (Mage::getSingleton("adminhtml/session")->getKecamatanData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getKecamatanData());
					Mage::getSingleton("adminhtml/session")->setKecamatanData(null);
				} 
				elseif(Mage::registry("kecamatan_data")) {
				    $form->setValues(Mage::registry("kecamatan_data")->getData());
				}
				return parent::_prepareForm();
		}
}
