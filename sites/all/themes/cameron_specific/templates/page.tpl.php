<div id="header" class="custom-header">

  <?php if ($logo): ?>
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
  <?php endif; ?>

  <?php if ($site_name || $site_slogan): ?>
    <div class="header__name-and-slogan">
      <?php if ($site_name): ?>
        <h1 class="header__site-name">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
        </h1>
      <?php endif; ?>

      <?php if ($site_slogan): ?>
        <div class="header__site-slogan"><?php print $site_slogan; ?></div>
      <?php endif; ?>
    </div>
  <?php endif; ?>
  
  <?php print render($page['header']); ?>
</div>

  <a href="/" class="active">Home</a>
  <a href="/node/1">About</a>
  <a href="/node/2">Locations</a>
  <a href="/node/3">Contact</a>
  <a href="/node/4">Cookies</a>


  <?php print render($page['main_menu']); ?>
</div>


<div id="content" class="custom-content">

  <?php print render($page['content']); ?>
</div>

<div id="sidebar_first" class="custom-sidebar_first">

  <?php print render($page['sidebar_first']); ?>
</div>

<div id="sidebar_second" class="custom-sidebar_second">

  <?php print render($page['sidebar_second']); ?>
</div>


<div id="footer" class="custom-footer">

  <?php print render($page['footer']); ?>
</div>
