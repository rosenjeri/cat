<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "Cat";

$conn = new mysqli($servername, $username, $password, $db);

$sql = "CREATE Database Cat";

if (mysqli_query($conn,$sql)) {
    echo "Cat created successfully";
} else {
    echo "error. $conn->error";
}
mysqli_close($conn);
?>

