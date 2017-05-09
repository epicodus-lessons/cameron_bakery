<div id="root">

<div class="banner-wrap" role="banner">
	<h1>
		<?php print render($page['site-name']); ?>
	</h1>
</div>

	<div class="header-wrap">
    	<div class="header">
    	</div>
	</div>
  <div class="nav-wrap">
    <div class="nav">
      <?php print render($page['nav']); ?>
    </div>
  </div>

	<div class="side-bar-first-wrap">
    	<div class="side-bar-first">
				<?php print render($page['header']); ?>
				<?php print render($page['title']); ?>
        	<?php print render($page['sidebar_first']); ?>
    	</div>
	</div>

	</div>
	<div class="content-wrap">
    	<div class="content">
        	<?php print render($page['content']); ?>
    	</div>
	</div>

	<div class="footer-wrap">
    	<div class="footer">
        	<?php print render($page['footer']); ?>
    	</div>
	</div>

</div>
<!-- root -->
