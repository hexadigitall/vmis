<?php


if (isset($_POST["submit_login"])) {
    require "dbconnect.php";

    $email_uid = $_POST["Username"];
    $pwd = $_POST["pwd"];
    if (empty($email_uid) || empty($pwd)) {
        header("Location: ../dash.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM admin_db WHERE username=? OR username=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../dash.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $email_uid, $email_uid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwd_check = $pwd == $row["pwd"];
                if ($pwd_check == false) {
                    header("Location: ../dash.php?error=wrongpwd");
                    exit();
                }elseif ($pwd_check == true) {
                    session_start();
                    $_SESSION["usersId"] = $row["id"];
                    $_SESSION["usersUid"] = $row["username"];
                    
                    header("Location: ../adminportal.php?login=success");
                    exit();
                }else {
                    header("Location: ../dash.php?error=wrongpwd");
                    exit();
                }
            } else {
                header("Location: ../dash.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: ../dash.php");
    exit();
}
