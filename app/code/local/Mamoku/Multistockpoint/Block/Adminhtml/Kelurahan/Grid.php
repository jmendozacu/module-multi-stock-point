<?php

class Mamoku_Multistockpoint_Block_Adminhtml_Kelurahan_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("kelurahanGrid");
				$this->setDefaultSort("id");
				$this->setDefaultDir("DESC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("multistockpoint/kelurahan")->getCollection();
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
                
				$this->addColumn("name", array(
				"header" => Mage::helper("multistockpoint")->__("name"),
				"index" => "name",
				));
				$this->addColumn("kodepos", array(
				"header" => Mage::helper("multistockpoint")->__("kodepos"),
				"index" => "kodepos",
				));
						$this->addColumn('kecamatan', array(
						'header' => Mage::helper('multistockpoint')->__('kecamatan'),
						'index' => 'kecamatan',
						'type' => 'options',
						'options'=>Mamoku_Multistockpoint_Block_Adminhtml_Kelurahan_Grid::getOptionArray9(),				
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
			$this->getMassactionBlock()->addItem('remove_kelurahan', array(
					 'label'=> Mage::helper('multistockpoint')->__('Remove Kelurahan'),
					 'url'  => $this->getUrl('*/adminhtml_kelurahan/massRemove'),
					 'confirm' => Mage::helper('multistockpoint')->__('Are you sure?')
				));
			return $this;
		}
			
		static public function getOptionArray9()
		{
            $data_array=array(); 
			$data_array[0]='kecamatan1';
			$data_array[1]='kecamatan2';
            return($data_array);
		}
		static public function getValueArray9()
		{
            $data_array=array();
			foreach(Mamoku_Multistockpoint_Block_Adminhtml_Kelurahan_Grid::getOptionArray9() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		

}