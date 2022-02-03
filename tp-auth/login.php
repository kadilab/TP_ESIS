<?php
    session_start();
    if (isset($_SESSION['connexion']) && !empty($_SESSION['connexion'])) {
        header('Location: ./profile.php');
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form action="action_login.php" method="post">
        <input type="email" placeholder="Email" name="email">
        <input type="password" placeholder="Mot de passe" name="password">
        <input type="submit" value="Envoyer">
    </form>
    <?= (isset($_GET['error'])) ? $_GET['error'] : "" ?>
</body>
</html>