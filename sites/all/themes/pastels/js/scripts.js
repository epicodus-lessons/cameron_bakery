jQuery(document).ready(function($) {
  $('#green_cupcake').click(function(){
      $("html").css("background-color", "#64D182");
      $("html").css("background", "linear-gradient(#64D182, #77DAAD)");
      $("#mainmenusection").css("background-color", "#77DA9E");
  });
  $('#blue_cupcake').click(function(){
      $("html").css("background-color", "#93BAEA");
      $("html").css("background", "linear-gradient(#93BAEA, #A3E6F0)");
      $("#mainmenusection").css("background-color", "#B1EBF4");
  });
  $('#purple_cupcake').click(function(){
      $("html").css("background-color", "#D6C1F9");
      $("html").css("background", "linear-gradient(#D6C1F9, #A798D8, #E38EEB)");
      $("#mainmenusection").css("background-color", "#CFB7F9");
  });
});
