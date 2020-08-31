<?php


if (isset($_POST["submit_login"])) {
    require "dbconnect.php";

// Define variables and initialize with empty values
    $username = $_POST["username"]= "";
    $pwd = $_POST["pwd"] ="";

    $username_err = $pwd_err = "";

    // Check if username is empty
    if(empty(trim($username))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($username);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $pwd_err = "Please enter your password.";
    } else{
        $password = trim($password);
    }

    if (empty($username) || empty($pwd)) {
        header("Location: ../dash.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM admin_db WHERE username='$username' and pwd ='$pwd'";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../dash.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwd_check = password_verify($pwd, $row["pwd"]);
                if ($pwd_check == false) {
                    header("Location: ../signIn.php?error=wrongpwd");
                    exit();
                }elseif ($pwd_check == true) {
                    session_start();
                    $_SESSION["id"] = $row["id"];
                    $_SESSION["username"] = $row["username"];
                    
                    header("Location: ../dash.php?login=success");
                    exit();
                }else {
                    header("Location: ../signIn.php?error=wrongpwd");
                    exit();
                }
            } else {
                header("Location: ../signIn.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: ../signIn.php");
    exit();
}




<?php
session_start();
if (isset($_POST["submit"])) {
    include_once 'dbConnect.php';
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $database = new dbConnect();
    
    $db = $database->openConnection();
    
    $sql = "select * from tbl_registered_users where email = '$email' and password= '$password'";
    $user = $db->query($sql);
    $result = $user->fetchAll(PDO::FETCH_ASSOC);
    
    $id = $result[0]['id'];
    $name = $result[0]['name'];
    $email = $result[0]['email'];
    $_SESSION['name'] = $name;
    $_SESSION['id'] = $id;
    
    $database->closeConnection();
    header('location: dashboard.php');
}
?>


<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>