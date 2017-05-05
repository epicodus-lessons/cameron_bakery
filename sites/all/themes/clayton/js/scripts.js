jQuery(document).ready(function($) {
  $('body').click(function(e) {
    if ($(e.target).hasClass('spin')) {

      $(e.target).addClass('spinback');
    }
    else {
      $(e.target).addClass('spin');
    }
  });
  $('body').hover(function(e) {
    if ($(e.target).hasClass('spin')) {

      $(e.target).addClass('spinback');
    }
    else {
      $(e.target).addClass('spin');
    }
  });
});
