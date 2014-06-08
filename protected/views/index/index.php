<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title><?php echo Yii::app()->name ?></title>
  <link rel="stylesheet" href="/css/foundation.css">
  <link rel="stylesheet" href="/css/app.css">
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
 <!-- iPhone -->
  <link href="/img/apple-touch-icon-57x57.png"
        sizes="57x57"
        rel="apple-touch-icon">
  <link href="/img/apple-touch-startup-image-320x460.png" media="(device-width: 320px) and(device-height: 480px) and(-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">
  <!-- iPhone(Retina) -->
  <link href="/img/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
  <link href="/img/apple-touch-startup-image-640x920.png" media="(device-width: 320px) and(device-height: 480px) and(-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
  <!-- iPhone 5 -->
  <link href="/img/apple-touch-startup-image-640x1096.png" media="(device-width: 320px) and(device-height: 568px) and(-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
  <!-- iPad -->
  <link href="/img/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
  <link href="/img/apple-touch-startup-image-768x1004.png" media="(device-width: 768px) and(device-height: 1024px) and(orientation: portrait) and(-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">
  <link href="/img/apple-touch-startup-image-748x1024.png" media="(device-width: 768px) and(device-height: 1024px) and(orientation: landscape) and(-webkit-device-pixel-ratio: 1)" rel="apple-touch-startup-image">
  <!-- iPad(Retina) -->
  <link href="/img/apple-touch-icon-144x144.png" sizes="144x144" rel="apple-touch-icon">
  <link href="/img/apple-touch-startup-image-1536x2008.png" media="(device-width: 768px) and(device-height: 1024px) and(orientation: portrait) and(-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
  <link href="/img/apple-touch-startup-image-1496x2048.png" media="(device-width: 768px) and(device-height: 1024px) and(orientation: landscape) and(-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
  <script src="/js/vendor/custom.modernizr.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>	
  <script type="text/javascript">
  $(document).ready(function(){
	$('#customDropdown').change(function() {
		// set the window's location property to the value of the option the user has selected
		var selectedList = $(this).val();
		var selectedList = '?listl=' + selectedList;
		window.location.href = selectedList ;
	});
  });
  </script>
</head>
<body>
	<div class="page-heading">
	<div class="row">
		<div class="large-6 columns ">
			<a href="<?php echo $this->createUrl('index/index') ?>"><h2>Your Bookmarks</h2></a>
		</div>	
		<div class="large-3 columns">
			<form class="custom" onsubmit='return false;'>
			<input type="text" placeholder="search" id="search" value="" />
			</form>
		</div>	
		<div class="large-3 columns">
			<form class="custom">
				<select id='customDropdown' name='customDropdown'>
					<option <?php if(!$currentList): ?>selected='true'<?php endif ?> value='0'>All</option>
					<?php foreach($lists as $list): ?>
					<option <?php if($currentList && $currentList->id == $list->id): ?>selected='true'<?php endif ?> value='<?php echo $list->id ?>'><?php echo $list->name ?></option>
					<?php endforeach ?>
				</select>
			</form>
		</div>
	</div>	
	</div>
	<div class="week-heading" >
		<div class="row">
			<div class="large-12 columns">
				<?php if($currentList): ?>
				<h4><?php echo $currentList->name ?></h4>
				<?php endif ?>
				<?php if(count($bookmarks)): ?>
				<?php foreach ($bookmarks as $bookmark): ?>
				<div class='bookmark'>
				<div class='mark'>
				<a class='linkage' style='background-image:url(https://www.google.com/s2/favicons?domain=<?php echo $bookmark->domain ?>);' href='<?php echo $bookmark->url ?>'><?php echo $bookmark->title ?></a>
				</div>
				<div class='little-links'>
				
				<a href='<?php echo $bookmark->list ? $this->createUrl('index/delete', ['bkid' => $bookmark->id, 'listl' => $bookmark->list->id]) : $this->createUrl('index/delete', ['bkid' => $bookmark->id]) ?>'><span class='tinytiny'>Delete</span></a><a href='<?php echo $this->createUrl('index/delete', ['bkid' => $bookmark->id]) ?>'><span class='tinytime'>Edit</span></a>  <span class='tinytime'>Added <?php echo Yii::app()->format->timeago($bookmark->addition_date) ?>.</span>
				</div>
				<?php endforeach ?>
				<?php else: ?>
				You dont have any bookmarks yet.
				<?php endif ?>
				</div>
			</div>
		</div>
	</div>
				
				

				<div class="row">

					<div class="large-6 columns">
						<div class="panel radius">
							<h5>Add a Bookmark</h5>
							<input type="text" placeholder="http://" name="bookmrk" id="tfBookmark" />
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
				<?php echo $this->renderPartial('//common/footer') ?>
  <script>
  document.write('<script src=' +
 ('__proto__' in {} ? '/js/vendor/zepto' : '/js/vendor/jquery') +
  '.js><\/script>')
  </script>
  <script src="/js/foundation.min.js"></script>
  <script>
    $(document).foundation();
    $(document).on('ready', function() {
        //var timer = null;
        var timeout = 2000;
        $('#search').on('keyup', function(e) {
            e.preventDefault();
            /*if(timer) {
                clearTimeout(timer);
            }*/
            if(e.which == 13) {
                if($('#search').val().length == 0) {
                    window.location.href = "/";
                } else {
                    window.location.href = "?q=" + $('#search').val();
                }
            }
            /*setTimeout(function() { 
                if($('#search').val().length == 0) {
                    window.location.href = "/";
                } else {
                    window.location.href = "?q=" + $('#search').val();
                }
            }, timeout);*/
        });
    });

$(document).ready(function()
{
	$('#tfBookmark').on('keyup',function(e)
	{
		if(e.keyCode==13)
		{
			window.location.href="<?php echo $this->createAbsoluteUrl('index/index') ?>" + $(this).val();
		}
	});
});

  </script>
</body>
</html>