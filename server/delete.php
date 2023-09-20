​<?php
$mysqli = new mysqli("db", "user", "password", "appDB");
if (isset($_GET['id'])) {
    $stu_id = $_GET['id'];
    $sql = "DELETE FROM users WHERE ID ='$stu_id'";
    $result = $mysqli->query($sql);
    if ($result == TRUE) {
       echo "Record deleted successfully.";
       header('Location: /index.php');
    }else{
        echo "Error:" . $sql . "<br>" . $mysqli->error;
    }
}
?>