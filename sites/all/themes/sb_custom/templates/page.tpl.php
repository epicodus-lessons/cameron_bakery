<div id="wrapper">

  <div id="header">
    <a id="site_name_link" href="<?php print $front_page;?>">
      <img src="/<?php print $directory;?>/logo.jpg" alt="<?php print $site_name;?>" height="100" width="100" />
      <h1 id="site_name"><?php print $site_name;?></h1>
    </a>
    <i><h4><?php print $site_slogan;?></h4></i>
    <?php if ($main_menu): ?>
      <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline')))); ?>
    <?php endif; ?>
  </div>

  <div id="content">
    <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php print render($messages); ?>
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

    <?php print render($page['content']); ?>
  </div>

  <?php if ($page['sidebar_first']): ?>
    <div id="sidebar_first">
      <?php print render($page['sidebar_first']); ?>
    </div>
  <?php endif; ?>

  <div id="footer">
    <?php if ($page['footer']): ?>
      <?php print render($page['footer']); ?>
      <?php print t("Custom Theme by Stephen Burden"); ?>
    <?php endif; ?>
  </div>

</div>
