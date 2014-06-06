<?php

class Utils extends CComponent
{
	static public function getBaseUrl()
	{
		$url = Yii::app()->getBaseUrl(true);
		$schemePart = '://';
		return mb_substr($url, strpos($url, $schemePart) + mb_strlen($schemePart));
	}
}