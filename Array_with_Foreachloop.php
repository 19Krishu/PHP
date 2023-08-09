<?php
    $arr=array(1,2,3,4,5,6,7,8,9,10);

    echo $arr[5];
    echo "<hr>";
    print_r($arr);
    echo "<hr>";

    foreach($arr as $i){
        echo $i. "<br>";
    }

    echo "<hr>";

    foreach($arr as $i=>$i_value) {
        echo $i. "=" .$i_value. "<br>";
    }
    echo "<hr>";

    $arr=array("a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>5);

    foreach($arr as $i=>$i_value) {
        echo $i. "=" .$i_value. "<br>";
    }