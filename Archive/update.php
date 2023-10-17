<!DOCTYPE html>
<html>
<title>Users Database</title>
<body>
<h2>Users Form</h2>
<form action="" method="POST">
  <fieldset>
    <legend>Users information:</legend>
    Name:<br>
    <input type="text" name="name"> <br>
    SecondName:<br>
    <input type="text" name="secondname"> <br>
    <br><br>
    <input type="submit" name="update" value="update">
  </fieldset>
</form>
</body>
</html>
<?php
$mysqli = new mysqli("db", "user", "password", "appDB");
  if (isset($_POST['update'])) {
	$id = $_GET['id'];
    $name = $_POST['name'];
    $secondname = $_POST['secondname'];
    $sql = "UPDATE `users` SET `name` = '$name', `surname` = '$secondname' WHERE `ID` = '$id'";
    $result = $mysqli->query($sql);
    if ($result == TRUE) {
      echo "Record updated successfully.";
      header('Location: index.php');
    }
    $mysqli->close();
  }
?>