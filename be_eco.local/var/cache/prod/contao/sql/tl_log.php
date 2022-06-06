<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'tstamp' => 'int(10) unsigned NOT NULL default 0',
  'source' => 'varchar(32) NOT NULL default \'\'',
  'action' => 'varchar(32) NOT NULL default \'\'',
  'username' => 'varchar(64) NOT NULL default \'\'',
  'text' => 'text NULL',
  'func' => 'varchar(255) NOT NULL default \'\'',
  'browser' => 'varchar(255) NOT NULL default \'\'',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
);

$this->arrRelations = array (
);

$this->blnIsDbTable = true;
