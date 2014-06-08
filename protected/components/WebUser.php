<?php

class WebUser extends CWebUser
{
	protected $_model;

	protected function getModel()
	{
		if($this->_model === null)
			$this->_model = Users::model()->findByPk($this->id);

		return $this->_model;
	}
}