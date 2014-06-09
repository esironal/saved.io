<?php

class m140608_232017_change_bookmarks_foreign_key_policy extends CDbMigration
{
	public function up()
	{
		$this->dropForeignKey('fk_bookmarks_lists', 'bookmarks');
		$this->addForeignKey('fk_bookmarks_lists', 'bookmarks', 'list_id', 'lists', 'id', 'SET NULL', 'CASCADE');
	}

	public function down()
	{
		$this->dropForeignKey('fk_bookmarks_lists', 'bookmarks');
		$this->addForeignKey('fk_bookmarks_lists', 'bookmarks', 'list_id', 'lists', 'id', 'CASCADE', 'CASCADE');
	}
}