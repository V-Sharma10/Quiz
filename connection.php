<?php

session_start();



$con = mysqli_connect('localhost','root','','UserRegistration');
/*
mqsqli_select_db($con, 'UserRegistration');*/
/*
if($con){
  echo "connection successful";
}
else {

    echo "no connection";
}*/

$name =$_POST['username'];
$pass=$_POST['password'];
$mob=$_POST['mobile'];
$email=$_POST['email'];

$s ="select * from usertable1 where username = '$name'";
$result = mysqli_query ($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){
echo "Username Already Taken.";
}
else{
  $reg="insert into usertable1 (username,password,mobile,email) values ('$name','$pass','$mob','$email')";
  mysqli_query($con,$reg);
  echo  "<script type=\"text/javascript\">".
        "alert('Registration Successful');".
        "window.location='login.php';".
        "</script>";
  /*header('location:login.php');*/
}
?>
