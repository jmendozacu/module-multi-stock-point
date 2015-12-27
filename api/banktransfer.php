<?php
function get($param){
	$payments=Mage::getModel('paymentconfirmation/confirmation')->getCollection();
	foreach ($payments as $pay) {
		# code...
		$result[]=$pay->getData();
	}
	success('ok',$result);
	
}



function post($param){
	$payments=Mage::getModel('paymentconfirmation/confirmation')->getCollection();
	foreach ($payments as $pay) {
		# code...
		//echo $pay->getConfirmationId().'=='.$param->confirmation_id;
	if($pay->getConfirmationId()==$param->confirmation_id) {
		$data=$pay->getData();
		$newdata=json_decode($_POST['data'],true);

		foreach ($newdata as $key => $value) {
			# code...
			
			$data[$key]=$value;
		}
		
		$pay->setData($data);
		$pay->save();
		success('ok');
	}
	}
}


