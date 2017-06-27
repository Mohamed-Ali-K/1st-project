<?php

if (isset($_POST['submit'])) 
 {
    include_once 'dbh.inc.php' ;
    $user_frist = mysqli_real_escape_string($conn, $_POST['user_frist']);
    $user_last = mysqli_real_escape_string($conn, $_POST['user_last']);
    $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $user_uid = mysqli_real_escape_string($conn, $_POST['user_uid']);
    $user_password = mysqli_real_escape_string($conn, $_POST['user_password']);
    
    // error handler
    // checkfor empty fields
    if (empty($user_frist) || empty($user_last) || empty($user_email) || empty($user_uid) || empty($user_password)) 
        {
           
        header("location: ../signup.php?signup=empty");
         exit();
        } 
    
         else {
   //check if input character are valid
            if (!preg_match("/^[a-zA-Z]*$/" , $user_frist) || !preg_match("/^[a-zA-Z]*$/" , $user_last )) {
                 header("location: ../signup.php?signup=invalide");
            exit();
            }
            else {
                // check if email is valid 
                if (!filter_var($user_email, FILTER_VALIDATE_EMAIL )) {
                        header("location: ../signup.php?signup=Email");
                        exit();
                } else {
                  $sql ="SELECT * FROM users WHERE user_uid='$user_uid'";
                  $result =mysqli_query($conn, $sql);
                  $resultCheck = mysqli_num_rows($result);
                     if ($resultCheck > 0) {
                          header("location: ../signup.php?signup=usertaken");
                        exit();
                     }else {
                         //hashing the password 
                         $hashedPwd = password_hash($user_password, PASSWORD_DEFAULT);
                         //insert the user into the database 
                         $sql ="INSERT INTO users (user_frist, user_last, user_email, user_uid, user_password) 
                                           VALUES ('$user_frist', '$user_last', '$user_email', '$user_uid', '$hashedPwd') " ;
                                           $result = mysqli_query($conn, $sql);
                                          header("location: ../signup.php?signup=success");
                        exit(); 
                     }
                }
            }
    }

   
 }
else {
    header("location: ../signup.php");
    exit();
  }