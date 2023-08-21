const closeArrow = document.querySelector("#flechita");
const navBar = document.querySelector("#navBar");


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