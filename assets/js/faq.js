$(".answer").slideUp(1);
$(".question").click(function(){
    $(this).next(".answer").slideToggle(1);
  });