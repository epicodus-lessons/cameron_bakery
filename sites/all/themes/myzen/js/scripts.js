jQuery(document).ready(function($) {
  $('h1').hover(function(){
      $( this ).fadeOut( 500 );
      $( this ).fadeIn( 1000 );
  });
  $(".is-leaf.last").click(function(){
      alert("This is gonna be fun!");
  });
});
