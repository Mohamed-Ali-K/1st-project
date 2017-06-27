<?php
include 'dbh.inc.php';
session_start();
    $idt = $_GET['idt'];
   
    $sql = "DELETE FROM task WHERE idt=$idt
    ";
    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}



    #var_dump($sql);

   # $row = $result->fetch_assoc();
header('location: ../affiche.php') ;
exit();