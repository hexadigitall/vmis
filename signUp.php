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

      <form action="signUp.php" method="POST">
        <label>First Name</label>
        <input type="text" name="firstname" id="firstN" placeholder="First Name" required />
        <label>Last Name</label>
        <input type="text" name="lastname" id="secondN" placeholder="Last Name" required />
        <label for="">Phone</label>
        <input type="text" placeholder="Phone" id="phone" name="phone" required />
        <label>Email Address</label>
        <input type="email" name="username" id="email" placeholder="Email" required />
        <label>Password</label>
        <input type="password" name="password" id="password" placeholder="password" required />
        <label>Confirm Password</label>
        <input type="password" name="confirmPass" id="confirPpass" placeholder="password" required />
        <button type="submit" class="register" name="submit">Register</button>
      </form>
    </div>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $signup_db = "signup_db";
    $conn = new mysqli($servername, $username, $password, $signup_db) or die("unable to connect to host");

    ?>

    <?php
    //inserting values from the form to the database//
    if (isset($_POST['submit'])) {
      $firstname = $_POST['firstname'];
      $secondname = $_POST['lastname'];
      $phone = $_POST['phone'];
      $email = $_POST['username'];
      $pass = $_POST['password'];
      $confirm_pass = $_POST['confirmPass'];

      
      $existing_email= "SELECT username FROM signup_db";
      //validating password and email address//

      if($pass == $confirm_pass || $email == $existing_email){ 
      $sql = "INSERT INTO signup_db(firstname, lastname, phone, username, password) VALUES('$firstname','$secondname','$phone','$email','$pass')";
      if ($conn->query($sql) === TRUE) {
      
      }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      header('location: signIn.php');
      echo "<script type='text/javascript'>alert('signup successful');</script>";
      }
      else{
        echo "<script type='text/javascript'>alert('password mismatched');</script>";
      }
      $conn->close(); // Closing Connection with Server
    }
    ?>



</body>

</html>