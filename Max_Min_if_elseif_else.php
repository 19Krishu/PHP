<?php
$a=10;
$b=8;
$c=5;
if($a>$b && $b>$c)
    {
        echo "A and B is greater than C";
    }
elseif($b>$c && $c>$a) 
    {
        echo "B and C is greater than A";
    }
elseif($c>$a && $a>$b)
    {
        echo "C and A is greater than B";
    }
else
    {
        echo "A , B and C are same";
    }
?>