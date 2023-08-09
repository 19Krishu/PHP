<?php
// Simple if & if...else
    $a=10;
    if($a<5)
    {
        echo $a;
    }
    else
    {
        echo "Not less than";
    }
    echo "<br><br>";


// if...elseif...else
    $a=70;
    if($a>60)
    {
        echo "Greater";
    }
    elseif($a<50)
    {
        echo "Not less than";
    }
    else 
    {
        echo "Not Compare";
    }
    echo "<br><br>";



// Switch...Case
    $num=4;
    switch($num)
    {
        case 1:
            echo "One";
            break;
        
        case 2:
            echo "Two";
            break;

        case 3:
            echo "Three";
            break;

        case 4:
            echo "Four";
            break;

        default :
            echo "No";
            break;
    }
?>