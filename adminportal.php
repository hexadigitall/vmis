<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Admin Portal</title>
    <link rel="stylesheet" href="dash.css" />
    <link href="/css/all.css" rel="stylesheet">
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
        <nav id="sideMenu">
          <div class="sideMenu-content">
            <a href="adminportal.html" class="nav-btn active">
              <b>Home</b></a>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn nav-btn">Register</button>
                <div id="myDropdown" class="dropdown-content">
                  <a href="adminClient.html"><i class="fas fa-users" style="font-size:20px;color:red;"></i><b>Client</b></a>
                  <a href="adminStaff.html"><b>Staff</b></a>
                </div>
            </div>

            <a href="dash.html" class="nav-btn">
              <b>Logout</b></a>
          </div>
        </nav>

        <div id="contentArea">
          <div class="heading">
            <h1>
              Admin Portal</h1>
            <p>Welcome to TechCreek VMIS</p>
          </div>
          <hr />
    
          <div class="admin-home">
              <h3>Quick start</h3>
              <div class="display">
                <div class="start">
                  <h4>Set up a Client</h4>
                  <p>Quickly register a client.</p>
                </div>
                <div class="start">
                    <h4>Manage Staff attendance</h4>
                    <p>Handle Staff Clock-in and itineraries.</p>
                </div>
                <div class="start end">
                  <h4>Students attendance</h4>
                  <p>Quickly sign in students and manage students attendance records.</p>
                </div>
              </div>
          </div>
          
    </div>
    <script src="scripts/port.js"></script>
    <script>
      function openForm() {
        document.getElementById("adminLoginForm").style.display = "block";
      }

      function closeForm() {
        document.getElementById("adminLoginForm").style.display = "none";
      }

      /* When the user clicks on the button,
      toggle between hiding and showing the dropdown content of the SIDE MENU*/
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
  </body>
</html>
