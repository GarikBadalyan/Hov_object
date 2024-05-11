<?php
session_start();

$_SESSION["favcolor"] = "red" . "<br>";
$_SESSION["favpage"] = "home";
echo $_SESSION["favcolor"] . "<br>";
echo $_SESSION["favpage"] . "<br>";





?>