<?php
class Model_Postyoutube extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'title',
		'subtitle',
		'catalog',
		'youtubeid',
		'body',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('title', 'Title', 'required');
		$val->add_field('subtitle', 'Subtitle', 'required');
		$val->add_field('catalog', 'Catalog', 'required');
		$val->add_field('youtubeid', 'Youtubeid', 'required');
		$val->add_field('body', 'Body', '');

		return $val;
	}

}
