let updateVisitorEntry = document.getElementById("update_visitor_entry");
let attendedTimeoutForm = document.getElementById("attended_form");
let closeBtn = document.getElementById("closeBtn");
let alertCloseBtn = document.querySelector(".close");
let alertBox = document.getElementById("alert");

//close and open popup form//

updateVisitorEntry.addEventListener("click", function () {
  updateVisitorEntry.style.display = "none";
  attendedTimeoutForm.style.display = "block";
});

closeBtn.addEventListener("click", function () {
  attendedTimeoutForm.style.display = "none";
  updateVisitorEntry.style.display = "block";
});

//closing alert container //

alertCloseBtn.addEventListener("click", function () {
  alertBox.style.display = "none";
  alertCloseBtn.style.display = "none";
});

window.addEventListener("load", function () {
    alertBox.classList = "disappear";
  setTimeout(() => {
    alertBox.style.display = "none";
    alertCloseBtn.style.display = "none";
    
  }, 7000);
});
