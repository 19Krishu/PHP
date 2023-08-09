<?php
    extract($_REQUEST);
    if(isset($submit))
    {
        if(!preg_match("/^[a-zA-Z-']*$/",$nm))
        {
            echo "Only letters and white space allowed";
        }
        //elseif(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/",$email))
        elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            echo "Invalid Email";
        }
        elseif(!filter_var($web,FILTER_VALIDATE_URL))
        {
            echo "Invalid URL";
        }
        else
        {
            echo $nm."<br>".$email."<br>".$web;
        }
    }
?>