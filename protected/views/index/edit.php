<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Edit | <?php echo Yii::app()->name ?></title>
  
  <link rel="stylesheet" href="/css/foundation.css">
  <link rel="stylesheet" href="/css/app.css">
  

  <script src="/js/vendor/custom.modernizr.js"></script>

</head>
<body>
	<header>
	<div class="row">
		<div class="large-6 columns ">
			<h2>Your Bookmarks</h2>

		</div>	
	
		<div class="large-4 columns">
					<nav class="breadcrumbs">
					  <a class="back" href="<?php echo $this->createUrl('index/index') ?>">Home</a>
					  <a class="current" href="#">Edit</a>
					</nav>
		</div>
	</div>	
	</header>
	
	<div class="page-heading">
		<div class="row">
			<div class="large-4 columns">
			<form class="custom spacing" action="" method="post">
				<h4>Edit</h4>
				<label>Bookmark Title</label>
				<input type="text" name="bk_title" value="<?php echo $bookmark->title ?>" />
				<label>Bookmark URL</label>
				<input type="text" name="bk_url" value="<?php echo $bookmark->url ?>" />
				<label>List</label>
				<select id="customDropdown" name="bk_list">
                	<option value="0">Select list</option>
                    <?php foreach($lists as $list): ?>
					<option <?php if($list->id == $bookmark->list_id): ?>selected="selected" <?php endif ?>value="<?php echo $list->id ?>"><?php echo $list->name ?></option>
					<?php endforeach ?>
				</select>

				<label>Note</label>
				<textarea placeholder="#hashtags can also be included here" name="bk_note"><?php echo $bookmark->note ?></textarea>


				<input type="submit" class="button secondary" value="save" />
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
  <script src="/js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>