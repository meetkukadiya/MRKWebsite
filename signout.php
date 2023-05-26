<?php
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, "wp");

$result= mysqli_query($conn , "DELETE FROM `wp_temp` ");
header("location: wp.html");

mysqli_close($conn);
?>