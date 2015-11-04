<?php

class Mamoku_Multistockpoint_Block_Adminhtml_Stockpoint_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("stockpointGrid");
				$this->setDefaultSort("id");
				$this->setDefaultDir("DESC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("multistockpoint/stockpoint")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("id", array(
				"header" => Mage::helper("multistockpoint")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "id",
				));
                
				$this->addColumn("code", array(
				"header" => Mage::helper("multistockpoint")->__("code"),
				"index" => "code",
				));
				$this->addColumn("name", array(
				"header" => Mage::helper("multistockpoint")->__("name"),
				"index" => "name",
				));
				$this->addColumn("location", array(
				"header" => Mage::helper("multistockpoint")->__("location"),
				"index" => "location",
				));
				$this->addColumn("kodepos", array(
				"header" => Mage::helper("multistockpoint")->__("kodepos"),
				"index" => "kodepos",
				));
			$this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
			$this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

				return parent::_prepareColumns();
		}

		public function getRowUrl($row)
		{
			   return $this->getUrl("*/*/edit", array("id" => $row->getId()));
		}


		
		protected function _prepareMassaction()
		{
			$this->setMassactionIdField('id');
			$this->getMassactionBlock()->setFormFieldName('ids');
			$this->getMassactionBlock()->setUseSelectAll(true);
			$this->getMassactionBlock()->addItem('remove_stockpoint', array(
					 'label'=> Mage::helper('multistockpoint')->__('Remove Stockpoint'),
					 'url'  => $this->getUrl('*/adminhtml_stockpoint/massRemove'),
					 'confirm' => Mage::helper('multistockpoint')->__('Are you sure?')
				));
			return $this;
		}
			

}