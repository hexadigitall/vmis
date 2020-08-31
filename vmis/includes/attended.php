<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="attended.css">
</head>

<body>


    <?php
    if (isset($_POST['update_btn'])) {
        $servername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "vmis_db";

        $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

        //if connection fails 
        if (mysqli_connect_error()) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        $search_bar = $_POST['search_visitor'];
        $attended_to = $_POST['attendedTo'];


        //checking if input bar is empty and updating current data into the database//

        if (empty($search_bar) || empty($attended_to)) {
            header("Location: ../visitor.php?visitorentryupdate=emptyfeild");
            exit();
        } else {
            $sql = "UPDATE visitor_entry SET timeout= CURTIME(), attendedTo='$attended_to' WHERE phoneNo = '$search_bar'";
            $query = mysqli_query($conn, $sql);

            if ($query) {
                // display data matching search data//

                $sql = "SELECT * FROM visitor_entry WHERE phoneNo=$search_bar";
                $result = mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($result);

                if ($queryResult > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                    
                <div>
                <img src='../upload/" . $row['fullname'] . "'>
                <p> Card No: " . $row['cardNo'] . "</p>
                <p> Full Name: " . $row['fullname'] . "</p>
                <p> Gender: " . $row['gender'] . "</p>
                <p> Address: " . $row['address'] . "</p>
                <p> Phone: " . $row['phoneNo'] . "</p>
                <p> Whom to see: " . $row['whomToSee'] . "</p>
                <p> Items with: " . $row['itemsWith'] . "</p>
                <p> Time in: " . $row['timeIn'] . "</p>
                <p> Time out: " . $row['timeout'] . "</p>
                <p>Visitor entry successfully updated !</p>
                </div>
        ";
                    }
                } else {
                    echo "
                <div>
                    <p>Information entered doesn't match any existing data !</p>
                </div>
                ";
                }
                exit();
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    } else {
        header("Location: ../visitor.php");
        exit();
    }
    ?>
</body>

</html>