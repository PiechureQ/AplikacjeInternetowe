const switchButton = document.querySelector("#switch-menu");
const menuItems = document.querySelector("nav>ul");
let menuIsOpen = false;

switchButton.addEventListener("click", () => {
  menuIsOpen = !menuIsOpen;
  menuIsOpen
    ? (switchButton.innerHTML = "Ukryj Zakładki")
    : (switchButton.innerHTML = "Pokaż zakładki");
  menuIsOpen
    ? (menuItems.style.display = "flex")
    : (menuItems.style.display = "none");
});
