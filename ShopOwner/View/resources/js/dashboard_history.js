$(document).ready(function() {
    $(".deleteIcon").click(function() {
       console.log($(this).parent().parent().parent().remove()) ;
    })
})