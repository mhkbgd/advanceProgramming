
	 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

	 
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script type="text/javascript" src="script.js"></script>
	<?php 

	include '../conn.php'; 
	include 'header.php';

	$_SESSION["patient_id"] = $_GET['patient'] ; 
	$tmp = 0;

	$sql = "SELECT * from Users join Pictures where Users.Id = Pictures.pation_id and Users.Id =".$_SESSION["patient_id"].";";
	
	$result = mysqli_query($conn, $sql);
    	if (mysqli_num_rows($result) > 0) {
        		while($row = mysqli_fetch_assoc($result)) {
		
						$tmp++;
	
			
        	 ?>

			<div class="col-md-12" style="padding-bottom: 20px" id= <?php echo $tmp ?> >

				<div class="col-md-1">
					
				</div>

				<div class="img-container col-md-4" >
	            	<img class="img-responsive" src=http://localhost/advanceProgramming/admin/<?php echo $row['Name']; ?>>
	        	</div>

	        	<div class="col-md-7">
	        		<h2>Who is this person</h2>
	        	</div>

			</div>


        	 <?php

        	        }};

         ?>
