jQuery(document).ready(function($) {
  $('#sidebar-first').mouseover(function(){
    $(this).css("background", "#FFE4E1");
  });
  $('#header').mouseover(function() {
    $('#sidebar-first').css("background", "#E0FFFF");
  });
  $('#content.column').mouseover(function() {
    $('#sidebar-first').css("background", "#F9FFF7");
  });
  $('#footer').mouseover(function() {
    $('#sidebar-first').css("background", "#F7F9FF");
  });
});
