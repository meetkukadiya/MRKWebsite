<?php

$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$password1 = $_REQUEST['password1'];


$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn, "wp");

$result= mysqli_query($conn , "INSERT INTO wp_login (username, email, password, password1) VALUES ('$username', '$email', '$password', '$password1') ");

mysqli_close($conn);
header("location: index.html");

?>