<?php
session_start();
if ($_POST['password'] == "123") {
    $_SESSION['email'] = $_POST['email'];
    header("location: admin/admin.php");
} else {
    echo "Erreur de mot de passe";
}

?>
<form action="login.php" method="post">
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="login">
</form>

<?php
