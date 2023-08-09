<?php
    echo "<b>1. Arithmetic Operator</b><br>";
    $a=50;
    $b=20;
    echo "-Addition : ".$a+$b. "<br>";
    echo "-Substraction : ".$a-$b. "<br>";
    echo "-Multication : ".$a*$b. "<br>";
    echo "-Division : ".$a/$b. "<br>";
    echo "-Modulas : ".$a%$b. "<br>";
    echo "-Exponentation : ",$a**$b. "<br>";

    echo "<br><b>2. Comparision Operator</b><br>";
    $x=50;
    $y=30;
    echo "-Equal : ";
    var_dump($x==$y);
    echo "<br>-Not Equal : ";
    var_dump($x!=$y);
    echo "<br>-Greater than :";
    var_dump($x>$y);
    echo "<br>-Less than  :";
    var_dump($x<$y);
    echo "<br>-Greater than or equal than :";
    var_dump($x>=$y);
    echo "<br>-Less than or equal than :";
    var_dump($x<=$y);
    

    echo "<br><br><b>3. Increment/Decrement Operator</b>";
    $y=20;
    echo "<br>-Pre-Increment : ".++$y;
    echo "<br>-Post-Increment : ".$y++;
    echo "<br>-Pre-Decremente : ".--$y;
    echo "<br>-Post-Decremente : ".$y--;

    echo "<br><br><b>4. Logical Operator</b><br>";
    $d=20;
    $e=50;
    $w=40;
    $v=30;
    echo "-And : ";
    var_dump($d<$e || $w>$v);
    echo "<br>-Or : ";
    var_dump($d<$e && $w>$v);
    echo "<br>-Not : ";
    var_dump(!$d<$e=$w>$v);

    echo "<br><br><b>5. Array Operator</b><br>";

    $arr=array(1,2,3);
    $arr1=array(4,5,6);

        echo "-Equality : ";
        var_dump($arr==$arr1);

        echo "<br>-Inequality : ";
        var_dump($arr<>$arr1);

        echo "<br>-Inequality : ";
        var_dump($arr!=$arr1);
        
        echo "<br>-Union : ";
        var_dump($arr+$arr1);

        echo "<br>-Identity : ";
        var_dump($arr===$arr1);

        echo "<br>-Non-Identity : ";
        var_dump($arr!==$arr1);
?>
 