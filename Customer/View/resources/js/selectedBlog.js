$(document).ready(function () {
    $(".likeIcon").click(function () {
        $(this).next().removeClass("d-none");
        $(this).addClass("d-none");
    })
    $(".unLikeIcon").click(function () {
        $(this).prev().removeClass("d-none");
        $(this).addClass("d-none");
    })
})