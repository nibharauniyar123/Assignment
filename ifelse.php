<?php
//if else in php
$user = $_post["username"];
$pass = $_post["password"];

if($user =="admin" && $pass =="123"){
    header("location:welcome.php");

} else{
    header("location:login.php?error=invalid credentials");
}