$(document).ready(function() {
    $(".blank_heart").click(function() {
        $(this).addClass("d-none");
        $(this).next().removeClass("d-none");
    })

    $(".full_heart").click(function() {
        $(this).addClass("d-none");
        $(this).prev().removeClass("d-none");
    })
})