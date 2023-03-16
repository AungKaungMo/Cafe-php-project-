$(document).ready(function(){
    $("#in").click(function(){
        $(".indoor").toggleClass('changein');
        $(".outdoor").change().toggleClass('changeout')
    })

     $("#out").click(function(){
        $(".outdoor").toggleClass('changeout')
        $(".indoor").change().toggleClass('changein')
    })
})