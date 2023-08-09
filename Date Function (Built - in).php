<?php
    echo "1. Check Date";
    echo "<br>";
    var_dump(checkdate(12,31,2000));
    echo "<br>";
    var_dump(checkdate(02,19,2004));
    echo "<br>";
    var_dump(checkdate(11,14,2008));


        echo "<br>";
        echo "<br>";


    echo "2. Get Date";
    echo "<br>";
    print_r (getdate());


        echo "<br>";
        echo "<br>";


    echo "3. Time";
    echo "<br>";
    $time = time();
    echo ($time);


        echo "<br>";
        echo "<br>";

    echo "4. Date";
    echo "<br>";
    echo (date("1"));
    echo "<br>";
    echo (date("l dS \of F Y h:i:s A"));


?>