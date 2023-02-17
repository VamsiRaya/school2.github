<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];


$conn=mysqli_connect('localhost','root','','school','3306') or die("Connection failed");
$query="insert into school (name,email,password,phoneNumber) values ('{$name}','{$email}','{$password}','{$phone}')";
$rs=mysqli_query($conn,$query) or die("Query Failed");

?>