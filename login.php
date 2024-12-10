<?php
session_start();
//cas de l'affichage formulaire vierge
if (count($_POST) == 0) { ?>
    <form action="login.php" method="post">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="login">
    </form>
<?php
}
// traitement des infos soumises par le formulaire
else {
    // vérification de l'existence de l'email

    $dsn = 'mysql:host=localhost;dbname=equiadapt';
    $user = 'root';
    $pass = '';
    $pdo = new \PDO($dsn, $user, $pass);
    $sql = "SELECT * FROM `utilisateurs` WHERE `email` = :email";
    $params = ['email' => $_POST['email']];
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // si l'email existe on vérifie que le mot de passe correspond
    if ($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['email'] = $user['email']; // Définir la session
        header('Location: admin/admin.php');
        exit();
    } else {
        echo 'Email ou mot de passe incorrect';
    }
}
