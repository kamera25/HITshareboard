<?php

namespace Fuel\Migrations;

class Create_bulletins
{
	public function up()
	{
		\DBUtil::create_table('bulletins', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'data' => array('type' => 'longblob'),
			'date' => array('type' => 'timestamp'),
			'ext' => array('constraint' => 4, 'type' => 'varchar'),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'board_id' => array('constraint' => 11, 'type' => 'int'),
			'state' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('bulletins');
	}
}
