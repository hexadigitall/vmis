<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>
    <link rel="stylesheet" href="dash.css" />
    <link rel="stylesheet" href="clientForm.css" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      media="screen"
      href="https://fontlibrary.org/face/glacial-indifference"
      type="text/css"
    />
    <script
      src="https://kit.fontawesome.com/2b9385dd69.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="mainDashboard">
      <!-- <div class="headerMenu">
        <h3>VisitLog Manager</h3>
      </div> -->
      <div class="Menu">
        <header>
          <div class="menu-btn">
            <div class="btn-line"></div>
            <div class="btn-line"></div>
            <div class="btn-line"></div>
          </div>
          <div class="header-area">
            <hi class="header-heading"
              >VISITORS MANAGEMENT INFORMATION SYSTEM</hi
            >
          </div>
          <!-- <div></div> -->
        </header>
        <nav id="sideMenu" style="height: 205vh;">
          <div class="sideMenu-content">
            <a href="adminportal.html" class="nav-btn">
              <b>Home</b></a>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn nav-btn" style="border-left:5px solid #92cf48;">Register</button>
                <div id="myDropdown" class="dropdown-content">
                  <a href="adminClient.html" class="active"><b>Client</b></a>
                  <a href="adminStaff.html"><b>Staff</b></a>
                </div>
            </div>
            <a href="dash.html" class="nav-btn">
              <b>Logout</b></a>
              
          </div>
        </nav>

        <div id="contentArea">
          <div class="heading">
            <h1>Admin portal</h1>
            <p>Welcome to RIV-TechCreek VMIS</p>
          </div>
          <hr />
          <!-- ADMIN CLIENT PAGE -->
              
          <!-- client form start -->
            <div class="form_top">
                <div class="option-group">
                    <h3 id="form_title">CLIENTS FORM </h3>
                </div>
                <div class="option-group">
                    <label for="fieldSelectionGroup">Choose a category:</label>
                    <select class="optionSelection" id="fieldSelectionGroup" name="category">
                        <option>Choose option...</option>
                        <option name="coWorkingButton" value="yes" id="coworkingBtn">Co-Working</option>
                        <option name="lesseeButton" value="yes" id="lesseBtn">Lessee</option>
                        <option name="opencafeButton" value="no" id="opencafeBtn">Open Cafe</option>
                        <option name="studentsButton" value="students" id="studentBtn">Students</option>
                    </select>
                    <div class="ërror" id="whatCategoryErr"></div>
                </div>
            </div>
            <div class="container" id="client_form">
                <div class="row">
                    <div class="capture">
                        <div id="my_camera"></div>
                        <!-- <br/> -->
                        <input type=button value="Take Snapshot" onClick="take_snapshot()">
                        <input type="hidden" name="image" class="image-tag">
                    </div>
                    <div class="captured-img">
                        <div id="results">Your captured image will appear here...</div>
                    </div>
                </div>
                <form name="regForm" action="includes/clientReg.inc.php" method="post" onsubmit="return validateForm();">
                    <div class="form-group" id="firstFieldgroupDiv">
                        <label for="fname">First Name </label>
                        <input type="text" name="firstName" placeholder="First Name" required>
                        <div class="ërror" id="fnameErr"></div>
                        <label for="lname">Last Name</label>
                        <input type="text" name="lastName" placeholder="Last Name" required>
                        <div class="ërror" id="lnameErr"></div>
                        <label for="oname">Other Names</label>
                        <input type="text" name="otherName" placeholder="Other Names" required>
                        <div class="ërror" id="onameErr"></div>
                        <br>
                        <label class="radio_label">Gender</label>
                        <div class="radio_options" >
                            <label class="radio_option">Male</label>
                            <input type="radio" name="gender" value="male" class="radio">
                            <label class="radio_option">Female</label>
                            <input type="radio" name="gender" value="female" class="radio">
                            <label class="radio_option">Others</label>
                            <input type="radio" name="gender" value="others" class="radio">
                            <div class="ërror" id="genderErr"></div>
                        </div>
                        
                        <br>
                        <label>Email</label>
                        <input type="email" name="email" placeholder="email" required>
                        <div class="ërror" id="emailErr"></div>
                        <label>Age</label>
                        <input type="number" name="age" placeholder="Age" maxlength="3" required>
                        <div class="ërror" id="ageErr"></div>
                        <label>Phone No.</label>
                        <input type="number" name="phoneNo" placeholder="Phone No" required>
                        <div class="ërror" id="phoneNoErr"></div>
                        <label>Residence</label>
                        <input type="text" name="residence" placeholder="Address" required>
                        <div class="ërror" id="residenceErr"></div>
                        <label>Registration Month</label>
                        <input type="date" name="RegMonth" placeholder="Registration Month" required>
                    </div>
                    <div class="formGroup" id="studentFieldgroupDiv"> 
                        <div class="form-group" id="programFieldgroupDiv">
                            <label>Program type</label>
                            <select class="programTypeselection" id="programfieldSelectionGroup" name="programType" style="margin-bottom:13px;">
                                <option>Select program type...</option>
                                <option value="codegaminators">CODEGAMINATORS</option>
                                <option value="codegaminator-juniors">CODEGAMINATORS-JUNIOR</option>
                                <option value="">DIGI-LIFE</option>
                                <option value="riv-jobs">RIV-JOBS</option>
                                <option value="students">STUDENTS</option>
                            </select>
                            <div class="ërror" id="programCategoryErr"></div>
                        </div>
                        <div class="form-group" id="codegaminatorFieldgroupDiv">
                            <label>Course:</label>
                            <select class="courseTypeselection" id="coursefieldSelectionGroup" name="course" style="margin-bottom:13px;">
                                <option>Select course type...</option>
                                <option value="">ANIMATION</option>
                                <option value="">DATABASE MANAGEMENT</option>
                                <option value="">CYBERSECURITY</option>
                                <option value="">PHOTOGRAPHY</option>
                                <option value="">NETWORK AND HARDWARE</option>
                                <option value="">WEB DEVELOPMENT</option>
                                <option value="">UI/GRAPHICS DESIGN</option>
                            </select>
                        </div>
                        <div class="form-group" id="codegaminatorJuniorgroupDiv">
                            <label>Course:</label>
                            <select class="courseTypeselection" id="juniorCourseselectionGroup" name="course" style="margin-bottom:13px;">
                                <option>Select course type...</option>
                                <option value="coding">CODING</option>
                                <option value="cybersecurity">CYBERNETICS</option>
                                <option value="graphicsdesign">GRAPHICS DESIGN</option>
                                <option value="uav">UAV</option>
                            </select>
                    </div>
                </div>
                    <div class="form-group" id="secondFieldgroupDiv">  
                        <label>Business Name</label>
                        <input type="text" name="biz_Name" placeholder="Business Name" required>
                        <div class="ërror" id="bizNameErr"></div>
                        <label>Business Designation</label>
                        <input type="text" name="biz_Designation" placeholder="Business Designation" required>
                        <div class="ërror" id="bizDesignationErr"></div>
                        <label>Contract Period</label>
                        <br>
                        <div class="radio_options" >
                          <label>Full Month</label>
                          <input type="radio" name="contract_period" value="FullMonth" class="radio">
                          <label>Half Month</label>
                          <input type="radio" name="contract_period" value="HalfMonth" class="radio">
                          <label>One Day</label>
                          <input type="radio" name="contract_period" value="OneDay" class="radio">
                          <div class="ërror" id="genderErr"></div>
                        </div>
                    </div>
                        <br>
                        <br>
                        <button type="submit" id="btnSubmit">Register</button>
            </form>
        </div>
    <!-- client form end -->
          
          
    </div>
    <!-- scripts -->
    <script src="scripts/port.js"></script>
    <script src="scripts/nameAtt.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts/showform.js"></script>
    <script src="scripts/formValidation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <script>

    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content of the register tab on the SIDE MENU*/
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }

      // Close the dropdown menu if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }


    // scripts for webcam image capture
      Webcam.set({
            width: 200,
            height: 200,
            image_format: 'jpeg',
            jpeg_quality: 90
      });
    
      Webcam.attach( '#my_camera' );
    
      function take_snapshot() {
          Webcam.snap( function(data_uri) {
             $(".image-tag").val(data_uri);
             document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
          } );
      };

      // form option selection for lessee and co-working
      $("#fieldSelectionGroup").change(function() {
        if ($(this).val() == "yes") {
           $('#secondFieldgroupDiv').show();
           $('#secondFieldgroup').attr('required', '');
           $('#secondFieldgroup').attr('data-error', 'This field is required.');
         } else {
           $('#secondFieldgroupDiv').hide();
           $('#secondFieldgroup').removeAttr('required');
           $('#secondFieldgroup').removeAttr('data-error');
        }
      });
        
      $("#fieldSelectionGroup").trigger("change");

      // form students option selection 
      $("#fieldSelectionGroup").change(function() {
          if ($(this).val() == "students") {
            $('#studentFieldgroupDiv').show();
            $('#programfieldSelectionGroup').attr('required', '');
            $('#programfieldSelectionGroup').attr('data-error', 'This field is required.');
          } else {
            $('#studentFieldgroupDiv').hide();
            $('#programfieldSelectionGroup').removeAttr('required');
            $('#programfieldSelectionGroup').removeAttr('data-error');
          }
      });
      $("#fieldSelectionGroup").trigger("change");

      // program type selection for Codegaminator students
      $("#programfieldSelectionGroup").change(function() {
          if ($(this).val() == "codegaminators") {
            $('#codegaminatorFieldgroupDiv').show();
            $('#coursefieldSelectionGroup').attr('required', '');
            $('#coursefieldSelectionGroup').attr('data-error', 'This field is required.');
          } else {
            $('#codegaminatorFieldgroupDiv').hide();
            $('coursefieldSelectionGroup').removeAttr('required');
            $('coursefieldSelectionGroup').removeAttr('data-error');
          }
      });
      $("#programfieldSelectionGroup").trigger("change");

      // program type selection for Codegaminator juniors
      $("#programfieldSelectionGroup").change(function() {
          if ($(this).val() == "codegaminator-juniors") {
            $('#codegaminatorJuniorgroupDiv').show();
            $('#juniorCourseselectionGroup').attr('required', '');
            $('#juniorCourseselectionGroup').attr('data-error', 'This field is required.');
          } else {
            $('#codegaminatorJuniorgroupDiv').hide();
            $('juniorCourseselectionGroup').removeAttr('required');
            $('juniorCourseselectionGroup').removeAttr('data-error');
          }
      });
      $("#programfieldSelectionGroup").trigger("change");

  // scripts for changing name attribute on the submit buttton based on the selected option
  // Simple changing name attribute of the submit button based on selected options using jQuery
     $(document).ready(function(){
        // Function to change the name attribute of the Submit button 
        $("#fieldSelectionGroup").change(function() {
          let changeSelected = $(this).children(":selected").text();
          switch (changeSelected) {
        case "Co-Working":
          $("#btnSubmit").prop('name', 'coWorking_submit');
        break;
        case "Lessee": 
          $("#btnSubmit").prop('name', 'lessee_submit');
        break;
        case "Open Cafe": 
          $("#btnSubmit").prop('name', 'opencafe_submit');
        break;
        case "Students":
          $("#btnSubmit").prop('name', 'students_submit');
        break;
        default: 
          $("#btnSubmit").prop('name','#');
      }
        });
        // Function For Back Button
        $(".back").click(function() {
        parent.history.back();
        return false;
        })
      });


    //   Disabling the back and forward browser button
      // Disable Browser Back Button
      // history.pushState(null, null, location.href);
      // window.onpopstate = function () {
      //     history.go(1);
      // };

      let customHistory = [];
      history.pushState(screenData, window.document.title, "#");
      customHistory.push({data: screenData, title: window.document.title, location: '#'});

      window.onpopstate = function(e) { 
      let lastEntry = customHistory.pop();
      history.pushState(lastEntry.data, lastEntry.title, lastEntry.location);
        // load the last entry
        }

      // function preventBack(){window.history.forward();}
      // setTimeout("preventBack()", 0);
      // window.onunload=function(){null};
    </script>
    <!-- scripts -->
  </body>
</html>
