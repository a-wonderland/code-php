<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>
<?php 
	session_start();
	if(!isset($_SESSION['auth'])){
?>
	<form action="login.php" method="post">
		<label for="name">Name</label>
		<input type="text" name="name" placeholder="dummy"><br>
		<label for="password">Password</label>
		<input type="text" name="password" placeholder="dummy"><br><br>
		
		<input type="submit" value="Admin Login">
	</form>
<?php }else{ ?>
	 <div>
	<ul>
		<li><a href="book_list.php">Manage Books</a></li>
		<li><a href="cat_list.php">Manage Categories</a></li>
		<li><a href="orders.php">Manage Orders</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
</div>
	 
<?php }?>
</body>
</html>