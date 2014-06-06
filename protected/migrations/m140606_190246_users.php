<?php

class m140606_190246_users extends CDbMigration
{
	public function up()
	{
		$this->createTable('users', [
			'id' => 'pk',
			'username' => 'string NOT NULL',
			'password' => 'CHAR(32) NOT NULL',
			'salt' => 'CHAR(32) NOT NULL',
			'email' => 'string NOT NULL',
			'registration_date' => 'DATETIME NOT NULL'
		]);
	}

	public function down()
	{
		$this->dropTable('users');
	}
}