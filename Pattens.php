<?php
for($i=0;$i<=5;$i++){
    for($j=5-$i;$j>=1;$j--){
        echo "*";
    }
    echo "<br>";
}

echo "<br>";

for($i=0;$i<=5;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}

echo "<br>";

for($i=0;$i<=5;$i++){  
    for($k=5;$k>=$i;$k--){  
    echo "  ";  
    }  
    for($j=1;$j<=$i;$j++){  
    echo "*";  
    }  
    echo "<br>";  
    }  
    for($i=4;$i>=1;$i--){  
    for($k=5;$k>=$i;$k--){  
    echo "  ";  
    }  
    for($j=1;$j<=$i;$j++){  
    echo "*";  
    }  
    echo "<br>";  
    }  
echo "<br>";

for($i=1; $i<=5; $i++){   
    for($j=1; $j<=$i; $j++){   
    echo ' * ';   
    }  
    echo '<br>';   
}  
    for($i=5; $i>=1; $i--){   
    for($j=1; $j<=$i; $j++){  
    echo ' * ';   
    }   
    echo '<br>';   
}  
    
echo "<br>";

for ($i=1; $i<=5; $i++)  
{  
 for ($j=1; $j<=5; $j++)  
  {  
   echo '* ';  
  }  
   echo "</br>";  
}  


echo "<br>";

for($i=5; $i>=1; $i--)  
{  
if($i%2 != 0)  
{  
for($j=5; $j>=$i; $j--)  
{  
echo "* ";  
}  
echo "<br>";  
}  
}  
for($i=2; $i<=5; $i++)  
{  
 if($i%2 != 0)  
{  
 for($j=5; $j>=$i; $j--)  
{  
echo "* ";  
}  
echo "<br>";  
}  
}  
?>