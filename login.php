<?php
session_start();
if ($_POST['password'] == "123") {
    $_SESSION['email'] = $_POST['email'];
    header("location: admin/admin.php");
} else {
    echo "le mot de passe n'est pas le bon";
}

?>
<form action="login.php" method="post">
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="login">
</form>

<?php
print_r($_POST);
//echo password_hash($_POST['password'], PASSWORD_BCRYPT);
//password_verify($_POST['password'], $_SESSION['password']);

/*if (count($_POST) > 0) {
    if ($_POST['email'] == "florencetruau@gmail.com" && $_POST['password'] == '123') {
        $_SESSION['email'] = 'florencetruau@gmail.com';
        header("location: index.php");
    }
}*/
