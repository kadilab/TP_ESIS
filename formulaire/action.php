<?php

// Verification des données envoyées
if (isset($_POST['nom']) && $_POST['postnom'] && $_POST['matricule'] && $_POST['genre'] && $_POST['promotion'] && $_POST['email'] && $_POST['prenom']) {
    // Recuperation des données
    $name = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $prenom = $_POST['prenom'];
    $matricule = $_POST['matricule'];
    $genre = $_POST['genre'];
    $promotion = $_POST['promotion'];
    $email = $_POST['email'];
    // Affichqge des données envoyées sur une autre page
    echo 'Nom : ' . $name . ' ' . $postnom . ' ' . $prenom . '<br>';
    echo 'Promotion : ' . $promotion . '<br>';
    echo 'Genre : ' . $genre . '<br>';
    echo 'Email : ' . $email . '<br>';
    echo 'Matricule : ' . $matricule . '<br>';
} else {

    if ($_POST['nom'] == "") {
        echo "Le nom est requis </br>";
        die();
    }

    if ($_POST['postnom'] == "") {
        echo "Le  post-nom est requis </br>";
                die();
    }

    if ($_POST['matricule'] == "") {
        echo "Le  esmatriculet requis </br>";
                die();
    }

    if ($_POST['genre'] == "") {
        echo "Le genre  est requis </br>";
                die();
    }

    if ($_POST['promotion'] == "") {
        echo "La promotion est requise </br>";
                die();
    }
    if ($_POST['email'] == "") {
        echo "L'email  est requis </br>";
                die();
    }

    if ($_POST['prenom'] == "") {
        echo "Le prenom est requis </br>";
                die();
    }
}

