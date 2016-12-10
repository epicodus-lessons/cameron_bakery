jQuery(document).ready(function($) {
  $('#block-views-bread-view-block').click(function(){
    alert('Mention this sale at checkout to receive discount.');
  });
  $('#edit-message').click(function(){
    alert('Please provide as much detail as possible in your message. We respond typically within 24 hours.');
  });
  $('#edit-mail').click(function(){
    $('#edit-mail').empty(); 
  });
});
