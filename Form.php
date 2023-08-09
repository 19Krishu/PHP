<html>
    <head>
        <title></title>
</head>
<body>
<center>
    <form action = "wel.php" method = "get">
    <h1>Registration Form</h1>
            <table>
                <tr>
                    <td> Name 
                    <td><input type = "text" name = "Name" placeholder = "Enter name">
                </tr>


                <tr>
                    <td> Gender 
                    <td><input type = "radio" name = "Gender" value = "Male">Male
                        <input type = "radio" name = "Gender" value = "Female">Female
                </tr>


                <tr>
                    <td> Education 
                    <td><input type = "Checkbox" name = "c[]" value = "HSC">HSC
                        <input type = "Checkbox" name = "c[]" value = "BCA">BCA
                </tr>


                <tr>
                    <td> City
                    <td><select name = "c1[]">
                        <option> Enter City </option>
                        <option> Ahmedabad </option>
                        <option> Baroda </option>
                </tr>


                <tr>
                    <td><input type = "Submit" name = "Submit" value = "Submit">
                        <input type = "Reset" name = "Reset" value = "Reset">
                </tr>
</table>
</center>
</form>
</body>
</html>