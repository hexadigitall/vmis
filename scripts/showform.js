//grabbing forms//

let opencafeForm = document.getElementById("opencafe_form");
let coworkForm = document.getElementById("cowork_form");
let lesseForm = document.getElementById("lesse_form");
let formTitle = document.getElementById("form_title");

//grabbing buttons for each form//

let btnOpencafe = document.getElementById("btn_opencafe");
let btnCowork = document.getElementById("btn_cowork");
let btnLesse = document.getElementById("btn_lesse");

// stating functions//
const displayOpencafe = () => {
  formTitle.textContent = "Open Cafe Form";
  coworkForm.style.display = "none";
  lesseForm.style.display = "none";
  opencafeForm.style.display = "block";
  btnCowork.classList.remove("active");
  btnOpencafe.classList = "active";
  btnLesse.classList.remove("active");
};

const displayCowork = () => {
  formTitle.textContent = "Co-work Form";
  coworkForm.style.display = "block";
  lesseForm.style.display = "none";
  opencafeForm.style.display = "none";
  btnCowork.classList = "active";
  btnOpencafe.classList.remove("active");
  btnLesse.classList.remove("active");
};

const displayLesse = () => {
  formTitle.textContent = "Lesse Form";
  coworkForm.style.display = "none";
  lesseForm.style.display = "block";
  opencafeForm.style.display = "none";
  btnLesse.classList = "active";
  btnOpencafe.classList.remove("active");
  btnCowork.classList.remove("active");
};

// apply click event //

btnOpencafe.addEventListener("click", displayOpencafe);
btnCowork.addEventListener("click", displayCowork);
btnLesse.addEventListener("click", displayLesse);

window.addEventListener("load", function () {
  coworkForm.style.display = "none";
  lesseForm.style.display = "none";
  opencafeForm.style.display = "block";
});
