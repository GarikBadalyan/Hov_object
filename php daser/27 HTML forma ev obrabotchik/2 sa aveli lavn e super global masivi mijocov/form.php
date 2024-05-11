<?php

if(!empty($_POST)){
    if(empty($_POST['name'])){
        $errors[]='name dasht@ datark e';
    }
    if(empty($_POST['age'])){
        $errors[]= "age -@ datark e";
    }elseif(!is_numeric($_POST['age'])){
        $errors[] = "age dasht@ tiv chi grvac";
    }
    if(!empty($errors)){
        foreach ($errors as $err){
            echo " <p style='color: red'>$err </p> <br>";
        }
    }
}

echo "<h1>duq hajoxutyamb ancaq </h1>"



?>