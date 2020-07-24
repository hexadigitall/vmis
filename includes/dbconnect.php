<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "vmis_db";

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

//if connection fails 
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
