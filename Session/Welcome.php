<?php
session_start();
echo "Welcome". $_SESSION['name'];
echo "<br><a href = Logout.php>Logout</a>";
?>