<h3>Add-ons For <?php echo Yii::app()->name ?></h3>
<p><?php echo Yii::app()->name ?> is designed to work without needing to install any add-ons.  But you can still install an extension or use our bookmarklet to further speed up the saving process. </p>
<h4>Chrome Extension</h4>
<p>Visit the Chrome Web Store to download the free extension.  This will add a small icon next to your address bar which will save bookmarks with one click.</p>
<a class="small button disabled">Install Extension</a>
<h4>Bookmarklet</h4>
<p>Drag the following button into your bookmark bar, to save links via a bookmarklet</p>
<a href="javascript:(function()%7B(function()%7Bjavascript%3A(function()%7Bif(window.myBookmarklet!%3D%3Dundefined)%7BmyBookmarklet()%3B%7Delse%7Bdocument.body.appendChild(document.createElement('script')).src%3D'<?php echo $this->createAbsoluteUrl('static/bookmarklet') ?>'%3B%7D%7D)()%3B%7D)()%7D)()" class="small button">Saved Bookmarklet</a>