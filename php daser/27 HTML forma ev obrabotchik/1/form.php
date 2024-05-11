<?php

if(empty($_POST['name']) or empty($_POST['age'])){  // stex url-um piti grenq localhost:4000/form.html heto sexmenq button@
    exit("mek kam erku tox chi lracvel");
}else{
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
};
echo $name . " " . $age;

?>