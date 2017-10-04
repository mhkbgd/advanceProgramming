<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Memory Test Game</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- my stylshit -->
    <link href = "style/index.css"  rel="stylesheet" type="text/css">


  </head>


<body>
<?php include 'conn.php' ;
   
    $tmp = 0 ; 
    ?> 
 <!--
  <dev class ="col-md-4">
    

  </dev>
	 <dev class = "col-md-4" style="padding-top: 50px; text-align: center" >
   <h1>Select Patient</h1>      
    <p>Please enter a patient ID below</p>
   <?php include 'conn.php' ;
   
    $tmp = 0 ; 
  	?> 


 <form action = "game.php">
    <div class="form-group">
      
      <input name="patient" type="text" class="form-control" id="patient"><br>
      <button type="submit"   class="btn btn-info btn-md btn-block"  >PLAY</button>
    </div>
    
  </form>


  
    <a href="index.php"> <button type="submit"  class="btn btn-danger btn-lg btn-block" >Admin</button></a>
    </dev>

-->



<div class="container" style = "margin-top :20% ;">
  <section id="content">
    
  
  <form action="game.php" method="get">
      <h1>Enter patient ID</h1>
      <div>
       <input name="patient" type="text" class="form-control" id="patient"><br>
      </div>
      <div>
      </div>
      
      <div>
        <input type="submit" value="Play" />
        <a href="Index.php">Admin </a>
      </div>
    </form>
    
  </section><!-- content -->


</body>


 

  </body>

</html>
