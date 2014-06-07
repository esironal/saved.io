<?php

class LoginForm extends CFormModel
{
	public $username;
	public $password;

	private $_identity;

	public function rules()
	{
		return [
			['username', 'required', 'message' => 'Wrong Username or Password.'],
			['password', 'authenticate']
		];
	}

	public function authenticate()
	{
		if(!$this->hasErrors())
		{
			$this->_identity = new UserIdentity($this->username, $this->password);

			if(!$this->_identity->authenticate())
				$this->addError('password', 'Wrong Username or Password.');
		}
	}

	public function login()
	{
		if($this->_identity === null)
			throw CException('Use LoginForm::authenticate() before');

		if($this->_identity->errorCode === UserIdentity::ERROR_NONE)
		{
			Yii::app()->user->login($this->_identity, 3600*24*14);
			return true;
		}
		else
			return false;
	}
}