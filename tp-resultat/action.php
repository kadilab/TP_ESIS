<?php

include "./resultats.php";

$matricule = strtoupper($_GET['matricule']);
$promotion = $_GET['promotion'];

if($matricule != "" && $promotion != "" ) {

    if($cotes[$promotion][$matricule] == null) {
        echo "L'étudiant n'éxtsite pas";
        die;
    }

    echo "Nom de l'étudiant : <b>".$cotes[$promotion][$matricule]['nom']."</b><br>";
    echo "Promotion : <b>".$promotion."</b><br><br>";


    echo "<table><thead><td>Cours</td><td>Cote</td></thead>";
    foreach($cotes[$promotion][$matricule]["cotes"] as $cours => $cote) {
        echo "<tr><td>".strtoupper($cours)."</td><td><b>".$cote."</b></td></tr>";
    }
    echo "</table>";
} else {
    echo "Verifiez votre matricule ou promotion";
};