jQuery(document).ready(function($) {
  $('#main-wrapper div').mouseover(function(){
    $(this).addClass('highlight big-type');
  });
  $('#navigation div').mouseover(function(){
    $(this).addClass('highlight big-type');
  });
  $('div').mouseout(function(){
     $(this).removeClass('highlight big-type');
  });
});
