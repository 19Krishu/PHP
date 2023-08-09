<?php
    extract($_REQUEST);
    if(isset($submit))
    {
        if(!preg_match("/^[a-zA-Z-]*$/",$nm))
        {
            session_start();
            $_SESSION['msg']="Only character and spaces allowed";
            header("Location:Formm1.php");
        }
        else
        {
            $_SESSION['msg'] = $nm;
            header("Location:Formm1.php");
        }
    }
?>
