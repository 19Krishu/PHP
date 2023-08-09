<?php
    $arr=array(4,7,3);
    //sort($arr);
    //print_r($arr);
    echo "<b>Array Ascending - sort (Index Matters) : </b>";
    sort ($arr);
    print_r($arr);
    
    echo "<br><br>";

    $arr1=array(4,7,3);
    echo "<b>Array Descending - rsort (Index Matters) : </b>";
    rsort($arr1);
    print_r($arr1);

    echo "<br><br>";

    $arr2=array("a"=>4,"b"=>7,"c"=>3);
    echo "<b>Associative Array Ascending - asort (Value Matters) : </b>";
    asort($arr2);
    print_r($arr2);

    echo "<br><br>";

    $arr3=array("a"=>4,"b"=>7,"c"=>3);
    echo "<b>Associative Array Descending - arsort (Value Matters) : </b>";
    arsort($arr3);
    print_r($arr3);

    echo "<br><br>";

    $arr4=array("a"=>4,"b"=>7,"c"=>3);
    echo "<b>Key Ascending - ksort (Key Matters) : </b>";
    ksort($arr4);
    print_r($arr4);

    echo "<br><br>";

    $arr5=array("a"=>4,"b"=>7,"c"=>3);
    krsort($arr5);
    print_r($arr5);

?>