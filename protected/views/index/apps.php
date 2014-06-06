<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title><?php echo Yii::app()->name ?> - Bookmarklet and Extensions</title>
  
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
	<div class="page-heading">
	<div class="row">
		<div class="large-8 columns ">
			<a href="<?php echo $this->createUrl('index/index') ?>"><h2><?php echo Yii::app()->name ?></h2></a>
			<h3>Add-ons For <?php echo Yii::app()->name ?></h3>
			<p><?php echo Yii::app()->name ?> is designed to work without needing to install any add-ons.  But you can still install an extension or use our bookmarklet to further speed up the saving process. </p>
			<h4>Chrome Extension</h4>
			<p>Visit the Chrome Web Store to download the free extension.  This will add a small icon next to your address bar which will save bookmarks with one click.</p>
			<a class="small button disabled">Install Extension</a>
			<h4>Bookmarklet</h4>
			<p>Drag the following button into your bookmark bar, to save links via a bookmarklet</p>
			<a href="javascript:(function()%7B(function()%7Bjavascript%3A(function()%7Bif(window.myBookmarklet!%3D%3Dundefined)%7BmyBookmarklet()%3B%7Delse%7Bdocument.body.appendChild(document.createElement('script')).src%3D'<?php echo $this->createAbsoluteUrl('index/bookmarklet') ?>'%3B%7D%7D)()%3B%7D)()%7D)()" class="small button">Saved Bookmarklet</a>
				
		</div>	
		
		<div class="large-4 columns">
			<div class="login-link">
			<a href="<?php echo $this->createUrl('index/index') ?>">Home</a>
			
			</div>
		</div>	
		
		
		
	</div>	
	</div>
	
	<footer><div class="row">
		<div class="large-12 columns">
			<hr />
			<ul class="inline-list ">
				<li><a href="<?php echo $this->createUrl('index/about') ?>">About Us</a></li>
				<li><a href="<?php echo $this->createUrl('index/faq') ?>">FAQ</a></li>
				<li><a href="<?php echo $this->createUrl('index/apps') ?>">Bookmarklet</a></li>
				<li><a href="<?php echo $this->createUrl('index/contact') ?>">Contact</a></li>
			</ul>	
		</div>	
	</footer></div>	
	
		

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
