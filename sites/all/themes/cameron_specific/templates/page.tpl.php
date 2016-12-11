<div id="header" class="custom-header">

  <?php print render($page['header']); ?>
</div>

<div id="main_menu" class="custom-menu">
  <?php print theme('links__system_main_menu', array(
    'links' => $main_menu,
    'attributes' => array(
      'id' => 'main-menu-links',
      'class' => array('links', 'clearfix'),
    ),
    'heading' => array(
      'text' => t(''),
      'level' => 'h2',
      'class' => array('element-invisible'),
    ),
  )); ?>

  <a href="/" class="active">Home</a>
  <a href="/node/1">About</a>
  <a href="/node/2">Locations</a>
  <a href="/node/3">Contact</a>

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
