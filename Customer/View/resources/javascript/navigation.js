$(document).ready(function () {
    $("#responsiveSideBarIcon").click(function() {
        $(".sideBar").addClass('sideBarChange');
    });
    $("#closeSideBar").click(function() {
        $(".sideBar").removeClass('sideBarChange');
    });
    $(".userdownIcon").click(function() {
        $(".signBox").toggleClass("d-none");
    })
})