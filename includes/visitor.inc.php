
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

if (isset($_POST["registerVisitor"])) {

    $card_no = $_POST["cardNo"];
    $card_type = $_POST["cardType"];
    $full_name = $_POST["fullName"];
    $gender = $_POST["gender"];
    $phone_no = $_POST["phoneNo"];
    $on_appointment = $_POST["onAppointment"];
    $address = $_POST["contactAddress"];
    $whom_to_see = $_POST["whomToSee"];
    $purpose = $_POST["purpose"];
    $visit_date = $_POST["visitDate"];
    $items_with = $_POST["itemsWith"];
    $model_no = $_POST["ModelNo"];

    date_default_timezone_set('UTC+01:00');

    $time_in = date('h:i:s a');
    $attended_to = $_POST["attendedTo"];
    $time_out = date('h:i:s a');

    if (empty($card_no) || empty($card_type) || empty($full_name) || empty($gender) || empty($phone_no) || empty($on_appointment) || empty($address) || empty($whom_to_see) || empty($purpose) || empty($visit_date) || empty($items_with) || empty($model_no)) {
        header("Location: ../visitor.php?error=emptyfeild");
        exit();
    } else {

        $sql = "INSERT INTO visitor_entry (cardNo, cardType, fullName, gender, phoneNo, onAppointment, address, whomToSee, purpose, visitDate, itemsWith, modelNo, timeIn) VALUES ('$card_no', '$card_type', '$full_name', '$gender', '$phone_no', '$on_appointment', '$address', '$whom_to_see', '$purpose', '$visit_date', '$items_with', '$model_no', '$time_in')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            header("Location: ../visitor.php?visitorentry=successful");
            exit();
        } else {
            header("Location: ../visitor.php?error=unsuccessfulregistration");
            exit();
        }
    }
}

?>