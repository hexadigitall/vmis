<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Sign In</title>
  <link rel="stylesheet" href="signIn.css" />
  <link href="https://fonts.googleapis.com/css?family=Alef&display=swap" rel="stylesheet">
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/glacial-indifference" type="text/css" />
  <script src="https://kit.fontawesome.com/2b9385dd69.js" crossorigin="anonymous"></script>

</head>

<?php 

?>
<body>
  <div class="container">
    <div class="textContent">
      <div class="titleText">
        <h1>RIV-TECHCREEK VMIS</h1>
        <div class="subText">
          <h3>VISITOR MANAGEMENT INFORMATION SYSTEM</h3>
        </div>
      </div>
    </div>
    <nav>
      <ul>
        <li class="links">
          <a href="index.html"><i class="fas fa-home"></i></a>
        </li>
        <li class="links"><a href="signIn.php" class="active">Sign In</a></li>
        <li class="links"><a href="signUp.php">Sign Up</a></li>
        <li class="links"><a href="events.html">Events</a></li>
      </ul>
    </nav>
    <div class="acct_box">

      <!-- admin sigin form -->
      <form action="includes/signIn.inc.php" method="POST">
        <label>Email Address</label>
        <input type="email" name="email" class="field" id="email" placeholder="Email" required />
        <label>Password</label>
        <input type="password" name="pwd" class="field" id="pass" placeholder="password" required />
        <button type="submit" class="signIn" name="login_submit">Login</button>
      </form>
    </div>
  </div>
</body>
</html>