<?php
session_start();
// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['email'])) {
    echo "Vous êtes connecté";

    // Connexion à la base de données
    $dsn = 'mysql:host=localhost;dbname=equiadapt';
    $user = 'root';
    $pass = '';
    try {
        $pdo = new \PDO($dsn, $user, $pass);
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
        exit();
    }
    //requêter les informations sur la table "contact":
    $sql = "SELECT * FROM contact";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //afficher sous la forme d'un tableau html les résultats:
?>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
            text-align: center;
            margin-bottom: 60px;
            background-color: #8F4343;
            color: white;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            border-color: #8F4343;
            width: auto;
            margin: 15px;
            text-align: center;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: none;
        }
    </style>
    <h1>Equi'adapt - administrateur</h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>E-mail</th>
            <th>Message</th>
            <th>Date</th>
            <th>Effacer</th>
        </tr>
    <?php

    foreach ($result as $row) {

        echo '<tr>';
        echo '<td>' . $row['nom'] . '</td>';
        echo '<td>' . $row['prenom'] . '</td>';
        echo '<td>' . $row['user_mail'] . '</td>';
        echo '<td>' . $row['message'] . '</td>';
        echo '<td>' . $row['date'] . '</td>';
        echo '<td><a href="delete.php?id=' . $row['id'] . '">Effacer</a></td>';
        echo '</tr>';
    }
} else {
    echo "vous n'êtes pas connecté";
}

    ?>