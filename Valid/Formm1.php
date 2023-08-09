<?php
    session_start();
?>
<html>
    <head>
        <title> Valid Form </title>
    </head>
    <body>
        <form action = "Validd1.php" method = "post">
            <fieldset>
                <legend> Validation Form </legend>
                <table>
                    <tr>
                        <td>Name :
                        <td><input type = "text" name = "nm" placeholder = "Enter Your Name">
        
                    </tr>
                    <tr>
                        <td>Email : 
                        <td><input type = "email" name = "email" placeholder = "Enter E-mail">
                    </tr>
                    <tr>
                        <td>Website : 
                        <td><input type = "website" name = "web" placeholder = "Enter URL">
                    </tr>            
<?php
    if(isset($_SESSION['msg']))
    {
        echo $_SESSION['msg'];
        //unset $_SESSION['msg'];
        //session_destroy();
    }
?>
                    <tr>
                        <td colspan = "2"><input type = "submit" name = "submit">
                    </tr>
                </table>
            </fieldset>                 
</body>
</html>