<?php
error_reporting(0);
header('Content-type: json/application');
require 'functions.php';
$con = new mysqli("db", "user", "password", "appDB");

$method = $_SERVER['REQUEST_METHOD'];

$q = $_GET['q'];
$params = explode('/', $q);

$type = $params[0];
$id = $params[1];

if($method === 'GET'){
  if ($type === "users"){
    if(isset($id)){
        getUser($con, $id);
    }
    else{
        getUsers($con);    
    }
  }
  elseif ($type == "comicses"){
    if(isset($id)){
        getComics($con, $id);
    }
    else{
        getComicses($con);    
    }
  }  
} 
elseif ($method === "POST"){
    if ($type === 'users'){
        addUser($con, $_POST);
    }
    elseif ($type == "comicses"){
        addComics($con, $_POST);
    } 
}
elseif ($method === "PUT"){
    if ($type === 'users'){
        if(isset($id)){
            $data = file_get_contents('php://input');
            $json = json_decode($data);
            updateUser($con, $id, $json);
        }
    }
    elseif ($type == "comicses"){
        if(isset($id)){
            $data = file_get_contents('php://input');
            $json = json_decode($data);
            updateComics($con, $id, $json);
        }
    } 
}
elseif ($method === "DELETE"){
    if ($type === 'users'){
        if(isset($id)){
            deleteUser($con, $id);
        }
    }
    elseif ($type == "comicses"){
        if(isset($id)){
            deleteComics($con, $id);
        }
    } 
}
?>