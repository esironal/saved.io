<?php

class m140608_210823_add_bookmarks_modifying_date extends CDbMigration
{
	public function up()
	{
		$this->addColumn('bookmarks', 'modifying_date', 'datetime NOT NULL');
	}

	public function down()
	{
		$this->dropColumn('bookmarks', 'modifying_date');
	}
}