
<div id="page-wrapper">
    <header>
        <?php print render($page['header']); ?>


        <div id="logo-wrapper">
            <ul>
                <li><div id="logo">
                    <!--logo-->
                    <?php if ($logo): ?>
                    <a href="<?php print $base_path; ?>" title="<?php print t('Click to return to the Homepage'); ?>"/>
                        <img src="<?php print $logo; ?>" alt="<?php print t('Home');?>"/></a>
                    <?php endif; ?>
                </div></li>
                <li><h2>Cameron's Bakery</h2></li>
                <li><h3>Cookies Galore</h3></li>
            </ul>

        </div>
        <nav>

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

        <?php print render($page['content']); ?>

        <!-- messages -->
        <?php print $messages; ?>
    </article>
    <?php print render($page['page_bottom']); ?>
    <footer><?php print render($page['footer']); ?></footer>
</div>
