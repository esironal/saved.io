<?php

class m140609_102807_add_users_key extends CDbMigration
{
	public function up()
	{
		$this->addColumn('users', 'key', 'CHAR(32)');
	}

	public function down()
	{
		$this->dropColumn('users', 'key');
	}
}