let rootColor = [
    "backgroundPrimary",
    "mainColor",
    "secondMainColor",
    "backgroundTertiary",
    "textColorPrimary",
    "textColorSecondary"
  ];
  let root = document.querySelector(":root");
$(document).ready(function () {
  $(".colorBox input").change(function () {
    localStorage.setItem($(this).attr("id"), $(this).val());
    localStorage.setItem('orgColor',"unactive");
  });
  $("#saveColor").click(function () {
    gettingColor();
  });
  $("#orgColor").click(function () {
    localStorage.setItem('orgColor',"active");
    gettingOriginalColor();
  })
});
window.addEventListener("load", () => {
  gettingColor();
});
function gettingOriginalColor() {
   if(localStorage.getItem('orgColor') == "active"){
        for(let i=0; i< rootColor.length; i++){
            localStorage.removeItem(rootColor[i]);
        }
    }
    location.reload();
}
function gettingColor() {
 
  for (let i = 0; i < rootColor.length; i++) {
    if (localStorage.getItem(rootColor[i]) != null) {
        $(`#${rootColor[i]}`).val(localStorage.getItem(rootColor[i]));
        root.style.setProperty(`--${rootColor[i]}`,localStorage.getItem(rootColor[i]));
    }
  }
}
