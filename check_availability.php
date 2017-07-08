<?php
include 'includes/dbh.inc.php';




if(!empty($_POST["user_uid"])) {
    $user_uid = mysqli_real_escape_string($conn, $_POST['user_uid']);
    $sql= " SELECT * FROM users WHERE user_uid ='$user_uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck < 1 ) {
        

        echo $resultCheck;
        } 
        
   
    }





if(!empty($_POST["user_email"])) {
    $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $sql= " SELECT * FROM users WHERE user_email ='$user_email'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck < 1 ) {
      
        echo $resultCheck ; }
    }

