<?php
session_start();
$user = $_SESSION['connexion'];

session_start();
if (empty($_SESSION['connexion'])) {
    header('Location: ./login.php');
}

function formatGenre(string $genre): string
{
    if ($genre == 'm') {
        return "Homme";
    } elseif ($genre == 'f') {
        return "Femme";
    } else {
        return "Invalide";
    }
}

?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>
    <h1>Salut <b><?= $user['name'] ?></b> !</h1> <a href="./deconnexion.php">Se déconnecter</a><br>
    <h3>Email : <b><?= $user['email'] ?></b><br></h3>
    <h3>Téléphone : <b><?= $user['phone'] ?></b><br></h3>
    <h3>Genre : <b><?= formatGenre($user['genre']) ?></b><br></h3>
</body>
</html>
