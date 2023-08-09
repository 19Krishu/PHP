<?php
extract($_REQUEST);
//print_r($_REQUEST);

//code get from Conn page
include_once('Conn.php');
session_start();


// Derieved multiple value with ,
$hobby = isset($hobby) ? implode(',',$hobby) : null;

if(isset($ins)) {
    $sql = "insert into emp (U_name , City , Gender , Hobby) values ('$uname','$city','$gender','$hobby')";
    if(mysqli_query($conn,$sql) or die(mysqli_error($conn))) {
        $_SESSION['msg'] = "Record inserted successfully!!!";
        // echo "Insert";
        header('Location:Form.php');
    }
}

if(isset($upd)) {
    $sql = "update emp set  U_name = '$uname',City = '$city',Gender = '$gender',Hobby = '$hobby' where Id = '$id'";
    if(mysqli_query($conn,$sql) or die(mysqli_error($conn))) {
        $_SESSION['msg'] = "Record updated successfully!!!";
        // echo "Update";
        header('Location:Form.php');
    }
}

if(isset($del)) {
    $sql = "delete from emp where Id = '$id'";
    if(mysqli_query($conn,$sql) or die(mysqli_error($conn))) {
        $_SESSION['msg'] = "Record delete successfully!!!";
        // echo "Delete";
        header('Location:Form.php');
    }
}

if(isset($disp)) {
    $sql = "select * from emp";
    $data = mysqli_query($conn,$sql);
    echo "<table align = 'center' border = '1px' width = '350px'>";
    echo "<tr style = 'background-color:grey'>";
    echo "<td>Id";
    echo "<td>U_name";
    echo "<td>City";
    echo "<td>Gender";
    echo "<td>Hobby";
    echo "<td>Action";
    echo "</tr>";
    while($res = mysqli_fetch_array($data)) {
        echo "<tr>";
        echo "<td>$res[0]";
        echo "<td>$res[1]";
        echo "<td>$res[2]";
        echo "<td>$res[3]";
        echo "<td>$res[4]";
        echo "<td><a href = 'Database.php?Id=$res[0]'>Delete</a>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<a href = 'Form.php'>Back</a>";
}

if(isset($_REQUEST['Id'])) {
    $id = intval($_REQUEST['Id']);
    $sql = "Delete from emp where Id = '$id'";
    if(mysqli_query($conn,$sql) or die(mysqli_error($conn))) {
        echo "Record deleted successfully !!!";

        $sql = "select * from emp";
        $data = mysqli_query($conn,$sql);
        echo "<table align = 'center' border = '1px' width = '350px'>";
        echo "<tr style = 'background-color:grey'>";
        echo "<td>Id";
        echo "<td>U_name";
        echo "<td>City";
        echo "<td>Gender";
        echo "<td>Hobby";
        echo "<td>Action";
        echo "</tr>";
        while($res = mysqli_fetch_array($data)) {
            echo "<tr>";
            echo "<td>$res[0]";
            echo "<td>$res[1]";
            echo "<td>$res[2]";
            echo "<td>$res[3]";
            echo "<td>$res[4]";
            echo "<td><a href = 'Database.php?Id=$res[0]'>Delete</a>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<a href = 'Form.php'>Back</a>";
    }
}
?>