<?php

namespace Fuel\Migrations;

class Create_postarticles
{
	public function up()
	{
		\DBUtil::create_table('postarticles', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'title' => array('type' => 'text'),
			'subtitle' => array('type' => 'text'),
			'catalog' => array('type' => 'text'),
			'select_pdf' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('postarticles');
	}
}