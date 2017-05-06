
<div id="page-wrapper">
    <header>
        <?php print render($page['header']); ?>
        <div id="logo">
            <!--logo-->
            <?php if ($logo): ?>
            <a href="<?php print $base_path; ?>" title="<?php print t('Click to return to the Homepage'); ?>"/>
            <img src="<?php print $logo; ?>" alt="<?php print t('Home');?>"/></a>
        <?php endif; ?>
        </div>
        <nav>
            <div id="main-menu">
            <?php print theme('links_system_main_menu', array('links' => $main_menu, 'attributes' => array('class'
            => array('links','menu','inline','clearfix')))); ?>
            </div>
            <div id="navigation">
                <?php print render($page['navigation']); ?>
            </div>
        </nav>
    </header>
    <div id="sidebar_first">
        <?php print render($page['sidebar_first']); ?>
    </div>
    <div id="sidebar_second">
        <?php print render($page['sidebar_second']); ?>
    </div>
    <article>
        <!-- title -->
        <?php print render($title_prefix); ?>
            <?php if ($title): ?>
            <h1>
            <?php print $title; ?>
            </h1>
            <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print render($page['content']); ?>
        <!-- tabs -->
        <?php if ($tabs): ?>
        <?php print render($tabs); ?>
        Custom Theme by Jason Brown
        <?php endif; ?>
        <!-- messages -->
        <?php print $messages; ?>
    </article>
    <footer><?php print render($page['footer']); ?></footer>
    <?php print render($page['page_bottom']); ?>
</div>
