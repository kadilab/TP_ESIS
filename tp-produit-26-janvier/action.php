<?php

session_start();

$produits = array(
    "banane" => 1000,
    "citron" => 500,
    "mangues" => 1000,
    "carotte" => 1500,
    "orange" => 800
);

$tg = 0;

foreach ($_SESSION['historique'] as $item) {
    $tg += $item['total'];
}

$choix = $_POST['designation'];
$quantite = $_POST['quantite'];

if ($quantite != "" && $choix != "") {

    if ($quantite <= 0) {
        echo "Quanité invalide";
        die();
    }

    $pu = $produits[$choix];
    $total = $produits[$choix] * $quantite;

    $_SESSION['historique'][] = array(
        "produit" => $choix,
        "quantite" => $quantite,
        "prixunitaire" => $pu,
        "total" => $total,
    );
} else {
    echo "Assurez-vous de remplir tous les champs";
}

echo "<br><br><table>
            <thead><td>Produit</td><td>Quantité</td><td>Prix Unitaire</td><td>Total</td></thead><tbody>";
foreach ($_SESSION['historique'] as $historique) {
    echo "<tr>
                <td>" . $historique['produit'] . "</td>
                <td>" . $historique['prixunitaire'] . "</td>
                <td>" . $historique['quantite'] . "</td>
                <td>" . $historique['total'] . "</td>
           </tr>";
}
echo " <tr>
            <td>Total Generale : </td>
            <td></td>
            <td></td>
            <td><b>$tg</b></td>
       </tr>
</tbody></table>";