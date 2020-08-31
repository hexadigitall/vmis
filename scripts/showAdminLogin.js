const adminBtn = document.querySelector(".admin");
const closeBtn = document.querySelector(".menu-btn");
const adminForm = document.querySelector("#adminloginForm");

//set initial State of close button
let showLogin = false;
adminBtn.addEventListener("click", openAndcloseLogin);
closeBtn.addEventListener("click", openAndcloseLogin);

function openAndcloseLogin() {
  if (adminBtn == "") {
    printError("genderErr", "Please select your gender");
  } else if (closeBtn == "") {
    printError("genderErr", "");
    genderErr = false;
  } else if (adminForm == "login-success") {
  }
}

function closeLoginForm() {
  if (!showLogin) {
    menuBtn.classList.add("close");
    menuSide.classList.add("show");
    sideMenuContent.classList.add("show");
    sideNavitems.forEach((item) => item.classList.add("show"));

    //set Menu State
    showLogin = true;
  } else {
    menuBtn.classList.remove("close");
    menuSide.classList.remove("show");
    sideMenuContent.classList.remove("show");
    sideNavitems.forEach((item) => item.classList.remove("show"));

    //set Menu State
    showLogin = false;
  }
}
