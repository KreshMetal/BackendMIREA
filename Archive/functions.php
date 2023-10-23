<?php

function getUsers($con) {
    $users = mysqli_query($con, "SELECT * FROM `users`");
    $usersList = [];
    while ($user = mysqli_fetch_assoc($users)){
        $usersList[] = $user;
    }
    echo json_encode($usersList);
}

function getUser($con, $login){
    $user = mysqli_query($con, "SELECT * FROM `users` WHERE `login` = '$login'");
    if(mysqli_num_rows($user) === 0){
        http_response_code(404);
        $res = [
            "status" => false,
            "message" => "User not found"
        ];
        echo json_encode($res);
    }
    else{
        $res = mysqli_fetch_assoc($user);
        echo json_encode($res);
    }
}

function addUser($con, $data){
    $login = $data['login'];
    $bday = $data['bday'];
    $pass = $data['password'];

    mysqli_query($con, "INSERT INTO `users` VALUES ('$login', '$bday', '$pass')");

    http_response_code(201);
    $res = [
        "status" => true,
        "post_id" => mysqli_insert_id($con)
    ];

    echo json_encode($res);
}

function updateUser($con, $login, $data){
    $bday = $data->bday;
    $pass = $data->password;
    $query = mysqli_query($con, "UPDATE `users` SET `bday` = '$bday', `password` = '$pass' WHERE `login` = '$login'");

    if($query === false){
        http_response_code(404);
        $res = [
            "status" => false,
            "message" => "User not found"
        ];
        echo json_encode($res);
    }
    else
    {
        $res = [
            "status" => true,
            "message" => "User is updated"
        ];
        echo json_encode($res);
    }
}

function deleteUser($con, $login){
    $query = mysqli_query($con, "DELEtE FROM `users` WHERE `login` = '$login'");

    if($query === false){
        http_response_code(404);
        $res = [
            "status" => false,
            "message" => "User not found"
        ];
        echo json_encode($res);
    }
    else
    {
        $res = [
            "status" => true,
            "message" => "User is deleted"
        ];
        echo json_encode($res);
    }
}

function getComicses($con) {
    $users = mysqli_query($con, "SELECT * FROM `comicses`");
    $usersList = [];
    while ($user = mysqli_fetch_assoc($users)){
        $usersList[] = $user;
    }
    echo json_encode($usersList);
}

function getComics($con, $id){
    $user = mysqli_query($con, "SELECT * FROM `comicses` WHERE `comics_id` = '$id'");
    if(mysqli_num_rows($user) === 0){
        http_response_code(404);
        $res = [
            "status" => false,
            "message" => "User not found"
        ];
        echo json_encode($res);
    }
    else{
        $res = mysqli_fetch_assoc($user);
        echo json_encode($res);
    }
}

function addComics($con, $data){
    $name = $data['comics_name'];
    $desc = $data['comics_desc'];

    mysqli_query($con, "INSERT INTO `comicses` (`comics_name`, `comics_desc`) VALUES ('$name', '$desc')");

    http_response_code(201);
    $res = [
        "status" => true,
        "post_id" => mysqli_insert_id($con)
    ];

    echo json_encode($res);
}

function updateComics($con, $id, $data){
    $name = $data->comics_name;
    $desc = $data->comics_desc;
    $query = mysqli_query($con, "UPDATE `comicses` SET `comics_name` = '$name', `comics_desc` = '$desc' WHERE `comics_id` = '$id'");

    if($query === false){
        http_response_code(404);
        $res = [
            "status" => false,
            "message" => "User not found"
        ];
        echo json_encode($res);
    }
    else
    {
        $res = [
            "status" => true,
            "message" => "User is updated"
        ];
        echo json_encode($res);
    }
}

function deleteComics($con, $id){
    $query = mysqli_query($con, "DELEtE FROM `comicses` WHERE `comics_id` = '$id'");

    if($query === false){
        http_response_code(404);
        $res = [
            "status" => false,
            "message" => "User not found"
        ];
        echo json_encode($res);
    }
    else
    {
        $res = [
            "status" => true,
            "message" => "User is deleted"
        ];
        echo json_encode($res);
    }
}

?>