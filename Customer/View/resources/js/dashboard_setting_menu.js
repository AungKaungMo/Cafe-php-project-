$(document).ready(function () {
  $(".feature").click(function () {
    $(".mostPopular").addClass("d-none");
    $(".featureMenu").removeClass("d-none");
  });
  $(".popular").click(function () {
    $(".featureMenu").addClass("d-none");
    $(".mostPopular").removeClass("d-none");
  });
});
