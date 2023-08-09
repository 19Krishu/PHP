<?php
    $a=10;
    $b=5;
    $choice=$a && $b;
    switch($choice)
    {
        case 1:
            echo "Addition : ";
            break;

        case 2:
            echo "Substraction : ";
            break;

        case 3:
            echo "Division : ";
            break;

        case 4:
            echo "Multiplication : ";
            break;

        default:
            echo "None of the above";
            break;
    }
?>