<?php

namespace Fuel\Migrations;

class Create_postyoutubes
{
	public function up()
	{
		\DBUtil::create_table('postyoutubes', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'title' => array('type' => 'text'),
			'subtitle' => array('type' => 'text'),
			'catalog' => array('type' => 'text'),
			'youtubeid' => array('type' => 'text'),
			'body' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('postyoutubes');
	}
}