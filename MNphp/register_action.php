<?php
require 'config.php';

$name = filter_input(INPUT_POST, 'name');
$address = filter_input(INPUT_POST, 'address');
$city = filter_input(INPUT_POST, 'city');
$state = filter_input(INPUT_POST, 'state');

$sql = $pdo->prepare("INSERT INTO users (name, address, city, state) VALUES (:name, :address, :city, :state)");
$sql->bindValue(':name', $name);
$sql->bindValue(':address', $address);
$sql->bindValue(':city', $city);
$sql->bindValue(':state', $state);
$sql->execute();

header("Location: index.php");
?>