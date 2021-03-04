<?php
include_once 'userMapper.php';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $mapper = new UserMapper();
    $mapper->deleteContact($userId);
    header("Location:../views/dashboard.php");
}