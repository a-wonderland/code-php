<?php
    include("config/config.php");
    $id = $_GET['id'];
    $query = "DELETE FROM books WHERE id = $id";
    mysqli_query($connection, $query);
    
    echo mysqli_error($connection);
    header("location: book_list.php");
?>