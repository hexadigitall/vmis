<?php
session_start();
require "includes/dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Visit Log</title>
    <link rel="stylesheet" href="visitLog.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/glacial-indifference" type="text/css" />
    <script src="https://kit.fontawesome.com/2b9385dd69.js" crossorigin="anonymous"></script>
    <style>
        

    </style>
</head>

<body>
    <div class="mainDashboard">
        <div class="Menu">
            <nav id="sideMenu">
                <div>
                    <a href="dash.php" class="active"><i class="fas fa-home"></i> Dashboard</a>
                    <form action="includes/signout.inc.php" method="POST" class="signout">
                        <button type="submit" name="signout_submit" class="signout_button">Sign Out</button>
                    </form>
                </div>

            </nav>
            <header>
                <div class="header-area">
                    <hi class="header-heading">VISITORS MANAGEMENT INFORMATION SYSTEM
                    </hi>
                </div>
                <div></div>
            </header>
            <div id="contentArea">
                <div class="heading">
                    <h1>VISIT LOG</h1>
                    <h3>Welcome to TechCreek VMIS</h3>
                </div>
                <hr />

                <div class="table">


                    <?php

                    $rows = $conn->query("select id from visitor_entry");

                    echo "<div>";
                    echo "<h3>S/N</h3>";
                    while (list($id) = $rows->fetch_row()) {
                        echo "<ul><li>$id</li></ul>";
                    }
                    echo "<div>";

                    ?>
                    <?php

                    $rows = $conn->query("select cardType from visitor_entry");

                    echo "<div>";
                    echo "<h3>Card Type</h3>";
                    while (list($cardTy) = $rows->fetch_row()) {
                        echo "<ul><li>$cardTy</li></ul>";
                    }
                    echo "</div>";

                    ?>
                    <?php

                    $rows = $conn->query("select cardNo from visitor_entry");

                    echo "<div>";
                    echo "<h3>Card No</h3>";
                    while (list($cardNo) = $rows->fetch_row()) {
                        echo "<ul><li>$cardNo</li></ul>";
                    }
                    echo "</div>";

                    ?>

                    <?php

                    $rows = $conn->query("select gender from visitor_entry");

                    echo "<div>";
                    echo "<h3>Gender</h3>";
                    while (list($gender) = $rows->fetch_row()) {
                        echo "<ul><li>$gender</li></ul>";
                    }
                    echo "</div>";

                    ?>

                    <?php

                    $rows = $conn->query("select phoneNo from visitor_entry");

                    echo "<div>";
                    echo "<h3>Phone No</h3>";
                    while (list($phone) = $rows->fetch_row()) {
                        echo "<ul><li>$phone</li></ul>";
                    }
                    echo "</div>";

                    ?>

                    <?php

                    $rows = $conn->query("select onAppointment from visitor_entry");

                    echo "<div>";
                    echo "<h3>On Appointment</h3>";
                    while (list($appointment) = $rows->fetch_row()) {
                        echo "<ul><li>$appointment</li></ul>";
                    }
                    echo "</div>";

                    ?>

                    <?php

                    $rows = $conn->query("select address from visitor_entry");

                    echo "<div>";
                    echo "<h3>Address</h3>";
                    while (list($add) = $rows->fetch_row()) {
                        echo "<ul><li>$add</li></ul>";
                    }
                    echo "</div>";

                    ?>

                    <?php

                    $rows = $conn->query("select whomToSee from visitor_entry");

                    echo "<div>";
                    echo "<h3>Whom To See</h3>";
                    while (list($whomToSee) = $rows->fetch_row()) {
                        echo "<ul><li>$whomToSee</li></ul>";
                    }
                    echo "</div>";

                    ?>

                    <?php

                    $rows = $conn->query("select purpose from visitor_entry");

                    echo "<div>";
                    echo "<h3>Purpose</h3>";
                    while (list($purp) = $rows->fetch_row()) {
                        echo "<ul><li>$purp</li></ul>";
                    }
                    echo "</div>";

                    ?>

                    <?php

                    $rows = $conn->query("select visitDate from visitor_entry");

                    echo "<div>";
                    echo "<h3>Date</h3>";
                    while (list($date) = $rows->fetch_row()) {
                        echo "<ul><li>$date</li></ul>";
                    }
                    echo "</div>";

                    ?>

                    <?php

                    $rows = $conn->query("select itemsWith from visitor_entry");

                    echo "<div>";
                    echo "<h3>Items With</h3>";
                    while (list($items) = $rows->fetch_row()) {
                        echo "<ul><li>$items</li></ul>";
                    }
                    echo "</div>";

                    ?>

                    <?php

                    $rows = $conn->query("select timeIn from visitor_entry");

                    echo "<div>";
                    echo "<h3>Time In</h3>";
                    while (list($tim_In) = $rows->fetch_row()) {
                        echo "<ul><li>$tim_In</li></ul>";
                    }
                    echo "</div>";

                    ?>

                    <?php

                    $rows = $conn->query("select attendedTo from visitor_entry");

                    echo "<div>";
                    echo "<h3>Attended To</h3>";
                    while (list($attend) = $rows->fetch_row()) {
                        echo "<ul><li>$attend</li></ul>";
                    }
                    echo "</div>";

                    ?>

                    <?php

                    $rows = $conn->query("select timeout from visitor_entry");

                    echo "<div>";
                    echo "<h3>Time Out</h3>";
                    while (list($timeOut) = $rows->fetch_row()) {
                        echo "<ul><li>$timeOut</li></ul>";
                    }
                    echo "</div>";

                    ?>
                </div>

                </div>
            </div>
        </div>
    </div>
    <div class="footerdash">
    </div>
</body>

</html>