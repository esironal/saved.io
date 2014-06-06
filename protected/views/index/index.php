<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en" > <![endif]-->
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
          <h3>Just type <span class="red"><?php echo Utils::getBaseUrl() ?>/</span> in front of any URL to save a bookmark to the cloud</h3>
          <a href="<?php echo $this->createUrl('index/register') ?>"><img src="img/browser.png"></a>
          <h4><?php echo Yii::app()->name ?> works on any device, and in any browser without needing any extensions or plugins.  Your links are stored privately and not shared with anyone.</h3>
          <a href="<?php echo $this->createUrl('index/register') ?>"><img class="viewimg" src="img/front.png"></a>
            </div>  
      
      <div class="large-4 columns">
        <div class="login-link">
        <a href="#" data-dropdown="drop2">Login</a><a class="alittleright" href="<?php echo $this->createUrl('index/register') ?>">Register</a>
        <div id="drop2" class="f-dropdown content" data-dropdown-content>
            <div class="form">
            <form name="form1" method="post" action="">
              <p class="login_p">Email:</p>
              <input name="myemail" type="text" id="myemail" placeholder="email">
              <p class="login_p">Password:</p>
              <input name="mypassword" type="password" id="mypassword" placeholder="password">
              <span style="float:left;"><a href="<?php echo $this->createUrl('index/preset') ?>">Forgot your pasword?</a></span> <input type="submit" name="login" class="small button secondary" value="Login">
            </form>
            <?php if($model->hasErrors('password')): ?>
            <p><?php echo $model->errors['password'][0] ?></p><p>
                      </p>
            <?php endif ?>
                      </div>
        </div>
      </div>
    </div>  
  </div>
  
  <div class="row">
    <div class="large-6 columns">
      <div class="panel">
        <h5>How to Save to a Link</h5>
        <p class="tiny-instructions">To save a Link, type <span class="highlight"><?php echo Utils::getBaseUrl() ?>/</span> in front of any URL in your browser's address bar.</p>
      </div>  
    </div>
    <div class="large-6 columns">
      <div class="panel">
        <h5>How to Create Lists</h5>
        <p class="tiny-instructions">To save to a list, type <span class="highlight">listname.<?php echo Utils::getBaseUrl() ?>/</span> in front of any URL.  A new list will automatically be created.  A list can be named anything you want.</p>

      </div>  
    </div>  
  </div>
  </div>
  <footer>
  <div class="row">
    <div class="large-12 columns">
      <hr />
      <ul class="inline-list ">
        <li><a href="<?php echo $this->createUrl('index/about') ?>">About Us</a></li>
        <li><a href="<?php echo $this->createUrl('index/blog') ?>">Blog</li>
        <li><a href="<?php echo $this->createUrl('index/api') ?>">API</a></li>  
        <li><a href="<?php echo $this->createUrl('index/apps') ?>">Bookmarklet</a></li>
        <li><a href="<?php echo $this->createUrl('index/faq') ?>">FAQ</a></li>
        <li><a href="<?php echo $this->createUrl('index/contact') ?>">Contact</a></li>
        <li><a href="<?php echo $this->createUrl('index/donate') ?>">Show Your Support</a></li>
      </ul> 
    </div>  
  </div>
  </footer>

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
