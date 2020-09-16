<?php

// lesse form submission script start here !//

if (isset($_POST["lessee_submit"])){
    require 'dbconnect.php';
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $otherName = $_POST['otherName'];
    $age = $_POST['age'];
    $phoneNo = $_POST['phoneNo'];
    $residence = $_POST['residence'];
    $regMonth = $_POST['RegMonth'];
    $businessName = $_POST['biz_Name'];
    $businessDesignation = $_POST['biz_Designation'];
    $contractPeriod = $_POST['contract_period'];
    $gender = $_POST['gender'];
    $programme = $_POST['programType'];
    $course = $_POST['course'];

    if(empty($firstName) || empty($lastName) || empty($age) || empty($phoneNo) || empty($residence) || empty($regMonth) || empty($contractPeriod) || empty($residence) || empty($gender) || empty($businessDesignation) || empty($businessName) ){
        header("Location: ../adminClient.html?error=emptyfeild");
        exit();
    }else{

        $sql = "INSERT INTO lesse_db (firstName, lastName, others, gender, age, phoneNo, residence, regDate, bizName, bizDesignation, contractPeriod) 
        VALUES ('$firstName','$lastName', '$otherName', '$gender', '$age', '$phoneNo', '$residence', CURDATE(), '$businessName', '$businessDesignation', '$contractPeriod')";
            $query = mysqli_query($conn, $sql);
        if ($query) {
            header("Location: ../adminClient.html?lessevisitorentry=successful");
        } else {
            header("Location: ../adminClient.html?lesseerror=unsuccessfulregistration");
            exit();
        }
    }
}

//lesse end here //

//cowork submssion form starts here //

if (isset($_POST["coWorking_submit"])){
    require 'dbconnect.php';
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $otherName = $_POST['otherName'];
    $age = $_POST['age'];
    $phoneNo = $_POST['phoneNo'];
    $residence = $_POST['residence'];
    $regMonth = $_POST['RegMonth'];
    $businessName = $_POST['biz_Name'];
    $businessDesignation = $_POST['biz_Designation'];
    $contractPeriod = $_POST['contract_period'];
    $gender = $_POST['gender'];
    $programme = $_POST['programType'];
    $course = $_POST['course'];

    if(empty($firstName) || empty($lastName) || empty($age) || empty($phoneNo) || empty($residence) || empty($regMonth) || empty($contractPeriod) || empty($residence) || empty($gender) || empty($businessDesignation) || empty($businessName) ){
        header("Location: ../adminClient.html?error=emptyfeild");
        exit();
    }else{

        $sql = "INSERT INTO cowork_db (firstName, lastName, others, gender, age, phoneNo, residence, regDate, bizName, bizDesignation, contractPeriod) 
        VALUES ('$firstName','$lastName', '$otherName', '$age', '$gender', '$phoneNo', '$residence', CURDATE(), '$businessName', '$businessDesignation', '$contractPeriod')";
            $query = mysqli_query($conn, $sql);
        if ($query) {
            header("Location: ../adminClient.html?lessevisitorentry=successful");
            exit();
        } else {
            header("Location: ../adminClient.html?coworkingerror=unsuccessfulregistration");
            exit();
        }
    }
}

//cowork submssion form ends here //

// opencafe  submission form  starts here //

if (isset($_POST["opencafe_submit"])){
    require 'dbconnect.php';
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $otherName = $_POST['otherName'];
    $age = $_POST['age'];
    $phoneNo = $_POST['phoneNo'];
    $residence = $_POST['residence'];
    $regMonth = $_POST['RegMonth'];
    $businessName = $_POST['biz_Name'];
    $businessDesignation = $_POST['biz_Designation'];
    $contractPeriod = $_POST['contract_period'];
    $gender = $_POST['gender'];
    $programme = $_POST['programType'];
    $course = $_POST['course'];

    if(empty($firstName) || empty($lastName) || empty($age) || empty($phoneNo) || empty($residence) || empty($regMonth) || empty($contractPeriod) || empty($residence) || empty($gender) || empty($businessDesignation) || empty($businessName) ){
        header("Location: ../adminClient.html?error=emptyfeild");
        exit();
    }else{

        $sql = "INSERT INTO opencafe_db (firstName, lastName, others, gender, age, phoneNo, residence, regDate) 
        VALUES ('$firstName','$lastName', '$otherName', '$gender' '$age', '$phoneNo', '$residence', CURDATE())";
            $query = mysqli_query($conn, $sql);
        if ($query) {
            header("Location: ../adminClient.html?lessevisitorentry=successful");
            exit();
        } else {
            header("Location: ../adminClient.html?opencafeerror=unsuccessfulregistration");
            exit();
        }
    }
}

//  opencafe submission form ends here //
