<?php

session_start();

$con= mysqli_connect('localhost','root','1234');
mysqli_select_db($con,'demo');

$first_name=$_POST['first_name'];
$password=$_POST['password'];


$s="select * from trydemo where first_name='$first_name' && password='$password'";

$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
   header('location:home.php');
}else{
    echo"Invalid";
    header('location:login.php');
}


?>