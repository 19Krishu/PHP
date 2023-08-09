<?php
    function disp(&$a)
    {
        $a++;
    }
    $x=20;
    echo "Before Calling : ".$x."<br>";
    disp($x);
    echo "After Calling : ".$x;
?>