$(document).ready(function() {
    $(".rateStar").click(function() {
       $(this).clone().appendTo($(".starBox"));
    })
})
