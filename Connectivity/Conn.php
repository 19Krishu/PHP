<?php
    $conn = mysqli_connect('localhost','root','','employee');
    //$db = mysqli_connect_db($conn,'employee');
    if($conn)
    {
        echo "Connection Established";
    }
    else
    {
        echo "Connection not Established";
    }
?>