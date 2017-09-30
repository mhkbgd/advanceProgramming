<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Pationt's info</title>
  
  
  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <link rel="stylesheet" href="css/style.css">
    
  
</head>





<body  style="background_color:pink;">
<?php include '../conn.php'; 
include 'header.php';
$_SESSION["person_id"]  = $_GET['edit_btn'] ; 
$tmp = 0 ; 
 


?>

  <section class="container">
    
    <div class="row active-with-click">
     



    <?php 
    $sql = "SELECT * from Users join Pictures where Users.Id = Pictures.pation_id and Users.Id =".$_SESSION["person_id"].";";
    
    $result = mysql_query( $sql);
    if (mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_assoc($result)) {
            
    ?>
    


<div class="col-md-4 col-sm-6 col-xs-12">
<article class="material-card Red">
    <h2>
        <span> <?php echo $row['Relation']; ?></span>
        <strong>
            <i class="fa fa-fw fa-star"></i>
           <?php echo $row['Person_name']; ?>
        </strong>
    </h2>
    <div class="mc-content">
        <div class="img-container">
            <img class="img-responsive" src=" <?php echo $row['Name']; ?>">
        </div>
        <div class="mc-description">
            If you are sure that you want to remove this reletive from the database please tab on the remove button below . 
        </div>
    </div>
    <a class="mc-btn-action">
        <i class="fa fa-bars"></i>
    </a>

    <?php 

            if ($tmp < $row['Id'] ){
                $tmp = $row['Id'] ; 

            }


?>
    <div class="mc-footer">
     <form action = "removeAction.php" method = "get">   
    <button type="submit" class="btn btn-danger" >Remove</button>
    <input id = "<?php  echo $row['Id'] ?>" value = "<?php echo $row['Id'] .",". $_SESSION["person_id"] ?>" style= "visibility :hidden ;" name = "id"></input>
    </form>
    </div>
</article>
</div>

<?php }} ?> 



<div >




       
    
















</section>


<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" style=" width: 90%; margin-left: 5%" data-toggle="modal" data-target="#myModal">Add A New Reletive</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New Reletive</h4>
      </div>
      <div class="modal-body">
            

            <form action="addRel.php" method="post" id ="form" enctype="multipart/form-data">
                <input placeholder = "Name :" name = "name"  style="width:46%; height :30px;margin-left :27%;"  ></input></br></br>
                <input placeholder = "Type of the relationship" name = "relTyp" style="width:46%; height :30px;margin-left :27%;"></input> </br></br>
                <p><font size = 2.7 >Note : Before uploading u may rename the photo to the relation type ex : father.png , mother.jpg</font></p>
                <input name = "file" id = "file" type = "file" style="margin-left :27%;"></input> 
                <input name = "personID" id= "personID" value = "<?php echo $_SESSION["person_id"]   ?>" style="visibility:hidden " ></input>
                <input name = "maxID" id= "maxID" value = "<?php  echo $tmp ?>  " style="visibility:hidden " ></input>
                

            </form>







      </div>
      <div class="modal-footer">
      
      <button type="submit" class="btn btn-primary btn-lg btn-block" name = "button" onclick=document.getElementById("form").submit() style=" width: 80%; margin-left: 10%"> Add</button>
      </div>
    </div>

  </div>
</div>















<script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
    <script  src="jsFile/index.js"></script>

</body>
</html>


