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
 <div class=" col-md-12" style="text-align: center;">
    <h1>Select Patient</h1>      
    <p>Please enter a patient name below</p>
  </div>
  <dev class ="col-md-3">
    

  </dev>
	 <dev class = "col-md-6" >
  
   <?php include '../conn.php' ;
   
    $tmp = 0 ; 
  	?> 


 <form action = "game.php">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input name="patient" type="text" class="form-control" id="usr"><br>
      <button type="submit"  class="btn btn-info btn-md btn-block"  >PLAY</button>
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
