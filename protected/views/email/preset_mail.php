A request for resetting your password was submitted to <a href="<?php echo $this->createAbsoluteUrl('index/index') ?>"><?php echo Yii::app()->name ?></a><br />
<a href="<?php echo $this->createAbsoluteUrl('auth/presetFinish', ['salt' => $salt]) ?>">Click here</a> to set a new password.