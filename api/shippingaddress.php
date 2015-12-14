<?php
function get($param){
	$customerObj=Mage::getModel('customer/customer')->load( $param->custid );
	$data=[];
	foreach ($customerObj->getAddresses() as $address) {
		$data[]=$address->getData();
	}
	success('success',$data);
}

function post($param,$post){				
	$customerObj=Mage::getModel('customer/customer')->load( $param->custid );
	$data=json_decode($post->data,true);
	foreach ($data as $addr) {
		# code...
		foreach ($customerObj->getAddresses() as $address) {
			if($address->getId()==intval($addr['entity_id'])) {
				$address->setData($addr);
				$address->save();
			}
		}
	}

	$customerObj->save()
	

}

function delete($param){			
	$customerObj=Mage::getModel('customer/customer')->load( $param->custid );
	
	foreach ($customerObj->getAddresses() as $address) {
		if($address->getId()==intval($param->addressid)) {			
			$address->delete()
		}
	}
	

	$customerObj->save()
	

}