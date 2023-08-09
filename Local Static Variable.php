<?php
function disp()
{
    static $a=10;
    echo $a;
    $a++;
}
disp();
disp();
disp();
?>