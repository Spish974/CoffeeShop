<?php
$dns = 'mysql:host=mysql-rlucas974.alwaysdata.net;dbname=rlucas974_coffeeshop;port=3306;charset=utf8';
$pdo = new PDO($dns, 'rlucas974', 'm9741223');
if (isset($_GET["valuKey"])) {
    $var = $_GET["valuKey"];
    $var = "Nom REGEXP '" . $var . "'";
    $stmt = $pdo->query("SELECT * FROM `Client` WHERE $var");
    if ($stmt->rowCount() > 0) {
        while ($donnees = $stmt->fetch()) {
            echo $donnees["Nom"] . "<br>";
        }
    } else {
        echo "aucune recherche";
    }
}
