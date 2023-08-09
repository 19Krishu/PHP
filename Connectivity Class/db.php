<?php
extract($_REQUEST);
//  print_r($_REQUEST);

include_once('conn.php');
session_start();


$hobby = isset($hobby) ? implode(',', $hobby) : null;

if (isset($ins)) {
    $sql = "insert into emp (uname,city,gen,hobby) values ('$uname','$city','$gen','$hobby')";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        $_SESSION['msg'] = "Record inserted successfully !!!";
        header('Location:form.php');
    }
}

if (isset($upd)) {
    $sql = "update emp set uname='$uname',city='$city',gen='$gen',hobby='$hobby' where id='$rollno'";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        $_SESSION['msg'] = "Record updated successfully !!!";
        header('Location:form.php');

    }
}

if (isset($del)) {
    $sql = "delete from emp where id='$rollno'";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        $_SESSION['msg'] = "Record deleted successfully !!!";
        header('Location:form.php');

    }
}

if (isset($disp)) {
    $sql = "select * from emp";
    $data = mysqli_query($conn, $sql);
    echo "<table align='center' border='1px' width='350px'>";
    echo "<tr style='background-color:grey'>";
    echo "<td>Roll No";
    echo "<td>Name";
    echo "<td>City";
    echo "<td>Gender";
    echo "<td>Hobby";
    echo "<td>Action";
    echo "</tr>";
    while ($res = mysqli_fetch_array($data)) {
        echo "<tr>";
        echo "<td>$res[0]";
        echo "<td>$res[1]";
        echo "<td>$res[2]";
        echo "<td>$res[3]";
        echo "<td>$res[4]";
        echo "<td><a href='db.php?id=$res[0]'>Delete</a>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<a href='form.php'>Back</a>";
}


if(isset($_REQUEST['id']))
{
    $id = intval($_REQUEST['id']);
    $sql = "delete from emp where id='$id'";
    if (mysqli_query($conn, $sql) or die(mysqli_error($conn))) {
        echo "Record deleted successfully !!!";

        $sql = "select * from emp";
    $data = mysqli_query($conn, $sql);
    echo "<table align='center' border='1px' width='350px'>";
    echo "<tr style='background-color:grey'>";
    echo "<td>Roll No";
    echo "<td>Name";
    echo "<td>City";
    echo "<td>Gender";
    echo "<td>Hobby";
    echo "<td>Action";
    echo "</tr>";
    while ($res = mysqli_fetch_array($data)) {
        echo "<tr>";
        echo "<td>$res[0]";
        echo "<td>$res[1]";
        echo "<td>$res[2]";
        echo "<td>$res[3]";
        echo "<td>$res[4]";
        echo "<td><a href='db.php?id=$res[0]'>Delete</a>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<a href='form.php'>Back</a>";
    }   
}
?>
db.php
Displaying db.php.
