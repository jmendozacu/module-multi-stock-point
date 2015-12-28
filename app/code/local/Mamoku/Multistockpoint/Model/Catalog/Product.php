<?php

class Mamoku_Multistockpoint_Model_Catalog_Product extends Mage_Catalog_Model_Product
{
   

    /**
     * Get product price throught type instance
     *
     * @return unknown
     */
    public function getPrice()
    {
        $product=$this;

        $qty=1;
        if(Mage::getSingleton('customer/session')->isLoggedIn()){
            $prices=Mage::getModel('multistockpoint/pricetype')->getCollection()->setOrder('minqty', 'DESC');
            foreach ($prices as $pritem) {
                # code...

                if($qty>=$pritem->getMinqty()){
                    $prname=$pritem->getTypename();
                    break;
                }
            }
            //echo "FUUU".$prname;exit();

            $customerAddressId = Mage::getSingleton('customer/session')->getCustomer()->getDefaultShipping();
            $address=Mage::getModel('customer/address')->load($customerAddressId);
            $locationc=Mage::getModel('multistockpoint/locationcoverage')->getCollection();
            $code='';
            foreach ($locationc as $loc) {
                # code...
                if($loc->getPropinsi()==$address->getRegion() && $loc->getKota()==$address->getCity() && $loc->getKecamatan()==$address->getKecamatan() && $loc->getKelurahan()==$address->getKelurahan() ){
                    $code=$loc->getStockpoint_code();
                }
            }
            //echo "CODE".$code;exit();

            $location=Mage::getModel('multistockpoint/stockpoint')->getCollection();
            $id=0;
            foreach ($location as $l) {
                # code...   
                
                if($l->getCode()==$code){
                    $id=$l->getData()['id'];
                }
            }
            
            $obj=json_decode(str_replace("'", '"', $product->getPrice_qty()),true);
            
            if($code!=''){
                
                $new_price = $obj[$prname][$id];
                //echo "SUUUUU".$new_price;exit();
                
                if(intval($new_price)>0){
                    return $new_price;
                    
                }
            }else{
                return 12345;
            }
        }else{
           return 56789;
        }
    }

    
}
