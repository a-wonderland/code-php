<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Update Category</title>
<style type="text/css">
form label {
    display:block;
}
</style>
</head>
<?php 
    // connection
    include("config/config.php");
    $id = $_GET['id'];
    $query = "SELECT * FROM categories WHERE id = $id";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
?>
<body>
<?php include("menu.php") ?>
<h1>Edit Category</h1>
<form action="cat_update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']?>">
    <label for="name">Category Name</label>
    <input name="name" type="text" value="<?php echo $row['name']?>"><br>
    <label for="remark">Remark</label>
    <textarea rows="10" cols="50" name="remark"><?php echo $row['remark']?></textarea><br>
    <input type="submit" value="Edit Category">
</form>

</body>
</html>