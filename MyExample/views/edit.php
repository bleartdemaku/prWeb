<?php
include '../components/header.php';
include_once '../businessLogic/userMapper.php';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $mapper = new UserMapper();
    $user = $mapper->getUserByID($userId);
}
?>
<link rel="stylesheet" href="../css/header.css">
<div class='container'>
    <h1>Modifiko te dhenat e perdoruesit</h1>
    <form class="mainForm" action="../businessLogic/editUser.php" method="get">
        <div class="login forms form-style">
            <input type="text" style="display:none;" value=<?php echo $userId; ?> name="id" />
            <label for="">Name:</label>
            <input type="text" name='username' class="input" placeholder="username..." value=<?php echo $user['username']; ?> />
            <label for="">Last Name:</label>
            <input type="text" name='lastName' class="input" placeholder="password..." value=<?php echo $user['userlastname']; ?> />
            <input id="submit" type="submit" name='login-btn' class="input submit" value="Edit" />
        </div>
    </form>
</div>

<?php
include '../components/footer.php';
?>