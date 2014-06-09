<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title><?php echo Yii::app()->name ?></title>
  
  <link rel="stylesheet" href="/css/foundation.css">
  <link rel="stylesheet" href="/css/app.css">
  

  <script src="/js/vendor/custom.modernizr.js"></script>

</head>
<body>
	<header>
	<div class="row">
		<div class="large-6 columns ">
			<a href="<?php echo $this->createUrl('index/index') ?>"><h2>Your Bookmarks</h2></a>

		</div>	
	
		<div class="large-4 columns">
					<nav class="breadcrumbs">
					  <a class="back" href="<?php echo $this->createUrl('index/index') ?>">Home</a>
					</nav>
		</div>
	</div>	
	</header>
	
	<div class="page-heading">
		<div class="row">
			<div class="large-7 columns">
			<h3>Generate an API Token</h3>
			<p>Your token is used to access <?php echo Yii::app()->name ?> through third party apps.  You never need to give your <?php echo Yii::app()->name ?> username or password to third party apps.  Just generate a token below.  You can generate a new token at any time and this will deny access to any app using the old token</p>
			<b>Your Current Token is:</b>	
			<p><?php echo $key ?></p>
			    <form class="custom spacing" action="" method="post">				 
				<input name="submit" type="submit" class="button secondary" value="Generate Key" />
				</form>
						</div>	
					</div>	
				</div>
				
			<?php echo $this->renderPartial('//common/footer') ?>
  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? '/js/vendor/zepto' : '/js/vendor/jquery') +
  '.js><\/script>')
  </script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>