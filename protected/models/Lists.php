<?php

class Lists extends CActiveRecord
{
	public function tableName()
	{
		return 'lists';
	}

	public function rules()
	{
		return [
			['user_id, name', 'required'],
			['user_id', 'exist', 'className' => 'Users', 'attributeName' => 'id'],
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
            'bookmarks' => [self::HAS_MANY, 'Bookmarks', 'list_id'],
        ];
    }
}