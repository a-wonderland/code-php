<?php
    $name = $_POST['name'];
    $remark = $_POST['remark'];
    // connection
    include("config/config.php");
    // sql execute
    $query = "INSERT INTO categories (name, remark, created_date, modified_date) VALUES ('$name', '$remark', now(), now())";
    mysqli_query($connection, $query);
    // redirect
    header("location: cat_list.php");
?>