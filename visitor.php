<?php
session_start();
?>

<?php
        $data_username = "SELECT emailUsers FROM vmis_users_db WHERE emailUsers=?";
        if (isset($_SESSION["usersId"])) {
          
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyfeild") {
          echo '<div class="alert show" id="alert">
          <span class="alert_warning">There is an empty feild !</span> <span class="close">x</span>
          </div>';
        } elseif ($_GET["error"] == "unsuccessfulregistration") {
          echo '<div class="alert show" id="alert">
          <span class="alert_warning">Registration was not successful !</span> 
          <span class="close">x</span>
          </div>';
        } elseif (isset($_GET["visitorentry"])) {
          echo '<div class="alert show" id="alert">
          <span class="alert_warning">Registration successful !</span> 
          <span class="close">x</span>
          </div>';
        }
      }
            echo ' 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Visitors Form</title>
  <link rel="stylesheet" href="visitor.css" />
  <link href="https://fonts.googleapis.com/css?family=Alef&display=swap" rel="stylesheet">
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/glacial-indifference" type="text/css" />
  <script src="https://kit.fontawesome.com/2b9385dd69.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="mainDashboard">

    <div class="Menu">
      <nav id="sideMenu">
        <a href="dash.php" class="active"><i class="fas fa-home"></i> Dashboard</a>
        <form action="includes/signout.inc.php" method="POST" class="signout">
          <button type="submit" name="signout_submit" class="signout_button">Sign Out</button>
        </form>
    </div>

  </div>
  </nav>
  <header>
    <div class="header-area">
      <hi class="header-heading">VISITOR MANAGEMENT INFORMATION SYSTEM</hi>
    </div>
    </div>
  </header>
  <div id="contentArea">
    <div class="heading">
      <h1>VISITORS FORM</h1>
      <button id="update_visitor_entry">Update Entry</button>
      
      
      <p>RIV-TECHCREEK VMIS</p>
    </div>
    <hr />
    <div class="container">
      <form action="includes/visitor.inc.php" method="post">
        <input type="text" placeholder="Card No" name="cardNo">
        <label>Card Type? </label>
        <label>Open Cafe</label>
        <input type="radio" name="cardType" value="Opencafe" class="radio">
        <label>Lessee</label>
        <input type="radio" name="cardType" value="Lesse" class="radio">
        <label>Co-Work</label>
        <input type="radio" name="cardType" value="Co-work" class="radio">
        <label>Admin</label>
        <input type="radio" name="cardType" value="Admin" class="radio">
        <input type="text" name="fullName" placeholder="Full Name">
        <label>Gender</label>
        <input type="radio" name="gender" value="M" class="radio">
        <label>M</label>
        <input type="radio" name="gender" value="F" class="radio">
        <label>F</label>
        <input type="number" name="phoneNo" placeholder="Phone No">
        <label>On Appointment</label>
        <label>Yes</label>
        <input type="radio" name="onAppointment" value="yes" class="radio">
        <label>No</label>
        <input type="radio" name="onAppointment" value="no" class="radio">
        <textarea name="contactAddress" placeholder="Address"></textarea>
        <input type="text" name="whomToSee" placeholder="Whom to see">
        <textarea name="purpose" placeholder="Purpose"></textarea>
        <input type="date" name="visitDate">
        <textarea name="itemsWith" placeholder="Items With"></textarea>
        <input type="text" name="ModelNo" placeholder="Model No">
        <label>Time In</label>
        <input type="time" placeholder="Time In" name="timeIn">
        <!-- <label>Attended to</label>
        <label>Yes</label>
        <input type="radio" name="attendedTo" value="yes" class="radio">
        <label>No</label>
        <input type="radio" name="attendedTo" value="no" class="radio">
        <br>
        <label>Time Out</label>
        <input type="time" placeholder="Time Out" name="timeOut"> -->
        <button type="submit" name="registerVisitor">Register</button>
      </form>
    </div>
    <div class="attended_timeout_form" id="attended_form">
      <span id="closeBtn">x</span>
      <form action="includes/attended.php" method="post">
        <input type="search" name="search_visitor" id="search_visitor">
        <button type="submit" name="search_btn" id="btn_search" class="btn_float">Search</button>
      </form>
      <form action="includes/attended.php" method="post">
        <label>Attended to</label>
        <label>Yes</label>
        <input type="radio" name="attendedTo" value="yes" class="radio">
        <label>No</label>
        <input type="radio" name="attendedTo" value="no" class="radio">
        <br>
        <label>Time Out</label>
        <input type="time" placeholder="Time Out" name="timeOut" class="timeout">
        <button type="submit" name="update_btn" class="btn_update">Update</button>
      </form>
    </div>
</body>
<script src="scripts/popups.js"></script>
</html>
';
        } else {
          header("Location: ../signIn.php");
          exit();
        };
        ?>