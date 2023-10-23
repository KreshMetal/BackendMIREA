<?php
$mysqli = new mysqli("db", "user", "password", "appDB");
if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $secondname = $_POST['secondname'];
    $sql = "UPDATE `users` SET `name` = '$name', `surname` = '$secondname' WHERE `ID` = '$id'";
    $result = $mysqli->query($sql);
    if ($result == TRUE) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
    $mysqli->close();
}
?>

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
<<<<<<< HEAD:Archive/update.php
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
=======
</html>
>>>>>>> 6585ae6 (PR4):server/update.php
