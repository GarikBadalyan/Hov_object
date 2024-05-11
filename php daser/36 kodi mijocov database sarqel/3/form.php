<?php

$servername = "localhost";
$username = "root";
$password = "root";

try{
    $conn = new PDO("mysql:host=$servername;dbname=testsite",$username,$password);
    $sql = "CREATE DATABASE testDB2";
    $conn->exec($sql);
    echo "Databazan sarqvel e";
}
catch (PDOException $e){
    echo $e->getMessage();
};



?>