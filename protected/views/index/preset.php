<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">

 <title><?php echo Yii::app()->name ?> - The fastest way to save links in the cloud</title>

  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  


  <!-- iPhone -->
  <link href="img/apple-touch-icon-57x57.png" sizes="57x57" rel="apple-touch-icon">
  <link href="img/apple-touch-startup-image-320x460.png" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">

  <!-- iPhone (Retina) -->
  <link href="img/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
  <link href="img/apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">

  <!-- iPhone 5 -->
  <link href="img/apple-touch-startup-image-640x1096.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">

  <!-- iPad -->
  <link href="img/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
  <link href="img/apple-touch-startup-image-768x1004.png" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">
  <link href="img/apple-touch-startup-image-748x1024.png" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">

  <!-- iPad (Retina) -->
  <link href="img/apple-touch-icon-144x144.png" sizes="144x144" rel="apple-touch-icon">
  <link href="img/apple-touch-startup-image-1536x2008.png" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
  <link href="img/apple-touch-startup-image-1496x2048.png" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
<div class="page-heading">
	<div class="row">
		<div class="large-8 columns ">
			<h2><?php echo Yii::app()->name ?></h2>
		</div>	
	</div>
	<div class="row" id="preset_wrap">
    <?php if($success): ?>
    <p>A link to a page where you will be able to set a new password was sent to your email!</p>
    <?php elseif($model->hasErrors()): ?>
    <p><?php echo array_values($model->errors)[0][0] ?><br /><a href="<?php echo $this->createUrl('index/preset') ?>">Go back and try again</a></p>
    <?php else: ?>
			<div class="form">
			<form name="form1" method="post" action="">
				<p>Enter below the email address you registered with:</p>
				<center><input name="myemail" type="text" id="myemail" placeholder="email" class="preset_email"></center>
				<center><input type="submit" name="preset" class="button" value="Request reset link" /></center>
			</form>
		</div>
    <?php endif ?>
		</div>
</div>

<?php echo $this->renderPartial('//common/footer') ?>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
