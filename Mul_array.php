<?php
    $arr=array(array(1,3),array(2,4));
    //echo $arr[0][1];
    //print_r($arr);
    echo "<center><table border=2>";
    foreach($arr as $row)
    {
        echo "<tr>";
        foreach($row as $col)
        {
            //echo "<td>";
            echo "<td>" .$col. "</td>";
            //echo </td>";
        }
            echo "</tr>";
    }
        echo "</table>";
?>        