$(document).ready(function() {
    let val1, val2 = "";
    $("#psw").change(function() {
        val1 = $("#psw").val();
    })
    $("#confirmPsw").change(function() {
        val2 = $("#confirmPsw").val();
        if(val1 != val2){
            $("#confirmPsw").addClass("wrong");
        }else {
            $("#confirmPsw").removeClass("wrong");
        }
    })
   
})
