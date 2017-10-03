<?php 
include '../conn.php' ;

if ($conn) {
    echo "connected" ; 
}else{
    echo "not connnectec" ; 
}

$name = $_POST['name'];

$relTyp = $_POST['relTyp'];
$optOne = $_POST['optOne'];
$optTwo = $_POST['optTwo'];
$optThree = $_POST['optThree'];
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

           $sql = "INSERT INTO `Pictures` (`Id`, `Name`, `Person_name`, `Relation`, `option_one` , `option_two` , `option_three` , `pation_id`) VALUES ('$random', '$image_Path' , '$name' , '$relTyp' , '$optOne' , '$optTwo' , '$optThree' ,$personID);";
           echo $sql;
          $result =  mysqli_query($conn,$sql);
         
          http://localhost/ow/admin/Admin_edit.php?edit_btn=4
          $goto =  "Admin_edit.php?edit_btn=".$personID ;
          header('Location: '.$goto);
        
    }


    






?>