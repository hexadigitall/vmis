// Defining a function to display error message
function printError(elemId, hintMsg) {
  document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form
function validateForm() {
  // Retrieving the values of form elements
  let fname = document.forms["regForm"]["firstName"];
  let lname = document.forms["regForm"]["lastName"];
  let oname = document.forms["regForm"]["otherName"];
  let gender = document.form.regForm.value;
  let age = document.forms["regForm"]["age"];
  let phone = document.forms["regForm"]["phoneNo"];
  let emailId = document.forms["regForm"]["EMail"];
  let residence = document.forms["regForm"]["residence"];
  let whatCategory = document.forms["regForm"]["category"];
  let bizName = document.forms["regForm"]["biz_Name"];
  let bizDesignation = document.forms["regForm"]["biz_Designation"];
  let programCategory = document.forms["regForm"]["programType"];
  let courseType = document.forms["regForm"]["course"];
  let officeDesignation = document.forms["regForm"]["designation"];

  // Defining error variables with a default value
  let fnameErr = (lnameErr = genderErr = ageErr = phoneNoErr = emailErr = residenceErr = whatCategoryErr = bizNameErr = bizDesignationErr = programCategoryErr = courseTypeErr = designationErr = true);

  // Validate first and last names
  if (fname.value == "") {
    printError("fnameErr", "Please enter your first name");
  } else {
    var regex = /^[a-zA-Z\s]+$/;
    if (regex.test(fname) === false) {
      printError("fnameErr", "Please enter a valid name");
    } else {
      printError("fnameErr", "");
      fnameErr = false;
    }
  }
  if (lname.value == "") {
    printError("lnameErr", "Please enter your last name");
  } else {
    var regex = /^[a-zA-Z\s]+$/;
    if (regex.test(lname) === false) {
      printError("lnameErr", "Please enter a valid name");
    } else {
      printError("lnameErr", "");
      lnameErr = false;
    }
  }

  // Radio option for gender validation
  let genders = document.getElementsByName("gender");
  if (genders[0].checked == true) {
    text = "your gender is male";
  } else if (genders[1].checked == true) {
    text = "your gender is female";
  } else if (genders[2].checked == true) {
    text = "your gender is others";
  } else {
    let msg = '<span style="color:red;"> You must select your gender!</span>';
    document.getElementById("genderErr").innerHTML = msg;
    return false;
  }
  function reset_msg() {
    document.getElementById("genderErr").innerHTML = "";
  }

  // Validate gender
  if (gender == "") {
    printError("genderErr", "Please select your gender");
  } else {
    printError("genderErr", "");
    genderErr = false;
  }

  // Validate age
  if (age.value == "") {
    printError("ageErr", "Please enter your age.");
  } else {
    printError("ageErr", "");
    ageErr = false;
  }

  // Validate phoneNo
  if (phone.value == "") {
    printError("phoneNoErr", "Please enter your mobile number");
  } else {
    var regex = /^[1-9]\d{9}$/;
    if (regex.test(phone) === false) {
      printError("phoneNoErr", "Please enter a valid 10 digit mobile number");
    } else {
      printError("phoneNoErr", "");
      phoneNoErr = false;
    }
  }

  // Validate email
  if (emailId.value == "") {
    printError("emailErr", "Please enter your email address");
  } else {
    // Regular expression for basic email validation
    var regex = /^\S+@\S+\.\S+$/;
    if (regex.test(emailId === false) {
      printError("emailErr", "Please enter a valid email address");
    }
    // atpos = emailID.indexOf("@");
    // dotpos = emailID.lastIndexOf(".");
    // if (atpos < 1 || ( dotpos - atpos < 2 )) {
    //     printError("emailErr", "Please enter a valid email address");
    // }
    else {
      printError("emailErr", "");
      emailErr = false;
    }
  }

  // Validate address
  if (residence.value == "") {
    printError("residenceErr", "Please enter your address!");
  } else {
    printError("residenceErr", "");
    residenceErr = false;
  }

  // Validate category selection
  if (whatCategory == "Choose option...") {
    printError("whatCategoryErr", "Please select your category!");
  } else {
    printError("whatCategoryErr", "");
    whatCategoryErr = false;
  }

  // Validate business name
  if (bizName == "") {
    printError("bizNameErr", "Please input your Business Name");
  } else {
    printError("bizNameErr", "");
    bizNameErr = false;
  }

  // Validate business designation
  if (bizDesignation == "") {
    printError("bizDesignationErr", "Please input your Business Name");
  } else {
    printError("bizDesignationErr", "");
    bizDesignationErr = false;
  }

  // Validate program category
  if (programCategory == "Select program type...") {
    printError("programCategoryErr", "Please select your program type!");
  } else {
    printError("programCategoryErr", "");
    programCategoryErr = false;
  }

  // Validate course type
  if (courseType == "Select course type...") {
    printError("courseTypeErr", "Please select your program type!");
  } else {
    printError("courseTypeErr", "");
    courseTypeErr = false;
  }

  // Validate codegaminator junior course type
  if (courseType == "Select course type...") {
    printError("courseTypeErr", "Please select your program type!");
  } else {
    printError("courseTypeErr", "");
    courseTypeErr = false;
  }

  // validate office designation for employee
  if (officeDesignation.value == "") {
    printError("designationErr", "Please enter your office designation.");
  } else {
    printError("designationErr", "");
    designationErr = false;
  }

  return true;
}

// Prevent the form from being submitted if there are any errors
if (
  (fnameErr ||
    lnameErr ||
    emailErr ||
    phoneNoErr ||
    designationErr ||
    genderErr ||
    whatCategoryErr ||
    residenceErr) == true
) {
  return false;
} else {
  // Creating a string from input data for preview
  var dataPreview =
    "You've entered the following details: \n" +
    "Category: " +
    whatCategory +
    "\n" +
    "Full Name: " +
    fname +
    lname +
    "\n" +
    "Email Address: " +
    email +
    "\n" +
    "Mobile Number: " +
    phone +
    "\n" +
    "Gender: " +
    gender +
    "\n" +
    "Office designation: " +
    designation +
    "\n" +
    "Address: " +
    residence +
    "\n" +
    "Business name: " +
    bizName +
    "\n" +
    "Business Designation: " +
    bizDesignation +
    "\n" +
    "program type: " +
    programCategory +
    "\n" +
    "Course type: " +
    courseType +
    "\n";

  // Display input data in a dialog box before submitting the form
  alert(dataPreview);
}
