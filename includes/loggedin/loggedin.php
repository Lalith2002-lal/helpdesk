<?php
session_start();
$userId = $_SESSION['userId'];

include_once dirname(__FILE__).'/../config/config.php';


if(!$userId){
  header("Location:/index.php");
}

function getUserbyId(){
    
    global $conn;
    $userId = $_SESSION['userId'];
    $data = [];

    $sql = "SELECT `firstName`, `lastName` FROM `admin` WHERE `email` = $userId";
    

    $result = $conn->query($sql);
    
    if($result->num_rows > 0) {
      $data = $result->fetch_assoc(); 
    } else {
      header("Location:/index.php");

    }

    return $data;
}