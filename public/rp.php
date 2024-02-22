<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$fname=$_POST['nm'];
$lname=$_POST['lm'];
$email=$_POST['email'];
$date=$_POST['dt'];
$text=$_POST['text'];
include 'database.php';

$sql="INSERT INTO `rm_16`(`name`, `lastname`, `email`, `date`, `textmessage`) VALUES ('$fname','$lname','$email','$date','$text')";
    $result=mysqli_query($conn,$sql);

    if($result){
        session_start();
        echo"<script>alert('Request submitted successfully...!');</script>";
      
    } 
}


?>