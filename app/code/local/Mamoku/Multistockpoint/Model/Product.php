<?php
class Mamoku_Multistockpoint_Model_Product extends Mage_Catalog_Model_Product
{
    public function getPrice()
    {
         if(Mage::getSingleton('customer/session')->isLoggedIn()){
             $customer=Mage::getSingleton('customer/session')->getCustomer();
             //print             
             $obj=json_decode(parent::getPrice_qty(),true);             
             if($obj['price']){
             	if(intval($obj['price'][$customer->getStockpoint_id()])>0){
             		return $obj['price'][$customer->getStockpoint_id()];
             	}else{
             		return parent::getPrice();
             	}
             }else{
             	return parent::getPrice();
             }
             
         }else{
             return parent::getPrice();
         }

    }
}
