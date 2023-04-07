$(document).ready(() => {
  let count = 0;
  $(".clickPsw").click(() => {
    if (count == 4) {
      return;
    }
    document.getElementsByClassName("circles")[count].style.backgroundColor =
      "var(--textColorSecondary)";
    count++;
    // console.log(count);
  });
  $(".backspace").click(() => {
    if (count == 0) {
      return;
    }
    count--;
    document.getElementsByClassName("circles")[count].style.backgroundColor =
      "var(--backgroundPrimary)";

    // console.log(count);
  });
});
