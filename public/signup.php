<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$name=$_POST['nm'];
$email=$_POST['email'];
$pass=$_POST['pass'];
include 'database.php';


$sql="INSERT INTO `user16` (`name`, `email`, `pass`, `dt`) VALUES ('$name', '$email', '$pass',current_timestamp());";
$result=mysqli_query($conn,$sql);


    if($result){
        session_start();
        
        header("location:login.html");
    } 
else{
    echo"<script>alert('Incorrect Password');</script>";
}
}
?>