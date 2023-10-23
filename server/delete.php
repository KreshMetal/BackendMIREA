<?php
$mysqli = new mysqli("db", "user", "password", "appDB");
if (isset($_GET['id'])) {
    $stu_id = $_GET['id'];
    $sql = "DELETE FROM users WHERE ID ='$stu_id'";
    $result = $mysqli->query($sql);
<<<<<<< HEAD:Archive/delete.php
    header('Location: index.php');
=======
    if ($result == TRUE) {
        header('Location: index.php');
        exit; // Завершаем выполнение скрипта после перенаправления
    } else {
        echo "Error:" . $sql . "<br>" . $mysqli->error;
    }
>>>>>>> 6585ae6 (PR4):server/delete.php
}
?>