<?php
$a=20; //Global Variable
function disp()
{
    $b=10; //Local Variable
    echo "Inside Function Local variable : ".$b."<br>";
}
disp();
echo "Outside Function Global Variable : ".$a;
?>