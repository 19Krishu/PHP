<?php
function swapping($a,$b)
{
    $c=$a;
    $a=$b;
    $b=$c;

    echo "A : " .$a;
    echo "<br>";
    echo "B : " .$b;
}
swapping(10,20);
?>
