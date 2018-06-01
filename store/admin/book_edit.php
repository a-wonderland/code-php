<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Book</title>
<style type="text/css">
form label {
    display:block;
}
</style>
</head>
<body>
<?php include("menu.php") ?>
<h1>Edit Book</h1>
<?php 
    include("config/config.php");
    $id = $_GET['id'];
    $result = mysqli_query($connection, "SELECT * FROM books WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
    $categories = mysqli_query($connection, "SELECT id, name FROM categories");
  ?>
<form action="book_update.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
    <label for="title">Title</label>
    <input type="text" name="title" value="<?php echo $row['title']?>"><br>
    
    <label for="author">Author</label>
    <input name="author" type="text" value="<?php echo $row['author']?>"><br>
    
    <label for="summary">Summary</label>
    <textarea rows="10" cols="50" name="summary"> <?php echo $row['summary']?> </textarea><br>
    
     <label for="price">Price</label>
     <input name="price" type="text" value="<?php echo $row['price']?>"><br>
     
     <label for="category">Category</label>
     <select name="category_id">
     	<?php while($cat = mysqli_fetch_assoc($categories)):?>
     		<option value="<?php echo $cat['id'] ?>" <?php if ($row['category_id'] == $cat['id']) echo "selected" ?> > 
     			<?php echo $cat['name'] ?>
     		</option>
     	<?php endwhile; ?>
     </select><br>
     <img alt="" src="<?php echo 'covers/'.$row['cover'] ?>" height="140px">
     <label for="cover">Cover</label>
     <input type="file" name="cover"><br><br>
     
    <input type="submit" value="Edit Book">
</form>

</body>
</html>