<?php
if (isset($_POST["signup_submit"])){
    require 'dbconnect.php';
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $otherName = $_POST['otherName'];
    $age = $_POST['age'];
    $phoneNo = $_POST['phoneNo'];
    $residence = $_POST['residence'];
    $regMonth = $_POST['regMonth'];
    $contractPeriod = $_POST['contract_period'];
    $gender = $_POST['gender'];

    if(empty($firstName) || empty($lastName) || empty($age)){

    }
}
