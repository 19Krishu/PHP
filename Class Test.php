<?php
    $arr=array(array("Roll No","Name","Contact No","E-mail I'D"),array("001","Neel","1234567898","neel123@gmailcom"),array("002","Dev","765543216","dev28@gmailcom"),array("003","Khushi","3456789123","khushi6@gmailcom"),array("004","Krish","4567891234","krish234@gmailcom"),array("005","Anish","2245678812","anishp@gmailcom"));
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
