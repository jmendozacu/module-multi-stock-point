<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT


SQLTEXT;

$installer->run($sql);
//demo
//Mage::getModel('core/url_rewrite')->setId(null);
//demo
echo "multi stock point";
$installer->endSetup();
