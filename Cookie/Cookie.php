<?php
    echo "<h3>Welcome Cookie</h3><br>";
    setcookie("Category","Books",time()+60,"/");
    echo "Cookie is set";
?>