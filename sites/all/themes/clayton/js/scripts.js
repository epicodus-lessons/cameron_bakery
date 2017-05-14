jQuery(document).ready(function($) {
  $('html').addClass('slowspin');
  setInterval(function(){
    $('html').addClass('slowspin');
  }, 100000);
  $('html').click(function(e) {
    if ($(e.target).hasClass('spin')) {

      $(e.target).addClass('spinback');
    }
    else {
      $(e.target).addClass('spin');
    }
  });
  $('html').hover(function(e) {
    if ($(e.target).hasClass('spin')) {

      $(e.target).addClass('spinback');
    }
    else {
      $(e.target).addClass('spin');
    }
  });
});
