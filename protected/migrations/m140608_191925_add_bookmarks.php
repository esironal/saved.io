<?php

class m140608_191925_add_bookmarks extends CDbMigration
{
	public function up()
	{
		$this->createTable('bookmarks', [
			'id' => 'pk',
			'user_id' => 'integer NOT NULL',
			'list_id' => 'integer',
			'title' => 'string',
			'domain' => 'string',
			'url' => 'string',
			'addition_date' => 'datetime NOT NULL',
		]);

		$this->addForeignKey('fk_bookmarks_users', 'bookmarks', 'user_id', 'users', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_bookmarks_lists', 'bookmarks', 'list_id', 'lists', 'id', 'CASCADE', 'CASCADE');
	}

	public function down()
	{
		$this->dropForeignKey('fk_bookmarks_lists', 'bookmarks');
		$this->dropForeignKey('fk_bookmarks_users', 'bookmarks');
		$this->dropTable('bookmarks');
	}
}