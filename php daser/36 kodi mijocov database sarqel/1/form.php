<?php

$servername = "localhost";
$username = "root";
$password = "root";
$conn = new mysqli($servername,$username,$password);
if($conn->connect_error){
    die($conn->connect_error);
}
$sql1 = "CREATE DATABASE tesDB";
if($conn->query($sql1)===TRUE){
    echo "stexcvel e nor anunov database";
}else{
    echo $conn->error;
}




?>