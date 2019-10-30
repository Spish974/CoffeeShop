<?php
$dns = 'mysql:host=mysql-rlucas974.alwaysdata.net;dbname=rlucas974_coffeeshop;port=3306;charset=utf8';
$pdo = new PDO($dns, 'rlucas974', 'm9741223');
if (isset($_GET["valuKey"])) {
    $var = $_GET["valuKey"];
    $var = "Libellé REGEXP '" . $var . "'";
    $stmt = $pdo->query("SELECT * FROM `Produit` WHERE $var");
    if ($stmt->rowCount() > 0) {
        for($i=0;$i<5;$i++){
            if($donnees = $stmt->fetch()) {
                $s='prendreSug("'.$donnees['Libellé'].'")';
                echo "<p onclick='".$s."' class='sug-trouv'>".$donnees["Libellé"] . "</p>";
            }
        }
        
    } else {
        echo "aucune recherche";
    }
}
