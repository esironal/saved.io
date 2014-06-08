<?php

class UserIdentity extends CUserIdentity
{
	private $_id;

	public function getId()
	{
		return (int)$this->_id;
	}

	public function authenticate()
	{
		$user = Users::model()->find('email = :username OR username = :username', ['username' => $this->username]);

		if($user === null)
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		else
			if(!$user->checkPassword($this->password))
				$this->errorCode = self::ERROR_PASSWORD_INVALID;
			else
			{
				$this->_id = $user->id;
				$this->errorCode = self::ERROR_NONE;
			}

		return !$this->errorCode;
	}
}