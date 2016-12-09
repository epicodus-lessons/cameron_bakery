jQuery(document).ready(function($) {
  var colorScale = "0123456789ABCDEF";
  setInterval(function() {eyesore()}, 800);

  function eyesore() {
    var colorPatch = "#" + randomize(0, 16)  + randomize(0, 16)  + randomize(0, 16);
    $("#header").css("background-color", colorPatch);
  }

  function randomize(min, max) {
    var idx = Math.round((max - min) * Math.random());
    return colorScale[idx];
  }
});
