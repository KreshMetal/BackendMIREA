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
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>
</body>
</html>
<?php
$mysqli = new mysqli("db", "user", "password", "appDB");
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $secondname = $_POST['secondname'];
    $sql = "INSERT INTO `users`(`name`, `surname`) VALUES ('$name','$secondname')";
    $result = $mysqli->query($sql);
    if ($result == TRUE) {
      echo "New record created successfully.";
      header('Location: index.php');
    }
    $mysqli->close();
  }
?>