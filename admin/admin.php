<?php
//requêter les inormations sur la table "contact"
$dsn = 'mysql:host=localhost;dbname=equiadapt';
$user = 'root';
$pass = '';
$pdo = new PDO($dsn, $user, $pass);

$sql = "SELECT * FROM contact";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//afficher sous la forme d'un tableau html les résultats
?>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
<table>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>E-mail</th>
        <th>Message</th>
        <th>Date</th>
    </tr>
    <?php

    foreach ($result as $row) {

        echo '<tr>';
        echo '<td>' . $row['nom'] . '</td>';
        echo '<td>' . $row['prenom'] . '</td>';
        echo '<td>' . $row['user_mail'] . '</td>';
        echo '<td>' . $row['message'] . '</td>';
        echo '<td>' . $row['date'] . '</td>';
        echo '</tr>';
    }

    ?>