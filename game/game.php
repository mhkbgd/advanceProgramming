	<?php include '../conn.php'; 
	include 'header.php';
	$_SESSION["patient_id"] = $_GET['patient'] ; 

	$sql = "SELECT * from Users join Pictures where Users.Id = Pictures.pation_id and Users.Id =".$_SESSION["patient_id"].";";
	
	 $result = mysqli_query($conn, $sql);
    	if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {

	
			


        	 ?>
			<div class="img-container">
            <img class="img-responsive" src=" <?php echo $row['Name'; ?>">
        	</div>

        	 <?php

        	        }};

         ?>
