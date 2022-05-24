<?php

$conn = mysqli_connect("localhost", "root", "", "Cat");
if (!$conn) {
    die('Connection Failed' . mysqli_connect_error());
}

