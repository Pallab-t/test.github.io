<?php

namespace  {
/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

$GLOBALS['TL_DCA']['tl_search_index'] = array
(
	// Config
	'config' => array
	(
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary',
				'pid' => 'index',
				'word' => 'index'
			)
		)
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'pid' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default 0"
		),
		'word' => array
		(
			'sql'                     => "varchar(64) BINARY NOT NULL default ''"
		),
		'relevance' => array
		(
			'sql'                     => "smallint(5) unsigned NOT NULL default 0"
		),
		'language' => array
		(
			'sql'                     => "varchar(5) NOT NULL default ''"
		)
	)
);
}
