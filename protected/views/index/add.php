<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width">
  	<title><?php echo Yii::app()->name ?></title>
  	<link rel="stylesheet" href="https://savedio-penio.netdna-ssl.com/css/foundation.css">
  	<link rel="stylesheet" href="https://savedio-penio.netdna-ssl.com/css/add.css">

  	<script src="https://savedio-penio.netdna-ssl.com/js/vendor/custom.modernizr.js"></script>

</head>

<body>
	<div class="row">
		<div class="large-12 columns">
			<?php if(!$error): ?>
			<h1>saved!</h1>
			<?php else: ?>
			<h1><?php echo $error ?></h1>
			<?php endif ?>
			<script> setTimeout(function() { window.top.postMessage("close-iframe", "*");}, 2500);</script>
		</div>	
	</div>	
</body>
</html>

