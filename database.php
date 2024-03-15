<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "usertasks";





$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check if the connection was successful
if (!$conn) {
    // If connection failed, display an error message
    echo "Connection failed: " . mysqli_connect_error();
} else {
    // If connection succeeded, display a success message
    echo "";
}









?>












