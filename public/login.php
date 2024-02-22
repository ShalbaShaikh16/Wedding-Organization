<?php
include 'database.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){

$email=$_POST['email'];
$pass=$_POST['pass'];
$login=false;


$sql="SELECT * FROM user16 WHERE email='$email' and pass='$pass'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

if($num==1){
  $login=true;

}
if($login){
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['email']=$email;
    echo "Success";
    
}
}





?>