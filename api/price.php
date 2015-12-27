<?php
function get($param){
	$prod=Mage::getModel('catalog/product')->load($param->productid);
	$obj=json_decode($prod->getPrice_qty());
	foreach ($obj as $oname => $o) {
		if($oname!='qty'){
			foreach ($o as $key => $value) {
				# code...
				if($key==$param->locationid){
					success("success",$value);
				}

			}
		}
	}	
	

}


function post($param,$post){			
	$prod=Mage::getModel('catalog/product')->load($param->productid);
	$obj=json_decode($prod->getPrice_qty());
	foreach ($obj as $oname => $o) {
		if($oname!='qty'){
			foreach ($o as $key => $value) {
				# code...
				if($key==$param->locationid){
					$obj[$oname][$param->locationid]=$param->price;
					$prod->setPrice_qty(json_encode($obj));
					$prod->save();
					success("success",$value);
				}

			}
		}
	}	
	

}

