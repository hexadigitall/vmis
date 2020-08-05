<?php
session_start();
?>

<?php
        $data_username = "SELECT emailUsers FROM vmis_users_db WHERE emailUsers=?";
        if (isset($_SESSION["usersId"])) {
          
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
</head>
<body>
  
<div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="my_camera"></div>
                <br/>
                <input type=button value="Take Snapshot" onClick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag">
            </div>
            <div class="col-md-6">
                <div id="results">Your captured image will appear here...</div>
            </div>
        </div>
</div>
  
<!-- Configure a few settings and attach camera -->

      <form action="includes/visitor.inc.php" method="post">
        <input type="text" placeholder="Card No" name="cardNo" required>
        <label>Card Type? </label>
        <label>Open Cafe</label>
        <input type="radio" name="cardType" value="Opencafe" class="radio" required>
        <label>Lessee</label>
        <input type="radio" name="cardType" value="Lesse" class="radio" required>
        <label>Co-Work</label>
        <input type="radio" name="cardType" value="Co-work" class="radio" required>
        <label>Admin</label>
        <input type="radio" name="cardType" value="Admin" class="radio" required>
        <input type="text" name="fullName" placeholder="Full Name" required>
        <label>Gender</label>
        <input type="radio" name="gender" value="M" class="radio" required>
        <label>M</label>
        <input type="radio" name="gender" value="F" class="radio" required>
        <label>F</label>
        <input type="number" name="phoneNo" placeholder="Phone No" required>
        <label>On Appointment</label>
        <label>Yes</label>
        <input type="radio" name="onAppointment" value="yes" class="radio" required>
        <label>No</label>
        <input type="radio" name="onAppointment" value="no" class="radio" required>
        <textarea name="contactAddress" placeholder="Address" required></textarea>
        <input type="text" name="whomToSee" placeholder="Whom to see" required>
        <textarea name="purpose" placeholder="Purpose" required></textarea>
        <textarea name="itemsWith" placeholder="Items With" required></textarea>
        <input type="text" name="ModelNo" placeholder="Model No" required>
        <button type="submit" name="registerVisitor">Register</button>
      </form>
    </div>
    <div class="attended_timeout_form" id="attended_form">
      <span id="closeBtn">x</span>
      <form action="includes/attended.php" method="post">
        <input type="text" name="search_visitor" id="search_visitor" placeholder="Visitors Phone No" required>
        <label>Attended to</label>
        <label>Yes</label>
        <input type="radio" name="attendedTo" value="yes" class="radio" required>
        <label>No</label>
        <input type="radio" name="attendedTo" value="no" class="radio" required>
        <br>
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
<script language="JavaScript">
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
    }
</script>