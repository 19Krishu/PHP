<?php
//No return no argument
function display()
{
    $a=3;
    $b=66;
    echo($a+$b);
    echo "Hello";
}
display();

//With arugument No return value
function display($a,$b)
{
    echo $a+$b;
}
display(10,35)

//Swapping
function display($a,$b,$c)
{
    $a=10;
    $b=20;
    $c=30;

    $d=$a;
    $a=$b;
    $b=$c;
    $c=$d;

    echo "A=".$a;
    echo "<br>";
    echo "B=".$b;
    echo "<br>";
    echo "C=".$c;
}
display(10,20,30)


//With Return value No argument
function display()
{
    $a=10;
    $b=20;
    return $a+$b;
}
echo display();


//With argumnet with return value
function display($a,$b)
{
    return $a+$b;
}
echo display(35,45);
?>