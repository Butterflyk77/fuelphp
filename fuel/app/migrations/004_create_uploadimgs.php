<?php

namespace Fuel\Migrations;

class Create_uploadimgs
{
	public function up()
	{
		\DBUtil::create_table('uploadimgs', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'file_name' => array('constraint' => 100, 'type' => 'varchar'),
			'type' => array('constraint' => 20, 'type' => 'varchar'),
			'size' => array('constraint' => 11, 'type' => 'int'),
			'mimetype' => array('constraint' => 20, 'type' => 'varchar'),
			'save_to' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('uploadimgs');
	}
}