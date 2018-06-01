<?php
$id = $_POST ['id'];
$title = $_POST ['title'];
$author = $_POST ['author'];
$summary = $_POST ['summary'];
$price = $_POST ['price'];
$category_id = $_POST ['category_id'];
$coverName = $_FILES ['cover'] ['name'];
$path = $_FILES ['cover'] ['tmp_name'];

if ($coverName) {
	move_uploaded_file($path, "covers/$coverName");
	$query = "UPDATE books SET title='$title', author='$author', summary='$summary', price='$price', category_id='$category_id', cover='$coverName', modified_date=now() WHERE id = $id";
} else {
	$query = "UPDATE books SET title='$title', author='$author',
		summary='$summary', price='$price', category_id='$category_id', modified_date=now() WHERE id = $id";
}
include("config/config.php");
mysqli_query($connection, $query);
 header("location: book_list.php");
?>