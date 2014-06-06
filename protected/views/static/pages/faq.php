<h3>FAQ</h3>
<h4>How do I save a bookmark?</h4>
<p>In your browsers address bar, type "<?php echo Utils::getBaseUrl() ?>/" in front of the URL of the site you want to save.  Hit enter and you'll be redirected to <?php echo Utils::getBaseUrl() ?> where you can see the saved link</p>
<h4>Can I organize my links into lists?</h4>
<p>Yes.  For example, if you want to save a URL into a list called "books", type "books.<?php echo Utils::getBaseUrl() ?>/" in front of a URL in your browser's address bar.  If the list doesn't already exist it will automatically be created.</p>
<h4>Can I use a Bookmarklet or Extension instead of typing "<?php echo Utils::getBaseUrl() ?>/"?</h4>
<p>Yes.  You can download them <a href="<?php echo $this->createUrl('static/apps') ?>">here</a></p>
<h4>How much does <?php echo Yii::app()->name ?> cost to use?</h4>
<p><?php echo Yii::app()->name ?> is completely free to use.  However, if you love the software, you can support its development <a href="http://gum.co/saved">here</a></p>
<h4>Will <?php echo Yii::app()->name ?> work on iOS, Android, Windows Phone etc?</h4>
<p>Yes, all you need is a web browser.  You don't need to install any apps or extensions.</p>	
<h4>Is <?php echo Yii::app()->name ?> Social Bookmarking?</h4>
<p>No.  Twitter and Facebook are both excellent platforms for sharing links.  <?php echo Yii::app()->name ?> is for storing links.  There are no social features and all your bookmarks are private</p>
<h4>Why Can't I do x on <?php echo Yii::app()->name ?></h4>
<p>There are many features missing from <?php echo Yii::app()->name ?> that you can find on other bookmarking sites, such as tags, descriptions notes etc.  We wanted to make the simplest bookmarking app possible.</p>