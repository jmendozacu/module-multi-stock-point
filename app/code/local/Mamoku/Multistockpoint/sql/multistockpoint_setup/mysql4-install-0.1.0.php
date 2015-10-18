<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT


 CREATE TABLE IF NOT EXISTS `kecamatan` (
 `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
 `name` varchar(100) NOT NULL,
 `postal_code` int(5) DEFAULT NULL,
 `kabupaten_kota` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `kelurahan` (
 `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
 `name` varchar(100) NOT NULL,
 `postal_code` int(5) DEFAULT NULL,
 `kecamatan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8; 


CREATE TABLE IF NOT EXISTS `stockpoint` (
 `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
 `code` varchar(25) NOT NULL,
 `name` varchar(100) NOT NULL,
 `location` varchar(200) DEFAULT NULL,
 `area_kecamatan` varchar(100) NOT NULL,
 `address` text NOT NULL,
 `postal_code` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
SQLTEXT;

$installer->run($sql);
//demo
//Mage::getModel('core/url_rewrite')->setId(null);
//demo
echo "multi stock point";
$installer->endSetup();
