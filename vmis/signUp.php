<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>VMIS</title>
  <link href="https://fonts.googleapis.com/css?family=Acme|Archivo+Narrow|Righteous|Source+Serif+Pro|Varela+Round&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Alef&display=swap" rel="stylesheet">
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/glacial-indifference" type="text/css" />
  <link rel="stylesheet" href="signup.css">
  <script src="https://kit.fontawesome.com/2b9385dd69.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <div class="textContent">
      <div class="titleText">
        <h1>RIV-TECHCREEK VMIS</h1>
        <div class="subText">
          <h3>VISITOR MANAGEMENT INFORMATION SYSTEM</h3>
        </div>
      </div>
      <nav>
        <ul>
          <li class="links"><a href="index.html"><i class="fas fa-home"></i></a></li>
          <li class="links"><a href="signIn.php">Sign In</a></li>
          <li class="links"><a href="signUp.php" class="active">Sign Up</a></li>
          <li class="links"><a href="events.html">Events</a></li>
        </ul>
      </nav>

      <form action="includes/signup.inc.php" method="POST">
      <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "invailmailuid") {
                    echo '<p class="error">* Invalid Username and Email!</p>';
                } elseif ($_GET["error"] == "invailuid") {
                    echo '<p class="error">* Invalid Username!</p>';
                } elseif ($_GET["error"] == "invailemail") {
                    echo '<p class="error">* Invalid Email!</p>';
                } elseif ($_GET["error"] == "passwordcheck") {
                    echo '<p class="error">* Invalid Password!</p>';
                } elseif ($_GET["error"] == "usernametaken") {
                    echo '<p class="error">* Email already exist!</p>';
                }
            } 
            elseif (isset($_GET["signup"])) {
                if ($_GET["signup"] == "success") {
                    echo '<p class="success"> Signup Successful</p>
                    <i class="far fa-check-circle"></i>
                    ';
                }
            }
            else {
                # code...
            }
            
            ?>
        <label>Username</label>
        <input type="text" name="uid" id="firstN" placeholder="Username" required />

        <label>Email Address</label>
        <input type="email" name="email" id="email" placeholder="Email" required />

        <label>Password</label>
        <input type="password" name="pwd" id="password" placeholder="Password" required />

        <label>Confirm Password</label>
        <input type="password" name="con_pwd" id="confirmPass" placeholder="Confirm password" required />

        <button type="submit" class="register" name="signup_submit">Register</button>
      </form>
    </div>
</body>

</html>