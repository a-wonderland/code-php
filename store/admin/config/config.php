<?php
    $host = "localhost";
    $user = "root";
    $pw = "";
    // connection
    $connection = mysqli_connect($host, $user, $pw);
    mysqli_select_db($connection, "store");
   
?>