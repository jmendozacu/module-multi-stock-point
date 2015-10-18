<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
DROP TABLE IF EXISTS  anyuse;
 create table anyuse(id int not null auto_increment, name varchar(100), primary key(tablename_id));
    insert into tablename values(1,'default');
    
		
SQLTEXT;

$installer->run($sql);
//demo 
//Mage::getModel('core/url_rewrite')->setId(null);
//demo 
echo "multi stock point";
$installer->endSetup();
	 