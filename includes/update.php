<?php

include 'dbh.inc.php';
if (isset($_POST['submit'])) {
    $idt = $_POST['idt'];
    echo $idt . "<br>";
    $name = $_POST['Name'];
    echo $name . "<br>" ;
    $description = $_POST['description'];
    echo $description . "<br>" ;
    $finishing_date = $_POST['finishing_date'];
    echo $finishing_date ;
   
    $sql = "UPDATE task SET name='$name', description='$description', finishing_date='$finishing_date' WHERE idt='$idt'
    ";
    if ($conn->query($sql) === TRUE) {
    echo "Record upadated successfully";
} else {
    echo "Error upadated record: " . $conn->error;
}



    #var_dump($sql);

   # $row = $result->fetch_assoc();
header('location: ../affiche.php') ;
}
