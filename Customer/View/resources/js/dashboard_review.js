$(document).ready(function(){
  $("#s1").click(function(){
  $(".ratestar").css("color",'var(--textColorPrimary)');
  $("#s1").css("color",'var(--mainColor)');
  });
  $("#s2").click(function(){
    $(".ratestar").css("color",'var(--textColorPrimary)');
$("#s1,#s2").css("color",'var(--mainColor)');
  })
  $("#s3").click(function(){
    $(".ratestar").css("color",'var(--textColorPrimary)');
$("#s1,#s2,#s3").css("color",'var(--mainColor)');
  })
  $("#s4").click(function(){
    $(".ratestar").css("color",'var(--textColorPrimary)');
$("#s1,#s2,#s3,#s4").css("color",'var(--mainColor)');
  })
  $("#s5").click(function(){
    $(".ratestar").css("color",'var(--textColorPrimary)');
$(".ratestar").css("color",'var(--mainColor)');
  })

})