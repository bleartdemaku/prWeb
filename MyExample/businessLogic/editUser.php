<?php

include_once 'userMapper.php';
include_once 'simpleUserClass.php';
if (isset($_GET['username']) && isset($_GET['username'])) {
    $userId = $_GET['id'];
    $username = $_GET['username'];
    $userlastname = $_GET['lastName'];
    $simpleUser = new SimpleUser($username, "", 1, 1, $userlastname);
    $mapper = new UserMapper();
    $mapper->edit($simpleUser, $userId);
    header("Location:../views/dashboard.php");
}
