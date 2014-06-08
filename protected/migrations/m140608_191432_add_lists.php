<?php

class m140608_191432_add_lists extends CDbMigration
{
	public function up()
	{
		$this->createTable('lists', [
			'id' => 'pk',
			'user_id' => 'integer NOT NULL',
			'name' => 'string NOT NULL',
		]);

		$this->addForeignKey('fk_lists_users', 'lists', 'user_id', 'users', 'id', 'CASCADE', 'CASCADE');
	}

	public function down()
	{
		$this->dropForeignKey('fk_lists_users', 'lists');
		$this->dropTable('lists');
	}
}