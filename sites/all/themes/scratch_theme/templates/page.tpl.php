<div id="header">
    <a href="<?php print $front_page;?>">
      <img src="/<?php print $directory;?>/images/bakery-logo.jpg" alt="<?php print $site_name;?>" height="300" width="300" />
    </a>
</div>

<div id="wrapper">
    <div id="navigation_bar">
        <?php if ($main_menu): ?>
            <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu'))); ?>
        <?php endif; ?>
    </div>

    <?php if ($page['left_sidebar']): ?>
        <div id="sidebar">
            <?php print render($page['left_sidebar']); ?>
        </div>
    <?php endif; ?>

    <?php if ($page['sale']): ?>
        <div id="sale">
            <?php print render($page['sale']); ?>
        </div>
    <?php endif; ?>

    <div id="content">
        <?php print render($page['content']); ?>
    </div>

    <?php if ($page['right_sidebar']): ?>
        <div id="sidebar">
            <?php print render($page['right_sidebar']); ?>
        </div>
    <?php endif; ?>
</div>

<div id="footer">
    <?php if ($page['footer']): ?>
        <?php print render($page['footer']); ?>
    <?php endif; ?>
</div>
