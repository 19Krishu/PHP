<?php
    //print_r($_POST);
    $name = $_GET['Name'];
    echo "Name : ".$name."<br>";
    //echo "Name : ".$_POST['Name'];

    $name1 = $_GET['Gender'];
    if($name1=="Male")
    {
        echo "Gender : Male";
    }
    else
    {
        echo "Gender : Female";
    }

    echo "<br>";

    foreach($_GET['c'] as $row)
    {
        echo "Education : ".$row;
    }

    echo "<br>";

    foreach($_GET['c1'] as $row)
    {
        echo "City : ".$row;
    }
?>