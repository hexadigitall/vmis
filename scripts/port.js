// Select DOM items

const menuBtn = document.querySelector(".menu-btn");
const menuSide = document.querySelector("#sideMenu");
const sideMenuContent = document.querySelector(".sideMenu-content");
const sideNavitems = document.querySelectorAll(".nav-item");

//set initial State of Menu
let showMenu = false;

menuBtn.addEventListener("click", toggleMenu);

function toggleMenu() {
  if (!showMenu) {
    menuBtn.classList.add("close");
    menuSide.classList.add("show");
    sideMenuContent.classList.add("show");
    sideNavitems.forEach((item) => item.classList.add("show"));

    //set Menu State
    showMenu = true;
  } else {
    menuBtn.classList.remove("close");
    menuSide.classList.remove("show");
    sideMenuContent.classList.remove("show");
    sideNavitems.forEach((item) => item.classList.remove("show"));

    //set Menu State
    showMenu = false;
  }
}
