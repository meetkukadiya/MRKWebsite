<?php

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
// $capcha = $_REQUEST['capcha'];

$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn, "wp");

$result= mysqli_query($conn , "SELECT * FROM wp_login WHERE (email='$email') AND password='$password' ");
$num=mysqli_num_rows($result);
if($num>=1)
{
    header("location: indexafter.html");
}
else{
    header("location: index.html");
}

?>