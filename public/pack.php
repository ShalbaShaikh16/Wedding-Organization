
 
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['names'];
    $email=$_POST['em'];
    $phn=$_POST['num'];
    $selpackage=$_POST['opt'];
    $date=$_POST['dt'];
   
    include 'database.php';

    $sql="INSERT INTO `pack`(`name`, `email`, `phone`, `package`, `date`)  VALUES ('$name','$email','$phn','$selpackage','$date')";
    $result=mysqli_query($conn,$sql);

    if($result){
              session_start();
              echo"<script>alert('Booking Done Successfully...!');</script>";
              
              
          } 
      else{
          echo"<script>alert('Incorrect Password');</script>";
      }
      
  }
    
  
?>
   
    

    