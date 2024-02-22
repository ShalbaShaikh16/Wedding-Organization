<?php
 session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $lastnm=$_POST['lastnm'];
    $email=$_POST['email'];
    $noofguest=$_POST['option'];
    $mess=$_POST['text'];
   
    include 'database.php';

    $sql="INSERT INTO `mess_16`(`name`, `lastname`, `email`, `guest`, `textmessage`) VALUES ('$name','$lastnm','$email','$noofguest','$mess')";
    $result=mysqli_query($conn,$sql);
    if($result){
        
        echo"<script>alert('Message Sent successfully...!');</script>";
        
        
    } 
}




?>