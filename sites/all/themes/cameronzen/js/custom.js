// function getRandomColor() {
//   var letters = '0123456789ABCDEF'.split('');
//   var color = '#';
//   for (var i = 0; i < 6; i++ ) {
//     color += letters[Math.round(Math.random() * 15)];
//   }
//   return color;
// }
//
// function setBackgroundColor(){
//   document.body.style.backgroundColor = getRandomColor();
// }

$(document).ready(function(){
  $("a").hover(function(){
    $(this).css('background-color', 'red');
  });
});
