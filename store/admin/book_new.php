<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>New Book</title>
<style type="text/css">
form label {
    display:block;
}
</style>
</head>
<body>
<?php include("menu.php") ?>
<h1>New Book</h1>
<?php 
    include("config/config.php");
    $result = mysqli_query($connection, "SELECT id, name FROM categories");
?>
<form action="book_add.php" method="post" enctype="multipart/form-data">
    <label for="title">Title</label>
    <input type="text" name="title"><br>
    
    <label for="author">Author</label>
    <input name="author" type="text"><br>
    
    <label for="summary">Summary</label>
    <textarea rows="10" cols="50" name="summary"></textarea><br>
    
     <label for="price">Price</label>
     <input name="price" type="text"><br>
     
     <label for="category">Category</label>
     <select name="category_id">
     	<?php while($cat = mysqli_fetch_assoc($result)):?>
     		<option value="<?php echo $cat['id'] ?>">
     			<?php echo $cat['name'] ?>
     		</option>
     	<?php endwhile; ?>
     </select><br>
     
     <label for="cover">Cover</label>
     <input type="file" name="cover"><br><br>
     
    <input type="submit" value="Add Book">
</form>

</body>
</html>