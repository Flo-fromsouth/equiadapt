<?php

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$user_mail = $_POST['user_mail'];
$message = $_POST['message'];
$date = date("Y-m-d");


$dsn = 'mysql:host=localhost;dbname=equiadapt';
$user = 'root';
$pass = '';
$pdo = new \PDO($dsn, $user, $pass);

$sql = "INSERT INTO `contact` (`nom`, `prenom`, `user_mail`, `message`, `date`) 
VALUES (:nom, :prenom, :user_mail, :message, :date)";
$params = ['nom' => $nom, 'prenom' => $prenom, 'user_mail' => $user_mail, 'message' => $message, 'date' => $date];
$stmt = $pdo->prepare($sql);
$stmt->execute($params);

header('Location: contact.php');
