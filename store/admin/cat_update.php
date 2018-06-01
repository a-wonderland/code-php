<?php
    include("config/config.php");
    $id = $_POST['id'];
    $coverName = $_POST['name'];
    $remark = $_POST['remark'];
    $query = "UPDATE categories SET name='$coverName', remark='$remark', modified_date = now() WHERE id=$id";
    mysqli_query($connection, $query);
    
    header("location: cat_list.php");
?>