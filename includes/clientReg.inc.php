<?php

// lesse form submission script start here !//

if (isset($_POST["lesse_submit"])){
    require 'dbconnect.php';
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $otherName = $_POST['otherName'];
    $age = $_POST['age'];
    $phoneNo = $_POST['phoneNo'];
    $residence = $_POST['residence'];
    $regMonth = $_POST['regMonth'];
    $businessName = $_POST['biz_Name'];
    $businessDesignation = $_POST['biz_Designation'];
    $contractPeriod = $_POST['contract_period'];
    $gender = $_POST['gender'];
    $programme = $_POST['programType'];
    $course = $_POST['course'];

    if(empty($firstName) || empty($lastName) || empty($age) || empty($phoneNo) || empty($residence) || empty($regMonth) || empty($contractPeriod) || empty($residence) || empty($gender) || empty($businessDesignation) || empty($businessName) ){
        header("Location: ../clientForm.php?error=emptyfeild");
        exit();
    }else{

        $sql = "INSERT INTO lesse_db (firstName, lastName, others, gender, age, phoneNo, residence, regDate, bizName, bizDesignation, contractPeriod) 
        VALUES ('$firstName','$lastName', '$otherName', '$age', '$phoneNo', '$residence', CURDATE(), '$businessName', '$businessDesignation', '$contractPeriod')";
            $query = mysqli_query($conn, $sql);
        if ($query) {
            header("Location: ../clientForm.php?visitorentry=successful");
            exit();
        } else {
            header("Location: ../clientForm.php?error=unsuccessfulregistration");
            exit();
        }
    }
}

//lesse end here //

//cowork submssion form starts here //

if (isset($_POST["cowork_submit"])){
    require 'dbconnect.php';
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $otherName = $_POST['otherName'];
    $age = $_POST['age'];
    $phoneNo = $_POST['phoneNo'];
    $residence = $_POST['residence'];
    $regMonth = $_POST['regMonth'];
    $businessName = $_POST['biz_Name'];
    $businessDesignation = $_POST['biz_Designation'];
    $contractPeriod = $_POST['contract_period'];
    $gender = $_POST['gender'];
    $programme = $_POST['programType'];
    $course = $_POST['course'];

    if(empty($firstName) || empty($lastName) || empty($age) || empty($phoneNo) || empty($residence) || empty($regMonth) || empty($contractPeriod) || empty($residence) || empty($gender) || empty($businessDesignation) || empty($businessName) ){
        header("Location: ../clientForm.php?error=emptyfeild");
        exit();
    }else{

        $sql = "INSERT INTO cowork_db (firstName, lastName, others, gender, age, phoneNo, residence, regDate, bizName, bizDesignation, contractPeriod) 
        VALUES ('$firstName','$lastName', '$otherName', '$age', '$phoneNo', '$residence', CURDATE(), '$businessName', '$businessDesignation', '$contractPeriod')";
            $query = mysqli_query($conn, $sql);
        if ($query) {
            header("Location: ../clientForm.php?visitorentry=successful");
            exit();
        } else {
            header("Location: ../clientForm.php?error=unsuccessfulregistration");
            exit();
        }
    }
}

//cowork submssion form ends here //

// opencafe  submission form  starts here //

if (isset($_POST["opencafe_submit"])){
    require 'dbconnect.php';
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $otherName = $_POST['otherName'];
    $age = $_POST['age'];
    $phoneNo = $_POST['phoneNo'];
    $residence = $_POST['residence'];
    $regMonth = $_POST['regMonth'];
    $businessName = $_POST['biz_Name'];
    $businessDesignation = $_POST['biz_Designation'];
    $contractPeriod = $_POST['contract_period'];
    $gender = $_POST['gender'];
    $programme = $_POST['programType'];
    $course = $_POST['course'];

    if(empty($firstName) || empty($lastName) || empty($age) || empty($phoneNo) || empty($residence) || empty($regMonth) || empty($contractPeriod) || empty($residence) || empty($gender) || empty($businessDesignation) || empty($businessName) ){
        header("Location: ../clientForm.php?error=emptyfeild");
        exit();
    }else{

        $sql = "INSERT INTO opencafe_db (firstName, lastName, others, gender, age, phoneNo, residence, regDate) 
        VALUES ('$firstName','$lastName', '$otherName', '$age', '$phoneNo', '$residence', CURDATE())";
            $query = mysqli_query($conn, $sql);
        if ($query) {
            header("Location: ../clientForm.php?visitorentry=successful");
            exit();
        } else {
            header("Location: ../clientForm.php?error=unsuccessfulregistration");
            exit();
        }
    }
}

//  opencafe submission form ends here //
