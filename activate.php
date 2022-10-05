<?php

$pdo = new PDO("mysql:host=localhost;dbname=bd_tz", "root", "root");

$id = key($_POST);
$val = current($_POST);

$val == 'Deactivate' ? $active = 0 : $active = 1;

$sql = "UPDATE users SET active = :active WHERE id LIKE :id";
$query = $pdo->prepare($sql);
$query->execute(['active' => $active, 'id' => $id]);

header('Location: /');