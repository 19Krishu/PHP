<?php
    $num=80;
if($num<39)
    {
        echo "Fail";
    }
elseif($num>=40 && $num<50)
    {
        echo "Just Pass";
    }
elseif($num>=50 && $num<60)
    {
        echo "Second Class";
    }
elseif($num>=60 && $num<70)
    {
        echo "First Class";
    }
elseif($num>=70 && $num<100)
    {
        echo "Distinction";
    }
else
    {
        echo "Invalid Input";
    }
?>