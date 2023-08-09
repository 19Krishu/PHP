<?php
echo time();
if(isset($add))
{
    setcookie("Name",$Name,time()+60,"/");
    echo "Cookie Added";
}
if(isset($display))
{
    echo "Cookie is ".$_COOKIE["Name"];
}
if(isset($delete))
{
    setcookie("Name","",time());
    echo "Cookie is Deleted";
}
if(isset($update))
{
    setcookie("Name",$Name);
    echo "Cookie is Updated";
}
?>