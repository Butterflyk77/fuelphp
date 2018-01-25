<?php

class Model_Uploadpdf extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'file_name',
		'type',
		'size',
		'mimetype',
		'save_to',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);

	protected static $_table_name = 'uploadpdfs';

}
