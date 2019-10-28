<?php
 $dsn = 'mysql:host=mysql-rlucas974.alwaysdata.net;dbname=rlucas974_coffeeshop;port=3306;charset=utf8';

 $pdo = new PDO($dsn, 'rlucas974', 'm9741223');
 $sql_supprime = "DELETE FROM Produit WHERE ID_PRODUIT =".$_GET['id_produit'];
 $pdo->prepare($sql_supprime);
 if($pdo->exec($sql_supprime) != 0){
    echo("la référence: ".$_GET['id_produit']." a été supprimée");
    sleep (3);
    require("CRUDProduit.php");
    exit();
 }
 else{
     echo"aucunne ligne n'a été supprimée";
     sleep (3);
     require("CRUDProduit.php");
     exit();
 }

 




?>