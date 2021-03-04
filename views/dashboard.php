<?php
include '../components/header.php';
include_once '../businessLogic/variables.php';
include_once '../businessLogic/userMapper.php';
if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
    $mapper =  new UserMapper();
    $userList = $mapper->getAllUsers();
} else {
    header("Location../views/index.php");
}
?>
<link rel="stylesheet" href="../css/cssStyle.css">
<div>
    <h1>Dashboard</h1>
    <div>
        <h2>User list:</h2>
        <table>
            <thead>
                <tr>
                    <td>Emri</td>
                    <td>Mbiemri</td>
                    
                    <td>Detajet</td>
                    <td>Modifiko</td>
                    <td>Fshij</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($userList as $user) {
                ?>
                    <tr>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['userlastname']; ?></td>
                        
                        <td><a href=<?php echo "../businessLogic/detailsUser.php?id=" . $user['userid'];
                                    ?>>Detajet</a></td>
                        <td><a href=<?php echo "../views/edit.php?id=" . $user['userid'];
                                    ?>>Modifiko</td>
                        <td><a href=<?php echo "../businessLogic/deleteUser.php?id=" . $user['userid'];
                                    ?>>Fshij</td>
                                  
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    
</div>
<?php
include_once '../businessLogic/variables.php';
include_once '../businessLogic/userMapper.php';
if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
    $mapper =  new UserMapper();
    $userList = $mapper->getAllContact();
} else {
    header("Location../views/index.php");
}
?>
<div>
    <h1>Contact</h1>
    <div>
        <h2>User list:</h2>
        <table>
            <thead>
                <tr>
                    <td>emri</td>
                    <td>emaili</td>
                    <td>mesazhi</td>
                    <td>fshije</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($userList as $user) {
                ?>
                    <tr>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['message']; ?></td>
                        <td><a href=<?php echo "../businessLogic/deleteContact.php?id=" . $user['id'];
                                    ?>>Fshij</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    
</div>
