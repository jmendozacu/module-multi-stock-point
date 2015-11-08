<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT

-- MySQL dump 10.13  Distrib 5.6.19, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: indonesia
-- ------------------------------------------------------
-- Server version	5.6.19-0ubuntu0.14.04.1-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


DROP TABLE IF EXISTS `districts`;

DROP TABLE IF EXISTS `provinces`;

DROP TABLE IF EXISTS `regencies`;

DROP TABLE IF EXISTS `villages`;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-17 23:25:03


DROP TABLE IF EXISTS kelurahan,kecamatan,stockpoint;

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
SQLTEXT;

$installer->run($sql);
//demo
//Mage::getModel('core/url_rewrite')->setId(null);
//demo
echo "<h1>congrats! Momoku installed</h1>";
$installer->endSetup();
