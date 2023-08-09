<?php
for($i=1;$i<=10;$i++)
{
    echo "$i <br/>" ;
    if($i==5)
    {
        break;
    }
}
echo "<br>";
for($i=1;$i<=3;$i++){
    for($j=1;$j<=3;$j++){
        echo "$i $j <br/>";
        if($i==2 && $j==2){
            break;
        }
    }
}
echo "<br>";
$num=array("Krishu","Shreyas","Krish","Mohit","Yash");
foreach($num as $element){
    if($element=="Stop"){
        break;
    }
    echo "$element <br/>";
}
?>