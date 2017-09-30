<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  
 <link href= "index.css" rel = "stylesheet" >  


  </head>
  <body > 
  <?php include '../conn.php' ;
    include 'header.php';
    $tmp = 0 ; 
  ?>   
 



<div class="container">
  <h2 class = "table_title">Current Pationts</h2>
          
  <table class="table">
    <thead>
      <tr>
        <th class = "table_content" style="text-align: center;">Firstname</th>
        <th class = "table_content" style="text-align: center;">Lastname</th>
        <th class = "table_content" style="text-align: center;">Age</th>
        <th class = "table_content"></th>
      </tr>
    </thead>
    <tbody>

<?php 
    $sql = "SELECT *  FROM users";
    echo $sql;
    $result = mysqli_query( $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
?>
       
            <tr>
                <td class = "table_content" style="text-align: center;"><?php echo $row['First_name'] ?></td>
                <td class = "table_content" style="text-align: center;"><?php echo $row['Last_name']  ?> </td>
                <td class = "table_content" style="text-align: center;"><?php echo $row['Age']  ?></td>
                <td style="text-align: center;">
                  <?php 

                    if ($tmp < $row['Id']){ 

                      $tmp = $row['Id'] ; 
                    }


                  ?>
                    <form action = "Admin_edit.php" method = "get">
                        <input name="edit_btn" type = "text" value = "<?php echo $row['Id'] ?>" id = "<?php echo $row['Id'] ?>" style="visibility:hidden;width:10px;" >
                        <button type="submit"  class="btn btn-primary btn-xs" >Edit</button>
                    </form>

                </td>
            </tr>
       


<?php 
       }



    }

?>
   <form action = "Add_Person.php" method = "get">
   <tr>
   <td class = "table_content" style="text-align: center;"><input placeholder="First name " name = "first_name" id="first_name" style= "border: 0;outline: 0; background: transparent; border-bottom: 1px solid white;text-align:center;"></input></td>
   <td class = "table_content" style="text-align: center;"><input placeholder="Last name " name = "Last_name" id="Last_name" style= "border: 0;outline: 0; background: transparent; border-bottom: 1px solid white;text-align:center;"></input></td>
   <td class = "table_content" style="text-align: center;"><input placeholder="Age " name = "Age" id="Age" style= "border: 0;outline: 0; background: transparent; border-bottom: 1px solid white;text-align:center;"></input></td>
   <td style="text-align: center;">
       
           <input name="max_id" type = "text" value = "<?php echo $tmp ?>" style="visibility:hidden;width:10px;" >
           <button type="submit"  class="btn btn-primary btn-xs" >ADD</button>
       



      

   </td>
</tr>
<form action = "Add_Person.php" method = "get">
    </tbody>
  </table>
</div>





    <script src="js/creative.min.js"></script>

  </body>

</html>
