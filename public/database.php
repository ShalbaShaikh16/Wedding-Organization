<?php
$server="localhost";
$username="root";
$password="";
$database="users";

$conn=mysqli_connect($server,$username,$password,$database);

if(!$conn)
{
    echo"Connection unsuccessful<br>";
}
else{
    //echo"connection successful<br>";
}
?>