<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT

DROP TABLE IF EXISTS stockpoint;

CREATE TABLE IF NOT EXISTS `stockpoint` (
 `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
 `code` varchar(20) NOT NULL,
 `name` varchar(50) NOT NULL,
 `address` text NOT NULL,
 `email` varchar(50) NOT NULL,
 `telephone` varchar(15) NOT NULL,
 `officer` varchar(50) NOT NULL,
 `handphone` varchar(12) NOT NULL,
 `distribution_center` varchar(50) NOT NULL,
 `branch` varchar(50) NOT NULL,
 `description` varchar(100) DEFAULT NULL,
 `catatan` text,
 `last_sync_time` datetime
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS location_coverage;

CREATE TABLE IF NOT EXISTS `location_coverage` (
 `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
 `propinsi` varchar(20) NOT NULL,
 `kota` varchar(50) NOT NULL,
 `kecamatan` varchar(50) NOT NULL,
 `kelurahan` varchar(50) NOT NULL,
 `stockpoint_code` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
SQLTEXT;

$installer->run($sql);
//demo
//Mage::getModel('core/url_rewrite')->setId(null);
//demo
echo "<h1>congrats! Momoku installed</h1>";
$installer->endSetup();
