<?php
function get($param){
	$prod=Mage::getModel('catalog/product')->load($param->productid);
	$obj=json_decode($prod->getPrice_qty());
	foreach ($obj->qty as $key => $value) {
			if($key==$param->locationid){
				success("success",$value);
			}
	}	
	

}


function post($param,$post){			
	$prod=Mage::getModel('catalog/product')->load($param->productid);
	$obj=json_decode($prod->getPrice_qty());
	foreach ($obj->qty as $key => $value) {
			if($key==$param->locationid){
				$obj[$key]=$param->qty;
				$prod->setPrice_qty(json_encode($obj));
				$prod->save();
				success("success",$value);
			}
	}

}

function delete($param){			
	$prod=Mage::getModel('catalog/product')->load($param->productid);
	$obj=json_decode($prod->getPrice_qty());
	foreach ($obj->qty as $key => $value) {
			if($key==$param->locationid){
				$obj[$key]=0;
				$prod->setPrice_qty(json_encode($obj));
				$prod->save();
				success("success",$value);
			}
	}
}