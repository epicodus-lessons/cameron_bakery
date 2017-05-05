jQuery(document).ready(function($) {
  $('.node-teaser').hover(function(){
      $(this).addClass('bright');},
    function(){
      $(this).removeClass('bright');
    }
  );    
});
