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
			<h3>FAQ</h3>
			<h4>How do I save a bookmark?</h4>
			<p>In your browsers address bar, type "<?php echo Utils::getBaseUrl() ?>/" in front of the URL of the site you want to save.  Hit enter and you'll be redirected to <?php echo Utils::getBaseUrl() ?> where you can see the saved link</p>
			<h4>Can I organize my links into lists?</h4>
			<p>Yes.  For example, if you want to save a URL into a list called "books", type "books.<?php echo Utils::getBaseUrl() ?>/" in front of a URL in your browser's address bar.  If the list doesn't already exist it will automatically be created.</p>
			<h4>Can I use a Bookmarklet or Extension instead of typing "<?php echo Utils::getBaseUrl() ?>/"?</h4>
			<p>Yes.  You can download them <a href="<?php echo $this->createUrl('index/apps') ?>">here</a></p>
			<h4>How much does <?php echo Yii::app()->name ?> cost to use?</h4>
			<p><?php echo Yii::app()->name ?> is completely free to use.  However, if you love the software, you can support its development <a href="http://gum.co/saved">here</a></p>
			<h4>Will <?php echo Yii::app()->name ?> work on iOS, Android, Windows Phone etc?</h4>
			<p>Yes, all you need is a web browser.  You don't need to install any apps or extensions.</p>	
			<h4>Is <?php echo Yii::app()->name ?> Social Bookmarking?</h4>
			<p>No.  Twitter and Facebook are both excellent platforms for sharing links.  <?php echo Yii::app()->name ?> is for storing links.  There are no social features and all your bookmarks are private</p>
			<h4>Why Can't I do x on <?php echo Yii::app()->name ?></h4>
			<p>There are many features missing from <?php echo Yii::app()->name ?> that you can find on other bookmarking sites, such as tags, descriptions notes etc.  We wanted to make the simplest bookmarking app possible.</p>
			
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
