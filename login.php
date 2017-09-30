<?php 


    if (isset($_GET['username']) && isset($_GET['password'])){


    $usr_name = $_GET['username'] ; 
    $usr_pass = $_GET['password'] ; 
    
    }

    if ($usr_name == "admin" &&  $usr_pass == "abc123"){
        header('Location: admin/index.php');
    }else {
        header('Location: index.php');
    }

?>