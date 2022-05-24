<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form>
    <label for="fname">First Name</label> <br> <br>
    <input type="text" id="fname" placeholder="first name"> <br><br>
    <label for="sname"> Last Name</label> <br><br>
    <input type="text" id="sname" placeholder="last name"> <br><br>
    <label for="email">Email</label> <br><br>
    <input type="text" id="email" placeholder="enter your email"> <br><br>
    <label for="phone">Phone number</label> <br><br>
    <input type="text" id="phone" placeholder="enter your phone number"> <br><br>
    <label for="location">Location</label> <br><br>
    <input type="text" id="location" placeholder="enter your location">
    <input type="submit" value="Go">
</form>

</body>
</html>
