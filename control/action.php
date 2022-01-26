<?php

$nom = $_POST['nom'];
$email = $_POST['email'];
$genre = $_POST['genre'];

if ($nom == ""){
    echo "Veuillez inserer votre nom";
} elseif ($email == "") {
    echo "Veuillez inserer votre email";
} elseif ($genre =="") {
    echo "Veuillez insetet votre genre";
} else {
    echo "Bonjour ". (($genre == "M") ? "Mr " : "Mme " )."<b>" .$nom. "</b> votre email est le suivant : <b>". $email ."</b>";
}