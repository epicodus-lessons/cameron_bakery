<nav>
</nav>
<div class="container">
    <div  id="header" class="custom-class">
        <?php print render($page['header']); ?>
    </div>

    <div class="row">
        <div class="col l2"></div>
        <div class="col l8">
            <div  id="content" class="custom-class">
                <?php print render($page['content']); ?>
            </div>
        </div>
        <div class="col l2"></div>
    </div>
    <div class="row">
        <div class="col l2"><div  id="sidebar_first" class="custom-class">
            <?php print render($page['sidebar_first']); ?>
        </div></div>
        <div class="col l8"></div>
        <div class="col l2"><div  id="sidebar_second" class="custom-class">
            <?php print render($page['sidebar_second']); ?>
        </div></div>
    </div>

    <div  id="navigation" class="custom-class">
        <?php print render($page['navigation']); ?>
    </div>



</div>
