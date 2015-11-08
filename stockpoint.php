<?php
require_once('app/Mage.php'); //Path to Magento
umask(0);
Mage::app();

$collection = Mage::getModel("multistockpoint/stockpoint")->getCollection();

foreach($collection as $stockpoint){
	$o['value']=$stockpoint->getId();
	$o['label']=$stockpoint->getName();
	$result[]=$o;
}
echo json_encode($result);