<?php
    include("config/config.php");
    $id = $_GET['id'];
    $query = "DELETE FROM categories WHERE id = $id";
    mysqli_query($connection, $query);
    
    header("location: cat_list.php");
?>