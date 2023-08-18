const darkModeBtn = document.querySelector("#dark-mode-btn");
const principalContainer = document.querySelector(".principal-container");
const informationInicio = document.querySelector(".information-inicio");
const logo = document.querySelector(".logo");

darkModeBtn.addEventListener("click", () => {
  principalContainer.classList.toggle("dark");
  informationInicio.classList.toggle("inicio");
  darkModeBtn.classList.toggle("white")
});

darkModeBtn.addEventListener("click", () => {
    if (logo.src.endsWith("iconoLogo.jpg")) {
      logo.src = "./img/icondark.jpg";
    } else {
      logo.src = "./img/iconoLogo.jpg";
    }
  });

darkModeBtn.addEventListener("click", () => {
  if (icon.textContent === "nightlight") {
    icon.textContent = "sunny";
  } else {
    icon.textContent = "nightlight";
  }
});

