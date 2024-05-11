<?php
$servername = "localhost";
$username = "root";
$password = "root";

$conn = new mysqli($servername,$password,$username);
if($conn->connect_error){
    die("$conn->connect_error");
}
echo "miacel e databazain"




?>