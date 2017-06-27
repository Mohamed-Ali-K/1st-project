<?php
$dbServername='localhost';
$dbUsername='root';
$dbPassword='';
$dbName='id2083050_loginsystem';


 return $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if (!$conn) {
    die("connction failled" . mysqli_connect_error());
    }



