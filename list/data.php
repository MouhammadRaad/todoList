<?php
$title=$_POST['title'];




include '../database.php';
$sql="INSERT INTO todo(title)VALUES('$title')";

$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
else{
    // echo "Sorry We Can't Connect";
}

?>