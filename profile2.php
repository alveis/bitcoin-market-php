<?php 
session_start(); 
include('connect.php'); 
$username=session['username']; 
$result  =  mysql_query("SELECT  *  FROM  member  WHERE  username='$username'"); 
$num_rows  =  mysql_num_rows($result); 
if  ($num_rows)  { header("location:  index.php?remarks=failed");
 } else { $fname=$_POST['fname']; 
 $lname=$_POST['lname']; 
 $address=$_POST['address']; 
 $username=$_POST['username']; $password=$_POST['password']; 
 mysql_query("INSERT  INTO  member(fname,  lname,  address,username,  password)VALUES('$fname',  '$lname','$address',  '$username',  '$password')");
 header("location:  index.php?remarks=success"); }
 
 ?>
 