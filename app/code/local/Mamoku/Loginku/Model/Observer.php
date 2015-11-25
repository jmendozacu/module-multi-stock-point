<?php
class Mamoku_Loginku_Model_Observer
{
     public function saveCustomerID($observer){
        $customer = $observer->getEvent()->getData();
    $CID = $customer['customer']->getEntityId();
    $CEA = $customer['customer']->getEmail();
    $CSI = $customer['customer']->getStoreId();
         
    $session = $_SESSION['core']['visitor_data'] ;
    	$sessionInfo = '';
        $sessionInfo .= ", Visitor Remote Addr:".long2ip((float)$session['remote_addr']);
        $sessionInfo .= ", Http Host:".$session['http_host'];
        $sessionInfo .= ", Session Id:".$session['session_id'];
        $sessionInfo .= ", Visitor DB Id:".$session['visitor_id'];
        $sessionInfo .= ", Last Url Id:".$session['last_url_id'];
         
    setcookie('Magento_CustomerID', $CID, time()+3600*30, '/');
    setcookie('Magento_Email', $CEA, time()+3600*30, '/');
         
    $storeName = Mage::app()->getStore()->getName();
         
        Mage::log("Customer LogIn --> ".$CID." - ".$CEA.$sessionInfo.": ".$storeName, null, 'loginku_observer.log');
    }
}