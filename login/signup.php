<?php
include("../database.php");

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

  
    $sql = "SELECT * FROM signup WHERE username='$username'";
    $result_username = mysqli_query($conn, $sql);
            $count_user = mysqli_num_rows($result_username);

  
  $sql = "SELECT * FROM signup WHERE email='$email'";
    $result_email = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result_email);

    if ($count_user == 0 && $count_email == 0) {  
    
        $sql_insert = "INSERT INTO signup (username, email, password) VALUES ('$username', '$email', '$password')";
        $result_insert = mysqli_query($conn, $sql_insert);
        if ($result_insert) {
            header("Location: ../list/index.php");
            exit(); 
        } else {
        
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        
        if ($count_user > 0) {
            echo  '<script>window.location.href = "index.php"; alert("Username already exists!!");</script>';
        }
        if ($count_email > 0) {
            echo  '<script>window.location.href = "index.php"; alert("Email already exists!!");</script>';
        }
    }     
}
?>
