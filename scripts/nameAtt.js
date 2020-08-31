let btnChange = document.getElementById("btnSubmit");
let opencafeBtn = document.getElementById("opencafeBtn");
let coworkBtn = document.getElementById("coworkingBtn");
let studentBtn = document.getElementById("studentBtn");
let lesseBtn = document.getElementById("lesseBtn");

// change name attribut value function //

const opencafeName = (btnChange) => {
  btnChange.setAttribute("name", "opencafe_submit");
};

const coworkName = (btnChange) => {
  btnChange.setAttribute("name", "cowork_submit");
};

const lesseName = (btnChange) => {
  btnChange.setAttribute("name", "lesse_submit");
};
const studentName = (btnChange) => {
  btnChange.setAttribute("name", "student_submit");
};

// changing name attribute on  click event //

opencafeBtn.addEventListener("click", opencafeName);
coworkBtn.addEventListener("click", coworkName);
studentBtn.addEventListener("click", studentName);
lesseBtn.addEventListener("click", lesseName);
