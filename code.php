<?php

session_start();
require 'con.php';
if (isset($_POST['Go'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $sname = mysqli_real_escape_string($conn, $_POST['sname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);


    $query = "INSERT INTO USERS (fname,sname,email,phone,location) VALUES ('$fname','$sname','$email','$phone','$location')";

    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        $_SESSION["message"] = "users Successfully";
        header("Location: users.php");
        exit(0);
    } else {
        $_SESSION["message"] = "users Successfully";
        header("Location: users.php");
        exit(0);
    }

}
