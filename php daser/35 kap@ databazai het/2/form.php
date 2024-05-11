<?php
$servername = "localhost";
$username = "root";
$password = "root";

$conn = mysqli_connect($servername,$password,$username);
if(!$conn){
    die(mysqli_connect_error());
}
echo "miacel e databazain"




?>