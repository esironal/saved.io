<?php

class Bookmarks extends CActiveRecord
{
	public function tableName()
	{
		return 'bookmarks';
	}

	public function rules()
	{
		return [
			['user_id, addition_date', 'required'],
			['user_id', 'exist', 'className' => 'Users', 'attributeName' => 'id'],
			['list_id', 'exist', 'className' => 'Lists', 'attributeName' => 'id'],
			['addition_date', 'date'],
			['title, domain, url', 'safe'],
		];
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function relations()
	{
		return [
			'user' => [self::BELONGS_TO, 'Users', 'user_id'],
			'list' => [self::BELONGS_TO, 'Lists', 'list_id'],
		];
	}

	public function getFormattedNote()
	{
		return preg_replace_callback('/#(\w+)/iu', function($a){
			return sprintf('<a class="radius secondary label hashtag" href="' . Yii::app()->createUrl('index/index') . '?q=%s">%s</a>', $a[1], $a[1]);
		}, $this->note);
	}
}