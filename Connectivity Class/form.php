<?php
    session_start();

?>


<center><h4 style="color: green;">
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
</h4></center>
<form action="db.php">
    <table align="center" style="line-height: 25px;width:25%">
        <tr>
            <td colspan="2">
                <hr>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <h4>Employee Registration</h4>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <hr>
            </td>
        </tr>
        <tr>
            <td>id</td>
            <td><input type="text" name="rollno" /></td>
        </tr>
        <tr>
            <td>User Name</td>
            <td><input type="text" name="uname" /></td>
        </tr>
        <tr>
            <td>City</td>
            <td><select name="city">
                    <option value="">select city</option>
                    <option value="bhavnagar">bhavangar</option>
                    <option value="ahemdabad">ahemdabad</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><input type="radio" name="gen" value="m" />Male
                <input type="radio" name="gen" value="f" />Female
            </td>
        </tr>
        <tr>
            <td>Hobby</td>
            <td><input type="checkbox" name="hobby[]" value="play" />play
                <input type="checkbox" name="hobby[]" value="read"/>read
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <hr>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Insert" name="ins" />
                <input type="submit" value="upd" name="upd" />
                <input type="submit" value="del" name="del" />
                <input type="submit" value="disp" name="disp" />
            </td>
        </tr>
    </table>
</form>
form.php
Displaying form.php.