<?php 
	include 'conn.php';

    $userId = $_POST['userId'];
	$attempts = $_POST['attempts'];
   $time = $_POST['time'];
	$questions = $_POST['questions'];

	$sql_update_user = "INSERT INTO participation (`userID`, `attempts`, `time`, `questions`) VALUES ('".$userId."', '".$attempts."', '".$time."', '".$questions."');";

	$result = mysqli_query($conn, $sql_update_user);

//header('Location: index.php');
  ?>