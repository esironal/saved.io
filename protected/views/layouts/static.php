<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title><?php echo Yii::app()->name ?> - The fastest way to save links in the cloud</title>

  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
	<div class="page-heading">
	<div class="row">
		<div class="large-8 columns ">
			<a href="<?php echo $this->createUrl('index/index') ?>"><h2><?php echo Yii::app()->name ?></h2></a>
			<?php echo $content ?>
			
		</div>	
		
		<div class="large-4 columns">
			<div class="login-link">
			<a href="<?php echo $this->createUrl('index/index') ?>">Home</a>
			
			</div>
		</div>	
		
		
		
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
