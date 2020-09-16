<?php


if (isset($_POST["login_submit"])) {
    require "dbconnect.php";

    $email_uid = $_POST["email"];
    $pwd = $_POST["pwd"];
    if (empty($email_uid) || empty($pwd)) {
        header("Location: ../signIn.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM vmis_users_db WHERE uidUsers=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signIn.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $email_uid, $email_uid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwd_check = password_verify($pwd, $row["pwdUsers"]);
                if ($pwd_check == false) {
                    header("Location: ../signIn.php?error=wrongpwd");
                    exit();
                }elseif ($pwd_check == true) {
                    session_start();
                    $_SESSION["usersId"] = $row["idUsers"];
                    $_SESSION["usersUid"] = $row["uidUsers"];
                    
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
