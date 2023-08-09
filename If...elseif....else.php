<?php
$a=5;
$b=15;
$c=100;
if ($a>$b && $b>$c)
    {
        echo "A is Greater than B and C";
    }
elseif ($b>$c && $c>$a)
    {
        echo "B is Greater than C and A ";
    }
elseif ($c>$a && $a>$b)
    {
        echo "C is Greater than C and A ";
    }
else
    {
        echo "All are same";
    }
?>