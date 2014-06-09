<?php

class Users extends CActiveRecord
{
	public function tableName()
	{
		return 'users';
	}

	public function rules()
	{
		return [
			['username, email', 'required', 'message' => 'All fields are required'],
			['email', 'email', 'message' => 'Invalid email address.'],
			['salt', 'makeSalt', 'on' => 'insert, changePassword'],
			['password', 'makePassword', 'skipOnError' => true, 'on' => 'insert, changePassword'],
			['username, email', 'unique', 'className' => 'Users', 'message' => 'This username or email is already in use.'],
		];
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function relations()
	{
		return [
			'lists' => [self::HAS_MANY, 'Lists', 'user_id'],
			'bookmarks' => [self::HAS_MANY, 'Bookmarks', 'user_id', 'order' => 'id DESC'],
		];
	}

	public function checkPassword($password)
	{
		return $this->password === $this->hashPassword($password);
	}

	private function hashPassword($password)
	{
		if($this->salt === null)
			$this->makeSalt();

		return md5(sprintf('%s%s%s', $this->salt, $password, $this->salt));
	}

	public function makeSalt()
	{
		$this->salt = md5(microtime(true));
	}

	public function makePassword()
	{
		$this->password = $this->hashPassword($this->password);
	}
}