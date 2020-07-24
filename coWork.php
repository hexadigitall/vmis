<?php
session_start();
?>

<?php
        
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
      <h1>OPEN CO-WORK FORM</h1>
      <form action="includes/visitor.inc.php" method="post">
        <label>First Name </label>
        <input type="text" name="firstName" placeholder="First Name">
        <label>Last Name</label>
        <input type="text" name="lastName" placeholder="Last Name">
        <label>Other Names</label>
        <input type="text" name="otherNames" placeholder="Other Names">
        <label>Gender</label>
        <label>Gender</label>
        <input type="radio" name="gender" value="M" class="radio">
        <label>M</label>
        <input type="radio" name="gender" value="F" class="radio">
        <label>F</label>
        <label>Age</label>
        <input type="number" name="age" placeholder="Age">
        <label>Phone No.</label>
        <input type="number" name="phone_No" placeholder="Phone No">
        <label>Residence</label>
        <input type="text" name="Residence" placeholder="Address">
        <label>Registration Month</label>
        <input type="date" name="Reg_Month" placeholder="Registration Month">
        <label>Business Name</label>
        <input type="text" name="Biz_Name" placeholder="Business Name">
        <label>Business Designation</label>
        <input type="text" name="Biz_Designation" placeholder="Business Designation">
        <label>Contract Period</label>
        <br>
        <input type="radio" name="contract_period" value="HalfMonth" class="radio">
        <input type="radio" name="contract_period" value="FullMonth" class="radio">
        <button type="submit" name="registerClient">Register</button>
      </form>
    </div>
</body>
// <script src="scripts/popups.js"></script>
</html>
';
        } else {
          header("Location: ../signIn.php");
          exit();
        };
        ?>