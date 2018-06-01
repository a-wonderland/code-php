<?php
    $id = $_POST['category_id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $summary = $_POST['summary'];
    $price = $_POST['price'];
    $path = $_FILES['cover']['tmp_name'];
    $coverName = $_FILES['cover']['name'];
    
    // connection
    include("config/config.php");
    // move image
    if($coverName){
        move_uploaded_file($path, "./covers/$coverName");
    }
    // sql execute
    $query = "INSERT INTO books (title, author, summary, price, cover, category_id, created_date, modified_date) 
VALUES ('$title','$author', '$summary', '$price','$coverName', '$id', now(), now())";
    mysqli_query($connection, $query);
    
    // sysout error
    echo mysqli_error($connection);
    
    // redirect
   header("location: book_list.php");
?>