<?php
include_once('Classe/ProcedureCRUD.php');

$pdo = connectBdd();
supprimeLigne($pdo,"Client","ID_Client",$_GET['id_client'],"CRUDClient.php");
 /*$sql_supprime = "DELETE FROM Produit WHERE ID_PRODUIT =".$_GET['id_produit'];
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
 }*/

 




?>