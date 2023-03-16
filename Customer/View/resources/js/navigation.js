$(document).ready(function () {
    $("#responsiveSideBarIcon").click(function() {
        $(".sideBar").addClass('sideBarChange');
    });
    $("#closeSideBar").click(function() {
        $(".sideBar").removeClass('sideBarChange');
    });
    $(".userdownIcon").click(function() {
        $(".signBox").toggleClass("d-none");
    });
    $(".likeIcon").click(function () {
        $(this).next().removeClass("d-none");
        $(this).addClass("d-none");
    })
    $(".unLikeIcon").click(function () {
        $(this).prev().removeClass("d-none");
        $(this).addClass("d-none");
    })
})
