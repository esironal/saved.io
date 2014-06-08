<?php if(Yii::app()->user->isGuest): ?>
<footer>
<?php endif ?>
	<div class="row">
		<div class="large-12 columns">
			<hr />
			<ul class="inline-list ">
				<li><a href="<?php echo $this->createUrl('static/page', ['view' => 'about']) ?>">About Us</a></li>
				<li><a href="<?php echo $this->createUrl('static/page', ['view' => 'api']) ?>">API</a></li>  
				<?php if(!Yii::app()->user->isGuest): ?>
				<li><a href="<?php echo $this->createUrl('index/key') ?>">Key</a></li>  
				<?php endif ?>
				<li><a href="<?php echo $this->createUrl('static/page', ['view' => 'apps']) ?>">Bookmarklet</a></li>
				<li><a href="<?php echo $this->createUrl('static/page', ['view' => 'faq']) ?>">FAQ</a></li>
				<?php if(!Yii::app()->user->isGuest): ?>
				<li><a href="<?php echo $this->createUrl('auth/logout') ?>">Logout</a></li>  
				<?php endif ?>
			</ul>
		</div>
	</div>
<?php if(Yii::app()->user->isGuest): ?>
</footer>
<?php endif ?>