jQuery(document).ready(function($) {
  $('#green_cupcake').click(function(){
      $("html").css("background-color", "#64D182");
      $("html").css("background", "linear-gradient(#64D182, #77DAAD)");
      $("#mainmenusection").css("background-color", "#F7D496");
  });
  $('#blue_cupcake').click(function(){
      $("html").css("background-color", "#76C4F0");
      $("html").css("background", "linear-gradient(#76C4F0, #81EBF8)");
      $("#mainmenusection").css("background-color", "#F7A396");
  });
  $('#purple_cupcake').click(function(){
      $("html").css("background-color", "#D6C1F9");
      $("html").css("background", "linear-gradient(#D6C1F9, #A798D8, #E38EEB)");
      $("#mainmenusection").css("background-color", "#CFB7F9");
  });
});
