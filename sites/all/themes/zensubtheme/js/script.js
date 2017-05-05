jQuery(document).ready(function($) {
  $('.header').hover(function(){
      $(this).addClass('highlight');},
    function(){
      $(this).removeClass('highlight');
    }
  );
});
