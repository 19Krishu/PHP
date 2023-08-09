<?php
    extract($_POST);
    echo $name;
    echo $pass;
    if($name=="admin" && $pass=="admin")
    {
        session_start();
        $_SESSION['name']=$name;
        header("location:Welcome.php");
    }    
    else
    {
        header("location:Session_form.php");
    }
?>