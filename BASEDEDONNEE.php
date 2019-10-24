<?php
$dsn = 'mysql:host=mysql-rlucas974.alwaysdata.net;dbname=rlucas974_coffeeshop;port=3306;charset=utf8';
try {

    $pdo = new PDO($dsn, 'rlucas974', 'm9741223');
    //$stmt = $pdo->query("SELECT `Nom` FROM `Pays` WHERE 1");
    /*while ($row = $stmt->fetch()) {
    echo $row['Nom']."<br />\n";
}*/
    $stmt = $pdo->query("SELECT `Nom`,`Prenom` FROM `Client` WHERE `Username`='rlucas' AND `Password`='m9741223'");
    if ($row = $stmt->fetch()) {
        echo $row['Nom'] . "<br />\n";
    }
    echo $stmt->free();
} catch (PDOException $exception) {

    echo $exception;
}
