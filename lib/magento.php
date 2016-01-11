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
	header('Content-Type: application/json');
	echo json_encode((object)$obj);
}

function error($msg){
	$obj['error']=true;
	$obj['message']=$msg;
	header('Content-Type: application/json');
	echo json_encode((object)$obj);
	exit();
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
		if($ikey!='id')
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
				if($cust['imageurl']){
					echo "wow";
					$image_url  = $cust['imageurl'];
					$image_url  = str_replace("https://", "http://", $image_url); // replace https tp http
					$image_type = substr(strrchr($image_url,"."),1); //find the image extension
					$filename   = md5($cust['sku']).'.'.$image_type; //give a new name, you can modify as per your requirement
					$filepath   = Mage::getBaseDir('media') . DS . 'catalog'. DS .'product'. DS . $filename; //path for temp storage folder: ./media/import/

					$query=file_get_contents($image_url);
					file_put_contents($filepath, $query); //store the image from external url to the temp storage folder file_get_contents(trim($image_url))
					$filepath_to_image = $filepath;

					if (file_exists($filepath_to_image)) {
					    $customer->addImageToMediaGallery($filepath_to_image, array('image', 'small_image', 'thumbnail'), false, false);
					    $customer->save();
					}
				}else
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
