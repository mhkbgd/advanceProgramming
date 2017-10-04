<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    

    <title>Patient Selection</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href= "style.css" rel = "stylesheet" >

  </head>


<body>
 <div class=" col-md-12">
   
  </div>
  <dev class ="col-md-4">
    

  </dev>
	 <dev class = "col-md-4" style="padding-top: 50px; text-align: center" >
   <h1>Select Patient</h1>      
    <p>Please enter a patient ID below</p>
   <?php include '../conn.php' ;
   
    $tmp = 0 ; 
  	?> 


 <form action = "http://localhost/advanceProgramming/game.php">
    <div class="form-group">
      
      <input name="patient" type="text" class="form-control" id="usr"><br>
      <button type="submit" name ="play"  class="btn btn-info btn-md btn-block"  >PLAY</button>
    </div>
    
  </form>

<!--<?php 
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
?>
        

          <form action = "game.php" method = "get">
                       
                        <button type="submit"  class="btn btn-info btn-md btn-block"  > <?php echo $row['First_name'] ?>
                          <input name="patient" type = "text" value = "<?php echo $row['Id'] ?>" id = "<?php echo $row['Id'] ?>" style="visibility:hidden; width: 0px" >
                        </button><br>
          </form> 
       
        


<?php 
       }



    }
    ?>
    -->
  
    <a href="../"> <button type="submit"  class="btn btn-danger btn-lg btn-block" href = "../" >Admin</button></a>
    </dev>

</body>


 

  </body>

</html>
