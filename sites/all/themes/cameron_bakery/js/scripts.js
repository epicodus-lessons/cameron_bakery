jQuery(document).ready(function($) {
  setInterval(function() {eyesore()}, 2000);

  function eyesore() {
    var bgFile = "url(/cameron_bakery/sites/all/themes/cameron_bakery/img/bakedgoods" + randomize(1,3) + ".png)";
    $("#header").css("background", bgFile);
    $("#header").css("background-size", "cover");
  }

  function randomize(min, max) {
    return Math.ceil((max + 1 - min) * Math.random());
  }
});
