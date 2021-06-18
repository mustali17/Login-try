<?php

session_start();

$con= mysqli_connect('localhost','root','1234');
mysqli_select_db($con,'demo');

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$password=$_POST['password'];
$email=$_POST['email'];
$phn=$_POST['phn'];

$s="select * from trydemo where first_name='$first_name'";

$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
    echo"Username already taken";
}else{
    $reg="insert into trydemo(first_name,last_name,password,email,phn) values('$first_name','$last_name','$password','$email','$phn')";
    mysqli_query($con,$reg);
    echo"Registration succesful";
}


?>