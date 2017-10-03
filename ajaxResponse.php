<?php include 'conn.php' ;

	 if (isset($_GET['patient_id'])) {

	    $sql = "SELECT image_location,answer,option1,option2 FROM pictures WHERE patient_id=".$_GET['patient_id'];
	    
	    $result = mysqli_query($conn, $sql);

	    $encode = array();

		while($row = mysqli_fetch_assoc($result)) {
		   $encode[] = $row;
		}

		echo json_encode(array("quizlist" => $encode));
	}
?>   
