<?php
    $search = $_POST['search_visitor'];
    $attended_to = $_POST['attendedTo'];

    date_default_timezone_set('UTC');

    $time_out = date('h:i:s');

if (isset($_POST['update_btn'])) {
    require 'dbconnect.php';



$sql = "UPDATE visitor_entry SET timeOut = $time_out WHERE phoneNo=$search";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

};

// if (isset($_POST['search_btn'])) {
//     require 'dbconnect.php';

//     $sql = "SELECT phoneNo FROM visitor_entry WHERE phoneNo=$search";
//     if ($conn->query($sql) === TRUE) {
//         echo $sql;
//     } else {
//         echo "Error updating record: " . $conn->error;
//     }
    
