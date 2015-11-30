<?php
function get($param){
	
	$models = mage::getModel('multistockpoint/locationcoverage')->getCollection();

	foreach($models as $item){
		$result[]=$item->getData();
	}
	success('success',$result);
}


function post($param,$post){			
	_post('code','multistockpoint/locationcoverage',$post);
}

function delete($param){			
	_delete('code',$param,'multistockpoint/locationcoverage')	;
}