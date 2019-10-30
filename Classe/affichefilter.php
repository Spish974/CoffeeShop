<?php
$dns = 'mysql:host=mysql-rlucas974.alwaysdata.net;dbname=rlucas974_coffeeshop;port=3306;charset=utf8';
$pdo = new PDO($dns, 'rlucas974', 'm9741223');
$filter = "1";
if (isset($_GET['filter'])) $filter = $_GET['filter'];

if ($filter != "1") {
    $filter="Libellé REGEXP '" . $filter . "'";
}

$stmt = $pdo->query("SELECT * FROM `Produit` WHERE $filter");
if ($stmt->rowCount() > 0) {
    $countart = 0;
    while ($donnees = $stmt->fetch()) {
        echo "<div class='list-article-unite'><img alt src='src/img/" . $donnees["Image"] . "'>
                <p class='tit-art-unit'>" . $donnees["Libellé"] . "</p>
                <p class='prix-art-unit'>" . $donnees["Prix"] . "€</p>
                <span class='ajouter-panier' idarticle='" . $donnees["ID_Produit"] . "'>Ajouter</span>
                </div>";
        $countart += 1;
    }
    echo "<div style='margin-top: 30px;'><p class='nb-choice'>" . $countart . " choix</p>
            </div>";
}