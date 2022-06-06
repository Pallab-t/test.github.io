<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'tstamp' => 'int(10) unsigned NOT NULL default 0',
  'firstname' => 'varchar(255) NOT NULL default \'\'',
  'lastname' => 'varchar(255) NOT NULL default \'\'',
  'dateOfBirth' => 'varchar(11) NOT NULL default \'\'',
  'gender' => 'varchar(32) NOT NULL default \'\'',
  'company' => 'varchar(255) NOT NULL default \'\'',
  'street' => 'varchar(255) NOT NULL default \'\'',
  'postal' => 'varchar(32) NOT NULL default \'\'',
  'city' => 'varchar(255) NOT NULL default \'\'',
  'state' => 'varchar(64) NOT NULL default \'\'',
  'country' => 'varchar(2) NOT NULL default \'\'',
  'phone' => 'varchar(64) NOT NULL default \'\'',
  'mobile' => 'varchar(64) NOT NULL default \'\'',
  'fax' => 'varchar(64) NOT NULL default \'\'',
  'email' => 'varchar(255) NOT NULL default \'\'',
  'website' => 'varchar(255) NOT NULL default \'\'',
  'language' => 'varchar(5) NOT NULL default \'\'',
  'groups' => 'blob NULL',
  'login' => 'char(1) NOT NULL default \'\'',
  'username' => 'varchar(64) BINARY NULL',
  'password' => 'varchar(255) NOT NULL default \'\'',
  'assignDir' => 'char(1) NOT NULL default \'\'',
  'homeDir' => 'binary(16) NULL',
  'disable' => 'char(1) NOT NULL default \'\'',
  'start' => 'varchar(10) NOT NULL default \'\'',
  'stop' => 'varchar(10) NOT NULL default \'\'',
  'dateAdded' => 'int(10) unsigned NOT NULL default 0',
  'lastLogin' => 'int(10) unsigned NOT NULL default 0',
  'currentLogin' => 'int(10) unsigned NOT NULL default 0',
  'loginAttempts' => 'smallint(5) unsigned NOT NULL default 0',
  'locked' => 'int(10) unsigned NOT NULL default 0',
  'session' => 'blob NULL',
  'secret' => 'binary(128) NULL default NULL',
  'useTwoFactor' => 'char(1) NOT NULL default \'\'',
  'backupCodes' => 'text NULL',
  'trustedTokenVersion' => 'int(10) unsigned NOT NULL default 0',
  'newsletter' => 'blob NULL',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
  0 => 'email',
  1 => 'username',
);

$this->arrKeys = array (
  'id' => 'primary',
  'username' => 'unique',
  'email' => 'index',
);

$this->arrRelations = array (
  'groups' => 
  array (
    'table' => 'tl_member_group',
    'field' => 'id',
    'type' => 'belongsToMany',
    'load' => 'lazy',
  ),
);

$this->blnIsDbTable = true;
