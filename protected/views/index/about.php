<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title><?php echo Yii::app()->name ?> - About</title>

  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
	<div class="page-heading">
	<div class="row">
		<div class="large-8 columns ">
			<a href="<?php echo $this->createUrl('index/index') ?>"><h2><?php echo Yii::app()->name ?></h2></a>
			<h3>About</h3>
			<p>Everyday I use many different devices - my iphone, macbook, ipad, Windows machine etc.  I also use a number of different browsers -  Safari on iOS and Firefox and Chrome on OSx and Windows. </p>
			<p>This means that I was often losing bookmarks or simply not saving them because there was no easy way to do it across devices.  I didn't want to install extensions (which slow down the browsers and can introduce security issues) and it's not even possible on many devices.</p>
			<p>To solve this problem I built <?php echo Yii::app()->name ?>.  I came up with a solution that is super fast and easy to use, requires no extensions, and is future proof - it will work in any browser.  I've been running a version of the app locally for over a year, but I thought others may find it useful so I've released it to the world.  <?php echo Yii::app()->name ?> is free to use</p>
			<p><?php echo Yii::app()->name ?> is ridiculously simple to use - just type "<?php echo Utils::getBaseUrl() ?>/" in front of any URL in your address bar, hit enter and you've just saved a bookmark.  I've purposefully left out Tags, Folders, Descriptions, Notes etc. from this app.  Saving a bookmark should be fast.</p>
			<p>I hope you enjoy using <?php echo Yii::app()->name ?> as much as I have enjoyed building it.</p>
			<p><a href="http://feint.me"><i>Anthony Feint</a></i><p>
				
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
