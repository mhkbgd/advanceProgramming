<?php
 $mysql_hostname = "localhost";
 $mysql_user = "root";
 $mysql_password = "";
 $mysql_database = "my_db";

// Create connection
$conn=mysqli_connect($mysql_hostname, $mysql_user, $mysql_password); 
$db_selected = mysqli_select_db($conn,$mysql_database); 


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>