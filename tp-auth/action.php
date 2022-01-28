<?php

session_start();

require "comptes.php";

$email = $_POST["email"];
$password = $_POST["password"];

if ($email != "" && $password != "") {
    if (isset($comptes[$email]) && $password == $comptes[$email]['password']) {
        $_SESSION['name'] = $comptes[$email]['name'];
        $_SESSION['email'] = $email;
    } else {
        echo "Verifiez votre mail ou mot de passe";
    }
}

if ($email == "") {
    echo "L'email est requis";
}

if ($password == "") {
    echo "Le mot de passe est requis";
}

echo "nom : <b>".$_SESSION['name']."</b><br>";
echo "email : <b>".$_SESSION['email']."</b>";