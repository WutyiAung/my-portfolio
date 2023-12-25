<?php
session_start();
 $email = $_POST['email'];
 $password = $_POST['password'];

 if($email ==='wutyiaung132@gmail.com' and $password ==='123'){
    $_SESSION['user'] =['name' =>'wutyi aung'];
    header('location: ../profile.php');

 }else{
    header('location:../index.php?incorrect=1');
 }
 