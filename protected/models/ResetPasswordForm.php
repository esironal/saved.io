<?php

class ResetPasswordForm extends CFormModel
{
	public $email;
	public $salt;

	public function rules()
	{
		return [
			['email', 'required', 'message' => 'There is no record of this email address in our database!'],
			['email', 'exist', 'className' => 'Users', 'message' => 'There is no record of this email address in our database!']
		];
	}

	public function onAfterValidate($event){
		$user = Users::model()->find('email = :email', ['email' => $this->email]);

		if($user !== null)
			$this->salt = $user->salt;

		return parent::onAfterValidate($event);
	}
}