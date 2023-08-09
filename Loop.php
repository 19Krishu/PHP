<?php
//While Loop
$i=1;
while ($i<=10)
    {
        echo $i;
        $i++;
    }
    echo "<br><br>";

//Do While
$i=1;
do
{
    echo $i;
    $i++;
}
while ($i<=6);
echo "<br><br>";

//For loop
for($i=1;$i<20;$i++)
{
    echo $i;
}
echo "<br><br>";

//Loop with continue
$i=1;
for($i=1;$i<20;$i++)
{
    if($i==10)
    {
        continue;
    }
    echo $i;
}
?>