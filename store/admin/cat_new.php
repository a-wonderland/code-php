<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>New Category</title>
<style type="text/css">
form label {
    display:block;
}
</style>
</head>
<body>
<?php include("menu.php") ?>
<h1>New Category</h1>
<form action="cat_add.php" method="post">
    <label for="name">Category Name</label>
    <input name="name" type="text"><br>
    <label for="remark">Remark</label>
    <textarea rows="10" cols="50" name="remark"></textarea><br>
    <input type="submit" value="Add Category">
</form>

</body>
</html>