<?php

session_start();



$con = mysqli_connect('localhost','root','','UserRegistration');

$name =$_POST['username'];
$pass=$_POST['password'];


$s ="select * from usertable1 where username = '$name' && password= '$pass' ";
$result = mysqli_query ($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){

$_SESSION['name']=$name;

echo  "<script type=\"text/javascript\">".
      "alert('Login Successful');".
      "window.location='home.php';".
      "</script>";

}
else{
  /*$reg="insert into usertable1 (username,password,mobile,email) values ('$name','$pass','$mob','$email')";
  mysqli_query($con,$reg);
  echo  "<script type=\"text/javascript\">".
        "alert('Registration Successful');".
        "window.location='login.php';".
        "</script>";*/
        echo  "<script type=\"text/javascript\">".
              "alert('Invalid Credentials');".
              "window.location='login.php';".
              "</script>";

}
?>
