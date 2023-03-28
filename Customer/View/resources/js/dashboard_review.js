$(document).ready(function () {
  var star=5;
  $(".rateStar").click(function () {
    $(this).clone().appendTo($(".starBox"));
  });
});
