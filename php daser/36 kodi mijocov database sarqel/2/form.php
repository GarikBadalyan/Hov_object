<?php

$servername = "localhost";
$username = "root";
$password = "root";
$conn = mysqli_connect($servername,$username,$password);
if($conn->connect_error){
    die(mysqli_connect_error());
}
$sql1 = "CREATE DATABASE tesDB1111";
if(mysqli_query($conn,$sql1)){
    echo "stexcvel e nor anunov database";
}else{
    echo mysqli_error($conn);
}




?>