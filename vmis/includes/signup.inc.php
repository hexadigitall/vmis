<?php
if (isset($_POST["signup_submit"])) {
    require 'dbconnect.php';

    $username = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $confirm_pwd = $_POST["con_pwd"];

    //checking for empty fields and prompting error messages
    if (empty($username) || empty($email) || empty($pwd) || empty($confirm_pwd)) {
        header("Location: ../signUp.php?error=emptyfields&uid=" . $username . "&email=" . $email);
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signUp.php?error=invailmailuid");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signUp.php?error=invailmail&uid=" . $username);
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signUp.php?error=invailuid&email=" . $email);
        exit();
    } elseif ($pwd !== $confirm_pwd) {
        header("Location: ../signUp.php?error=passwordcheck&uid=" . $username . "&email=" . $email);
        exit();
    } else {
        $sql = "SELECT emailUsers FROM vmis_users_db WHERE emailUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signUp.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result_check =    mysqli_stmt_num_rows($stmt);
            if ($result_check > 0) {
                header("Location: ../signUp.php?error=usernametaken&email");
                exit();
            } else {
                $sql = "INSERT INTO vmis_users_db (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signUp.php?error=sqlerror");
                    exit();
                } else {
                    $hash_pwd = password_hash($pwd, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hash_pwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signUp.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: ../signUp.php?signup");
    exit();
}
