<?php
echo '<pre>';
print_r($_POST);
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$user_mail = $_POST['user_mail'];
$message = $_POST['message'];
$date = date("Y-m-d");
echo '</pre>';

$dsn = 'mysql:host=localhost;dbname=equiadapt';
$user = 'root';
$pass = '';
$pdo = new \PDO($dsn, $user, $pass);

$sql = "INSERT INTO `contact` (`nom`, `prenom`, `user_mail`, `message`, `date`) 
VALUES (:nom, :prenom, :user_mail, :message, :date)";
$params = ['nom' => $nom, 'prenom' => $prenom, 'user_mail' => $user_mail, 'message' => $message, 'date' => $date];
$stmt = $pdo->prepare($sql);
$stmt->execute($params);

echo '<pre>';
$sql = 'SELECT * FROM `contact`';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
print_r($result);
echo '</pre>';
