<?php

$conn = mysqli_connect('localhost','root','','test');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


if($conn->connect_error){
    die("connection Failed: ".$conn->connect_error);
}
else{
    $stmt = "INSERT INTO registration VALUES('','$username','$email','$password')";
    mysqli_query($conn, $stmt);
    echo "<script>alert('data interted/registred');</script>";
    
}
?>