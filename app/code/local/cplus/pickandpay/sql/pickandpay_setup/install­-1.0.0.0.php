<?php
$installer = $this;
$installer->startSetup();
$installer->run("
ALTER TABLE `{$installer->getTable('sales/quote_payment')}` 
ADD `cplus_field_one` VARCHAR( 255 ) NOT NULL,
ADD `cplus_field_two` VARCHAR( 255 ) NOT NULL;
  
ALTER TABLE `{$installer->getTable('sales/order_payment')}` 
ADD `cplus_field_one` VARCHAR( 255 ) NOT NULL,
ADD `cplus_field_two` VARCHAR( 255 ) NOT NULL;
");
$installer->endSetup();