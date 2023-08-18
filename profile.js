const closeArrow = document.querySelector("#flechita");
const navBar = document.querySelector("#navBar");
const darkModeBtn = document.querySelector("#dark-mode-btn");
const principalContainer = document.querySelector(".container-principal");


darkModeBtn.addEventListener("click", () => {
  principalContainer.classList.toggle("dark");
});

closeArrow.addEventListener("click", () => {
  navBar.classList.toggle("close");
});

closeArrow.addEventListener("click", () => {
    if (closeArrow.textContent === "arrow_drop_up") {
      closeArrow.textContent = "arrow_drop_down";
    } else {
      closeArrow.textContent = "arrow_drop_up";
    }
  });