<?php
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

require_once('app/Mage.php'); //Path to Magento
Mage::app('admin');
$param=(object)$_GET;
$post=(object)$_POST;
$method=strtolower($_SERVER['REQUEST_METHOD']);
function success($msg,$data){
	$obj['success']=true;
	$obj['message']=$msg;
	$obj['data']=$data;
	echo json_encode((object)$obj);
}

function error($msg){
	$obj['error']=true;
	$obj['message']=$msg;
	echo json_encode((object)$obj);
}
function _get($model,$param){
	$models = mage::getModel($model)->getCollection()->addAttributeToSelect('*');;	
	if($param->filter){
		$filter=explode(',',$param->filter);
	}
	foreach($models as $item){
		$idata=$item->getData();
		if($filter){
			$match=true;
			foreach ($filter as $fitem) {
				# code...				
				$kval=explode(':', $fitem);
				if($idata[$kval[0]]!=$kval[1]){
					$match=false;
				}
			}
			if($match)
			$result[]=$item->getData();
		}else		
		$result[]=$item->getData();

	}
	success('success',$result);
}
function _post($ikey,$model,$post){
	$data=json_decode($post->data,true);
	foreach ($data as $cust) {
		# code...
		unset($cust['id']);
		

		$customers = mage::getModel($model)->getCollection();			
		$customers->addFieldToFilter($ikey,$cust[$ikey]);

		if(count($customers->getData())<=0){
			$customer = mage::getModel($model);		
			
		}else{
			
			$customer=$customers->getFirstItem();
		}				
			foreach ($cust as $key => $value) {
				# code...
				$customer->setData($key,$value);		
			}
			
		try {
				$customer->save();
						
			} catch (Exception $e){
			 error($e->getMessage());   
		}		
			
	}		
	success('success',count($data).' updated');
}
function _delete($key,$param,$model){
	$customers = mage::getModel($model)->getCollection();	
		$p=(array)$param;
		$customers->addFieldToFilter($key,$p[$key]);
		$customer=$customers->getFirstItem();
	$customer->delete();
	success('success',' deleted');	
}