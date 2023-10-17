​<?php
$mysqli = new mysqli("db", "user", "password", "appDB");
if (isset($_GET['id'])) {
    $stu_id = $_GET['id'];
    $sql = "DELETE FROM users WHERE ID ='$stu_id'";
    $result = $mysqli->query($sql);
    header('Location: index.php');
}
?>