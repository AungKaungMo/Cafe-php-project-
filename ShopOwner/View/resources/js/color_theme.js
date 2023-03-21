window.addEventListener("load", () => {
  let rootColor = [
    "backgroundPrimary",
    "mainColor",
    "secondMainColor",
    "backgroundTertiary",
    "textColorPrimary",
    "textColorSecondary",
  ];

  let root = document.querySelector(":root");
  for (let i = 0; i < rootColor.length; i++) {
    if (localStorage.getItem(rootColor[i]) != null) {
        root.style.setProperty(`--${rootColor[i]}`, localStorage.getItem(rootColor[i]));
    }
    if (localStorage.getItem("orgColor") == "active") {
      for (let i = 0; i < rootColor.length; i++) {
        localStorage.removeItem(rootColor[i]);
      }
    }
  }
});
