<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=fuel_cancer',
			'username'   => 'root',
			'password'   => '12345678',
		),
		'table_prefix' => 'sk_',
	),
);
