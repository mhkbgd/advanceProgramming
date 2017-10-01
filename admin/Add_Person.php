<?php 
include '../conn.php';
$name = $_GET['first_name'];
$surename = $_GET['Last_name'];
$age = $_GET['Age'];
$tmp = $_GET['max_id'];
$tmp++;


echo $name . "</br>" . $surename . "</br>" . $age . "</br>" . $tmp ; 

$sql_update_user = "INSERT INTO users (`Id`, `First_name`, `Last_name`, `Age`) VALUES ('".$tmp."', '".$name."', '".$surename."', '".$age."');";

$result = mysqli_query($conn, $sql_update_user);

header('Location: index.php');


?>