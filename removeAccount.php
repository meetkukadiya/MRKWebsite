<?php
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, "wp");

$result= mysqli_query($conn , "SELECT * FROM wp_temp ");
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
        $uname = $row['uname'];
    }
}
mysqli_query($conn, "DELETE FROM `wp_login` WHERE uname='$uname' OR email='$uname' ");
mysqli_query($conn, "DELETE FROM `wp_temp` ");

header("location: wp.html");

mysqli_close($conn);
?>