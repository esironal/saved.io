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
			['user_id', 'required'],
			['user_id', 'exist', 'className' => 'Users', 'attributeName' => 'id'],
			['list_id', 'exist', 'className' => 'Lists', 'attributeName' => 'id'],
			['title, url, note', 'safe'],
			['domain', 'autoDomain'],
		];
	}

	public function autoDomain()
	{
		if(!in_array(mb_substr($this->url, 0, 7), ['http://', 'https:/'], true))
			$this->url = 'http://' . $this->url;

		$this->domain = parse_url($this->url, PHP_URL_HOST) ?: null;
	}

	public function beforeSave()
	{
		if(!parent::beforeSave())
			return false;

		$this->modifying_date = date('Y-m-d H:i:s');

		if($this->isNewRecord)
			$this->addition_date = date('Y-m-d H:i:s');

		return true;
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