<?php

class m140608_204138_add_bookmarks_note extends CDbMigration
{
	public function up()
	{
		$this->addColumn('bookmarks', 'note', 'text');
	}

	public function down()
	{
		$this->dropColumn('bookmarks', 'note');
	}
}