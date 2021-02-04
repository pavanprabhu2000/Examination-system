<?php
include_once 'dbConnection.php';
session_start();
$email=$_SESSION['email'];

$id = $_POST['phone'];

$result =mysqli_query($con,"update user set mob = '$id' where email='$email'" );
$res = mysqli_query($con,"select mob from user where email='$email'");
 if($result)
    {
      echo "<script>alert('new phone number updated  to $id')</script>";
        echo "<script>window.open('account.php','_self')</script>";
    }
    else
    {
        echo"<script>alert('error')</script>";
    }







 ?>
