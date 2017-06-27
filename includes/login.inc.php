<?php
session_start();

if (isset($_POST['submit'])) {


    include 'dbh.inc.php';

    
    $user_uid = mysqli_real_escape_string($conn, $_POST['user_uid']);
    $user_password = mysqli_real_escape_string($conn, $_POST['user_password']);
    //error hadlers
    //check if inputs are empty 
    echo $user_uid ;
    echo $user_password;

if (empty($user_uid) || empty($user_password)) {
    header('location: ../index.php?login=emty');
    exit();
   
}else {
    
$sql= " SELECT * FROM users WHERE user_uid ='$user_uid' OR user_email='$user_uid'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck < 1 ) {
    header('location: ../index.php?login=error1');
    exit();
     } else {
         if ($row = mysqli_fetch_assoc($result) ) {
           // de-hashing the password
           $hashedPwdCheck = password_verify($user_password, $row['user_password']);
           if ($hashedPwdCheck == false ) {
                header('location: ../index.php?login=error_password');
                exit();
           } elseif($hashedPwdCheck == true) {
                // Log in the user here
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_frist'] = $row['user_frist'];
                $_SESSION['user_email'] = $row['user_email'];
                $_SESSION['user_password'] = $row['user_password'];
                header('location: ../index.php?login=success');
                exit();
           }
         }
     }
  }
}else {
    header('location: ../index.php?login=error');
    exit();
}