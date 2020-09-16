<?php

$user = "root";
$pass = "";
$db = "rawa_images";

$conn = mysqli_connect('localhost', $user, $pass, $db);
if(!$conn) {
    die(mysqli_error());
}




$blobimage = addcslashes(file_get_contents($_FILES['files']['tmp_name'][$key]));

foreach($_FILES['files']['tmp_name'] as $key => $tmp_name) (
    $blobimage = addcslashes(file_get_contents($_FILES['files']['tmp_name'][$key]));
    $filename = $_FILES['files']['name'][$key];
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    $desired_dir = "upload/";
    if(empty($errors)==true) {
        if(is_dir($desired_dir)==false) {
            mkdir("$desired_dir", 0700);
        }
        if(is_dir("$desired_dir".$filename.'.'.$ext)==false) {
            move_uploaded_file($_FILES['files']['tmp_name'][$key], $desired_dir.$filename.'.'.$ext);
        }else {
            $new_dir=$desired_dir.$filename.'.'.$ext.time();
            rename($desired_dir.$filename.'.'.$ext,$new_dir);
        }
    }else {
        print_r(errors);
    }
    if(empty($errors)) {
        $query="INSERT INTO tbl_raw_image (image) VALUES('$blobimage'); ";
        $rs = mysqli_query($conn, $query);
    }
)