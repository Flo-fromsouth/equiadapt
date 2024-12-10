<?php
//hashage du mot de passe//
$motdepasse_base_de_donnee = "123";
$password_hash = password_hash('123', PASSWORD_DEFAULT);

//1 - regarder si l'utilisateur existe//
$dsn = 'mysql:host=localhost;dbname=equiadapt';
$user = 'root';
$pass = '';
$pdo = new PDO($dsn, $user, $pass);
$sql = "SELECT * FROM utilisateurs WHERE email = 'florencetruau@gmail.com'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($result);

// Connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=equiadapt';
$user = 'root';
$pass = '';
try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Requête pour récupérer l'utilisateur
$sql = "SELECT * FROM utilisateurs WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->execute(['email' => 'florencetruau@gmail.com']);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
    // Mot de passe envoyé par le formulaire (exemple)
    $motdepasse_envoye_par_le_formulaire = '123';

    // Vérification du mot de passe avec password_verify
    if (password_verify($motdepasse_envoye_par_le_formulaire, $result['password'])) {
        echo "Le mot de passe est bon";
    } else {
        echo "Le mot de passe est mauvais";
    }
} else {
    echo "Utilisateur non trouvé";
}
