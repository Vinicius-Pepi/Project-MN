<?php
require 'config.php';

$id = filter_input(INPUT_GET, 'id');
$name = filter_input(INPUT_GET, 'name');
$address = filter_input(INPUT_GET, 'address');
$city = filter_input(INPUT_GET, 'city');
$state = filter_input(INPUT_GET, 'state');

if($id && $name && $address && $city && $state){
    $sql = $pdo->prepare("UPDATE users SET name = :name, address = :address, city = :city, state = :state WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->bindValue(':name', $name);
    $sql->bindValue(':address', $address);
    $sql->bindValue(':city', $city);
    $sql->bindValue(':state', $state);
    $sql->execute();
    header("Location: index.php");
    exit;
}else{
    //header("Location: index.php");
    //exit;
    echo "oi";
}
?>