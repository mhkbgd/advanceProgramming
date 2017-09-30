<?php 
include '../conn.php' ;

if ($conn) {
    echo "connected" ; 
}else{
    echo "not connnectec" ; 
}

$name = $_POST['name'];

$relTyp = $_POST['relTyp'];

$personID = $_POST['personID'];



$file = $_FILES['file']['tmp_name'];





    $image_name = addslashes($_FILES['file']['name']);



    $uploadDir = 'Uploaded_images/';

    $random = md5($image_name).uniqid();


    if ($image_name = ""){

        //go back 
    }else{

        $image_Path = $uploadDir.$random.$image_name;
        echo $image_Path ; 

           $tmpName = $_FILES['file']['tmp_name'];
        
           $fileSize = $_FILES['file']['size'];
        
           $fileType = $_FILES['file']['type'];
        
           $result = move_uploaded_file($tmpName,$image_Path);

           $sql = "INSERT INTO `Pictures` (`Id`, `Name`, `Person_name`, `Relation`, `pation_id`) VALUES ('$random', '$image_Path' , '$name' , '$relTyp' , $personID);";
           echo $sql;
          $result =  mysql_query($sql);
         
          http://localhost/ow/admin/Admin_edit.php?edit_btn=4
          $goto =  "Admin_edit.php?edit_btn=".$personID ;
          header('Location: '.$goto);
        
    }


    






?>