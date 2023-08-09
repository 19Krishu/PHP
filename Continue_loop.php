<?php
for($i=1;$i<=3;$i++){
    for($j=1;$j<=3;$j++){
        if($i==$j){
            continue;
        }
        echo $i.$j;
        echo "<br>";
    }
}

echo "<br>";

echo "Even Numbers Between 1 to 20";
$i=1;
while($i<=20){
    if($i%2==1){
        $i++;
        continue;
    }
    echo $i;
    echo "<br>";
    $i++;
}
?>