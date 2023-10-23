<html lang="en">
<head>
<title>People Database</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Таблица пользователей данного продукта</h1>
<table style = " border: 1px solid grey; margin-left: auto; margin-right: auto;">
    <tr><th>Id</th><th>Name</th><th>Surname</th></tr>
<?php
$mysqli = new mysqli("db", "user", "password", "appDB");
$result = $mysqli->query("SELECT * FROM users");
foreach ($result as $row){
	?>
	<tr>
		<td> <?php echo $row['ID']; ?> </td>
		<td> <?php echo $row['name']; ?> </td>
		<td> <?php echo $row['surname']; ?> </td>
		<td>
			<a class="btn btn-info" href="update.php?id=<?php echo $row['ID']; ?>">Edit</a>
			<a class="btn btn-danger" href="delete.php?id=<?php echo $row['ID']; ?>">Delete</a>
		</td>
	</tr>
<?php
}
?>

<?php
phpinfo();
?>
</table>
</body>
</html>