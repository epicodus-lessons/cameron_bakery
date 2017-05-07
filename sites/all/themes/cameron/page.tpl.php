<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>


<div class="header-wrap">
    <div class="header">
        <h1>Welcome to Cameron's Bakery</h1>
        <!-- <?php print render($page['header_content']); ?> -->
    </div>
    <div class="nav-wrap">
        <div class="nav">
            <?php print theme('links', ['links' => $main_menu]); ?>
        </div>
    </div>
</div>

<div class="content-wrap">
    <div class="content">
        <div class="main-content">
            <?php print render($page['content']); ?>
        </div>
        <div class="sidebar-content">
            <?php print render($page['sidebar']); ?>
        </div>
    </div>
</div>
