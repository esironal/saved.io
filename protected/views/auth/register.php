<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Register to <?php echo Yii::app()->name ?></title>

  
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>

	<div class="page-heading">
	<div class="row">
		<div class="large-12 columns ">
		
			<h2>Registration</h2>
		
		</div>	
		
	</div>	
	</div>
	
	<div class="page-heading">
	
		<div class="row">
			<div class="large-4 columns">
			 	<div class="form">
				<form action="" method="post"/>
										<label>Username</label>
					<input type="text" placeholder="username" name='username' />
										<label>Email</label>
					<input type="text" placeholder="email" name='email' />
					</label>
										<label>Password</label>
										<input type="password" placeholder="password" name='password'>
					<input type="submit" class="small button secondary" value="Register" name='register'>
					or <a href="<?php echo $this->createUrl('index/index') ?>">Login</a>
					</form>
			<?php if($user->hasErrors()): ?>
			<p><?php echo array_values($user->errors)[0][0] ?></p><p>
                      </p>
			<?php else: ?>
			<p>*All fields are required</p>
			<?php endif ?>
			</div>
			</div>	
		</div>	
	</div>	

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
