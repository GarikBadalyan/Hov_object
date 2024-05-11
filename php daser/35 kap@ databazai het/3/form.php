<?php
$servername = "localhost";
$username = "root";
$password = "root";

try{
    $conn = new PDO("mysql:host=$servername; dbname=testsite1", $username,$password);
    echo "databazain miacel e";
}catch (PDOException $e){
    echo "error" . $e->getMessage();
}




?>