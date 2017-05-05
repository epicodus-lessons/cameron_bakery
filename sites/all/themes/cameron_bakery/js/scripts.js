jQuery(document).ready(function($) {
  setInterval(function() {eyesore()}, 2000);
  console.log(window.location.href);

  function eyesore() {
    var bgFile = "url(/sites/all/themes/cameron_bakery/img/bakedgoods" + randomize(1,3) + ".png)";
    $("#baked-banner").css("background", bgFile);
    $("#baked-banner").css("background-size", "cover");
  }

  function randomize(min, max) {
    return Math.ceil((max + 1 - min) * Math.random());
  }
});
