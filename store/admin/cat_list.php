<?php 
    // connection
    include("config/config.php");
    $query = "SELECT * FROM categories";
    $result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Category List</title>
</head>
<body>
<?php include("menu.php") ?>
<h1>Category List</h1>
<ul>
<?php while ($row = mysqli_fetch_assoc($result)): ?>
    <li title="<?php echo $row['remark'] ?>"> 
    	[<a href="cat_delete.php?id=<?php echo $row['id']?>">Delete</a>]
    	&nbsp;[<a href="cat_edit.php?id=<?php echo $row['id'] ?>">Edit</a>]
    	<?php echo $row['name'] ?>
    </li>
<?php endwhile; ?>
</ul>
<br><br>
<a href="cat_new.php">New Category</a>
</body>
</html>