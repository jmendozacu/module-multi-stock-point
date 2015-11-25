<?php

require_once('app/Mage.php'); //Path to Magento
umask(0);
Mage::app();

$custid = 9;
$customer = Mage::getModel('customer/customer')->load($custid);


//$custid = Mage::getSingleton('customer/session')->getId();
$data = Mage::getModel('customer/customer')->load($custid);

$addreses = $data->getAddresses();
$anjing = array();
foreach ($addreses as $add){
  $anjing[] = $add->toArray();
}
echo "<pre>";
print_r($anjing);
print_r($data->getData());
echo "</pre>";
$defBill = Mage::getModel('customer/address')->load($data->getDefaultBilling());
print_r( $defBill->getData());