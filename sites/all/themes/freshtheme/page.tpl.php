
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<nav>
    <div id="navbars" class="nav-wrapper">
      <a href="#" class="brand-logo right">Bakery</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="/">Home</a></li>
      </ul>
    </div>
  </nav>

<div class="container">
<div class="row">
<div class="col m2"></div>
    <div class="col m8" id="love" class="custom-class">
        <?php print render($page['love']); ?>
    </div>
<div class="col m2"></div>

</div>
<div class="row">
<div class="col m2"></div>
    <div class="col m8" id="content" class="custom-class">
        <?php print render($page['content']); ?>
    </div>
<div class="col m2"></div>

</div>
<div id="help" class="custom-class">
    <?php print render($page['help']); ?>
</div>

<div id="page_bottom" class="custom-class">
    <?php print render($page['page_bottom']); ?>
</div>
<div id="page_top" class="custom-class">
    <?php print render($page['page_top']); ?>
</div>
<div id="deals" class="custom-class">
    <?php print render($page['deals']); ?>
</div>
