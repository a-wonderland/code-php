<?php 
    // connection
    include("config/config.php");
    $query = "SELECT books.*, categories.name FROM books LEFT JOIN categories ON books.category_id = categories.id";
    $result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Book List</title>
</head>
<body>
<?php include("menu.php") ?>
<h1>Book List</h1>
<ul>
<?php while ($row = mysqli_fetch_assoc($result)): ?>
    <li> 
    	<img alt="" src="covers/<?php echo $row['cover'] ?>" height="140">
    	<b><?php echo $row['title'] ?></b>
    	<i>book by <?php echo $row['author'] ?> <small>(in <?php echo $row['name']?>)</small> </i>
    	$<?php echo $row['price']?>
    	<div><?php echo $row['summary']?></div>
    	[<a href="book_delete.php?id=<?php echo $row['id']?>">Delete</a>]
    	&nbsp;[<a href="book_edit.php?id=<?php echo $row['id'] ?>">Edit</a>]
    </li>
<?php endwhile; ?>
</ul>
<br><br>
<a href="book_new.php">New Book</a>
</body>
</html>