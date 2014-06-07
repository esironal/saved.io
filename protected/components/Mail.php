<?php 

class Mail extends CComponent
{
	static public function send($to, $subject, $view, $params)
	{
		$message = new YiiMailMessage;
		$message->view = $view;
		$message->setSubject($subject);
		$message->setBody($params, 'text/html');
		$message->getHeaders()->addMailboxHeader('Sender');
		$message->setSender(Yii::app()->mail->transportOptions['username']);
		$message->addTo($to);
		$message->from = Yii::app()->mail->transportOptions['username'];

		try
		{
			return Yii::app()->mail->send($message);
		}
		catch(Exception $e)
		{
			return false;
		}
	}
}