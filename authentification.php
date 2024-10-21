<?php
//hashage du mot de passe//
$motdepasse_base_de_donnee = "123";
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

//2 - regarder si le mdp est bon//

// $motdepasse_envoye_par_le_formulaire = "123";
// if (password_verify($motdepasse_envoye_par_le_formulaire, $hash)) {
//     //echo "Le mot de passe est bon";
// } else {
//     echo "Le mot de passe est mauvais";
// }
