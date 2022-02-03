<?php

session_start();

//require "comptes.php";
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$genre = $_POST["genre"];
$password = $_POST["password"];

if ($name != "" && $phone != "" && $email != "" && $genre != "" && $password != "") {

    if (!empty($_SESSION['utilisateurs'][$email])) {
        header('Location: ./index.php?error=l\'email est déjà utilisé');
    } else {
        $_SESSION['utilisateurs'][$email] = ['name' => $name,'phone' => $phone, 'email' => $email, 'genre' => $genre, 'password' => $password];
        $_SESSION['connexion'] = ['name' => $name,'phone' => $phone, 'email' => $email, 'genre' => $genre, 'password' => $password];
        header('Location: ./profile.php');
    }
}

if ($name == "") {
    echo "Le nom est requis";
}

if ($phone == "") {
    echo "Le numéro de télephone est requis";
}
if ($email == "") {
    echo "L'email est requis";
}
if ($genre == "") {
    echo "Le genre de passe est requis";
}
if ($password == "") {
    echo "Le mot de passe est requis";
}