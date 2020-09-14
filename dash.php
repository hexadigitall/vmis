<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="dash.css" />
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
            <a href="dash.php" class="nav-item active"
              ><i class="fas fa-home"></i> Dashboard</a
            >
            <form
              action="includes/signout.inc.php"
              method="POST"
              class="nav-item signout"
            >
              <button
                type="submit"
                name="signout_submit"
                class="nav-item signout_button"
              >
                Sign Out
              </button>
            </form>
          </div>
        </nav>

        <div id="contentArea">
          <div class="heading">
            <h1>Dashboard</h1>
            <p>Welcome to TechCreek VMIS</p>
          </div>
          <hr />
          <div class="dashBoxes">
            <div class="dashContent box1">
              <div class="icons">
                <i class="far fa-address-card fa-6x"></i>
              </div>
              <div class="content-text">
                <a href="visitor.php" class="links"> <h1>Visitor Entry</h1></a>
                <p>
                  <b>- Register visitor details.</b>
                </p>
              </div>
            </div>
            <div class="dashContent box2">
              <div class="icons">
                <i class="fas fa-user fa-6x"></i>
              </div>
              <div class="content-text">
                <a href="visitLog.php" class="links"> <h1>Visits</h1></a>
                <p>
                  <b>- Contains Visitors Log.</b>
                </p>
              </div>
            </div>
            <div class="dashContent box3">
              <div class="icons">
                <i class="fas fa-user-lock fa-6x"></i>
              </div>
              <div class="content-text adminportal-btn">
                <a href="#" class="links admin" onclick="openForm()">
                  <h1>Admin Portal</h1>
                </a>
                <p>
                  <b
                    >- Show the Administrations panel.</b
                  >
                </p>

                <!-- <p>Containing settings and options</p> -->
              </div>
            </div>
            <div class="dashContent box4">
              <div class="icons">
                <i class="fas fa-thumbs-up fa-6x"></i>
              </div>
              <div class="content-text">
                <a href="openCafe.php" class="links"><h1>Clock-in</h1></a>
                <p>
                  <b>- Containing clock-in interface.</b>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footerdash"></div>
    <!-- Pop-up form -->
    <div id="adminLoginForm" class="form-popup">
    
      <form
        action="includes/admin.inc.php"
        class="form-container"
        method="POST"
        onSubmit="return validate();"
      >
        <div class="form-head">
          <h2>Login</h2>
          <p>Please fill in your credentials to login.</p>
        </div>
        <?php 
                if(isset($_SESSION["errorMessage"])) {
                ?>
        <div class="error-message">
          <?php  echo $_SESSION["errorMessage"]; ?>
        </div>
        <?php 
                unset($_SESSION["errorMessage"]);
                } 
                ?>
        <label for="email"><b>Username</b></label
        ><span id="user_info" class="error-info"></span>
        <input
          type="text"
          placeholder="Enter Username"
          name="Username"
          id="Username"
          required
        />
        <label for="psw"><b>Password</b></label
        ><span id="password_info" class="error-info"></span>
        <input
          type="password"
          placeholder="Enter Password"
          name="pwd"
          id="pwd"
          required
        />
        <button
          type="submit"
          class="btn login-btn"
          name="submit_login"
        >
          Login
        </button>
        <button type="button" class="btn cancel" onclick="closeForm()">
          Close
        </button>
      </form>
    </div>
    <script src="scripts/port.js"></script>
    <script>
      const submitBtn = document.querySelector(".login-btn");
      submitBtn.addEventListener("click", adminSubmit);

      // function adminSubmit(event) {
      //   event.preventDefault();
      //   if (
      //     evt.target.form.email.value == "admin@techcreek.com" &&
      //     evt.target.form.psw.value == "rvsgauthority"
      //   ) {
      //     window.location.replace("new target url");
      //   } else if (
      //     evt.target.form.email.value == "security@techcreek.com" &&
      //     evt.target.form.psw.value == "secure000"
      //   ) {
      //     window.location.replace("new target url");
      //   } else {
      //     alert("Error email or password");
      //     return false;
      //   }
      // }
      function openForm() {
        document.getElementById("adminLoginForm").style.display = "block";
      }

      function closeForm() {
        document.getElementById("adminLoginForm").style.display = "none";
      }

      // Validating Popup-form
      function validate() {
        let $valid = true;
        document.getElementById("user_info").innerHTML = "";
        document.getElementById("password_info").innerHTML = "";

        let userName = document.getElementById("Username").value;
        let password = document.getElementById("pwd").value;
        if (userName == "") {
          document.getElementById("user_info").innerHTML = "required";
          $valid = false;
        }
        if (password == "") {
          document.getElementById("password_info").innerHTML = "required";
          $valid = false;
        }
        return $valid;
      }
    </script>
  </body>
</html>
