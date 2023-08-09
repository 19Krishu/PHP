<?php
    $arr=array(1,2,3,4,5,6,7,8,9,10);
    echo $arr[5];
    print_r($arr);

    echo "<br><br>";

    foreach($arr as $i=>$i_value)
    {
        echo $i."=".$i_value."<br>";
    }

    echo "<br><br>";
    
    $arr=array("a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>5);
    foreach($arr as $i=>$i_value)
    {
        echo $i."=".$i_value."<br>";
    }
?>