<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['nm'];
    $email=$_POST['email'];
    $number=$_POST['no'];
    $message=$_POST['text'];
    include 'database2.php';

    $sql="INSERT INTO `contact`(`name`, `email`, `phone`, `text`) VALUES ('$name','$email','$number','$message')";
    $result=mysqli_query($conn,$sql);
    if($result){
        session_start();
        echo"<script>alert('Message Sent Successfully...!');</script>";
        
        
    } 
else{
    echo"<script>alert('Incorrect Password');</script>";
}

    
}



?>