<?php

$id = key($_POST);
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$state = $_POST['state'];

$pdo = new PDO("mysql:host=localhost;dbname=bd_tz", "root", "root");

$sql = "UPDATE users SET first = :first, last = :last, email = :email, address1 = :address1, address2 = :address2, city = :city, zip = :zip, country = :country, state = :state WHERE id LIKE :id";
$query = $pdo->prepare($sql);
$query->execute(['first' => $first, 'last' => $last, 'email' => $email, 'address1' => $address1, 'address2' => $address2, 'city' => $city, 'zip' => $zip, 'country' => $country, 'state' => $state, 'id' => $id]);

header('Location: /');