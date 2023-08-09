<?php
    $arr=array(array("ID","Name","Contact No"),array("1","Krishu","9913190204"),array("2","Neel","7621936361"),array("3","Khushi","9723670498"));
    echo "<center><table border = 2>";
    foreach ($arr as $row)
    {
        echo "<tr>";
        foreach ($row as $col)
        {
            echo "<td>" .$col. "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
