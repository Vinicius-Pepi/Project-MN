<?php
require 'config.php';

$users = [];
$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $users = $sql->fetch(PDO::FETCH_ASSOC);
    }else{
        header("Location: index.php");
        exit;
    }
}else{
    header("Location: index.php");
    exit;
}
?>

<h1>Edit Users</h1>
<form method=""action="edit_action.php">
    <input type="hidden" name="id" value="<?=$users['id'];?>"/>
    <label>
        Name: <input type="text" name="name" value="<?=$users['name'];?>"/>
    </label>

    <label>
        Address: <input type="text" name="address" value="<?=$users['address'];?>"/>
    </label>

    <label>
        City: <input type="text" name="city" value="<?=$users['city'];?>"/>
    </label>

    <label>
        State: <input type="text" name="state" value="<?=$users['state'];?>"/>
    </label>
    <input type="submit" value="Update"/>
</form>