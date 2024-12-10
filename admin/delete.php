<?php

$sql = "DELETE FROM `contact` WHERE id=:id";
$params = ['id' => $_GET['id']];
$pdo = new \PDO('mysql:host=localhost;dbname=equiadapt', 'root', '');
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
header('Location: /admin/admin.php');
?>


<div class="message">message supprimé</div>