<?php
    session_start();
?>
<?php
    if(isset($_SESSION['msg'])) {
        echo($_SESSION['msg']);
        unset($_SESSION['msg']);
    }
?>
<form action = "Database.php">
<center>
    <hr>
    <h1>Connectivity Form</h1>
    <hr>
            <table>
                <tr>
                    <td> Id </td>
                    <td><input type = "text" name = "id"> </td>
                </tr>

                <tr>
                    <td>U_name</td>
                    <td><input type = "text" name = "uname"></td>
                </tr>


                <tr>
                    <td> City </td>
                    <td><select name = "city">
                        <option> --Enter City-- </option>
                        <option> Ahmedabad </option>
                        <option> Baroda </option>
                        <option> Surat </option>
                        <option> Gandhinagar </option>
                        <option> Himmatnagar </option>
                        </select>
                </tr>


                <tr>
                    <td> Gender </td>
                    <td><input type = "radio" name = "gender" value = "Male">Male
                        <input type = "radio" name = "gender" value = "Female">Female
                    </td>
                </tr>


                <tr>
                    <td> Hobby </td>
                    <td><input type = "Checkbox" name = "hobby[]" value = "Dancing">Dancing
                        <input type = "Checkbox" name = "hobby[]" value = "Singing">Singing
                        <input type = "Checkbox" name = "hobby[]" value = "Drawing">Drawing
                        <input type = "Checkbox" name = "hobby[]" value = "Reading">Reading
                    </td>
                </tr>
</table>
<hr>

                <tr>
                    <td><input type = "button" name = "ins" value = "Insert">
                        <input type = "button" name = "upd" value = "Update">
                    <td><input type = "button" name = "del" value = "Delete">
                        <input type = "button" name = "disp" value = "Display">
                </tr>
                <hr>
<!-- </table> -->
</center>
</form>
