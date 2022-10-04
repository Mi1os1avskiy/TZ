<?php

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$state = $_POST['state'];
$date = date('Y-m-d\TH:i:s');

$pdo = new PDO("mysql:host=localhost;dbname=bd_tz", "root", "root");

$sql = "INSERT INTO users(first, last, email, address1, address2, city, zip, country, state, time) VALUES(:first, :last, :email, :address1, :address2, :city, :zip, :country, :state. :time)";
$query = $pdo->prepare($sql);
$query->execute(['first' => $first, 'last' => $last, 'email' => $email, 'address1' => $address1, 'address2' => $address2, 'city' => $city, 'zip' => $zip, 'country' => $country, 'state' => $state, 'time' => $date]);

header('Location: /');

?>