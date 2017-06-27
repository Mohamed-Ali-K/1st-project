<?php
#session_start();
 #$user_id = $_SESSION['user_id'] ;
include 'dbh.inc.php';
if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $description = $_POST['description'];
     $finishing_date = $_POST['finishing_date'];
     $user_id = $_POST['user_id'];
  
  
   $sql = "INSERT INTO task(user_id, name, description, finishing_date)
    VALUES ('$user_id','$Name','$description','$finishing_date')";
    #var_dump($sql);
    $result = $conn->query($sql);
   # $row = $result->fetch_assoc();
header('location: ../affiche.php') ;
}
else {echo " errey" ;}