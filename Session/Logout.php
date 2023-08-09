<?php
    session_start();
    //unset($_SESSION['name'])
    Session_destroy();
    header("location:Session_form.php");
?>