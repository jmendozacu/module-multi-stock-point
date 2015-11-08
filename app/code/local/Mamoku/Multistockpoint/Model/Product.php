<?php
class Mamoku_Multistockpoint_Model_Product extends Mage_Catalog_Model_Product
{
    public function getPrice()
    {
         if(Mage::getSingleton('customer/session')->isLoggedIn()){
             $customer=Mage::getSingleton('customer/session')->getCustomer();
             //print
             return parent::getPrice();
         }else{
             return parent::getPrice();
         }

    }
}
