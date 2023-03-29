$(document).ready(()=> {
    $("#one").click(() => {
        $("#inpone").click();
        $("#inpone").change(() => {
            document.getElementById("imgone").src = window.URL.createObjectURL(event.target.files[0]);
        })
    })
    $("#two").click(() => {
        $("#inptwo").click();
        $("#inptwo").change(() => {
            document.getElementById("imgtwo").src = window.URL.createObjectURL(event.target.files[0]);
        })
    })
    $("#three").click(() => {
        $("#inpthree").click();
        $("#inpthree").change(() => {
            document.getElementById("imgthree").src = window.URL.createObjectURL(event.target.files[0]);
        })
    })
})