<?php
require 'config.php';

$list = [];
$sql = $pdo->query("SELECT * FROM users");
$list = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>User List</h1>
<table border="2">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Action</th>
    </tr>
    <?php foreach($list as $users): ?>
        <tr>
            <td><?=$users['id'];?></td>
            <td><?=$users['name'];?></td>
            <td><?=$users['address'];?></td>
            <td><?=$users['city'];?></td>
            <td><?=$users['state'];?></td>
            <td>
                <a href="edit.php?id=<?=$users['id'];?>">[ EDIT ]</a>
                <a href="delete.php?id=<?=$users['id'];?>">[ DELETE ]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="register.php">Register User</a>