<?php
include '../components/header.php';
include_once '../businessLogic/variables.php';
include_once '../businessLogic/userMapper.php';
if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
    $mapper =  new UserMapper();
    $userList = $mapper->getAllContants();
} else {
    header("Location../views/index.php");
}
?>