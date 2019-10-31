<?php

function connectBdd()
{
    $pdo = new PDO('mysql:host=mysql-rlucas974.alwaysdata.net;dbname=rlucas974_coffeeshop;port=3306;charset=utf8', 'rlucas974', 'm9741223');
    return $pdo;
}

function selectTable($pdo, $table)
{
    $stmt = $pdo->query("SELECT * FROM $table");
    return $stmt;
}

function voirLigne($pdo, $table,$nom_id,$num_id )
{
    $stmt = $pdo->query("SELECT * FROM $table WHERE $nom_id = $num_id  ");
    return $stmt;
}

function supprimeLigne($pdo,$table,$nom_id,$num_id,$page_retour){
    $sql_supprime = "DELETE FROM $table WHERE $nom_id =".$num_id;

    $pdo->prepare($sql_supprime);
    if($pdo->exec($sql_supprime) != 0){
    echo("la référence: ".$num_id." a été supprimée");
    require($page_retour);
    exit();
 }
 else{
     echo"aucune ligne n'a été supprimée";
     
     require($page_retour);
     exit();
 }
    
}

function modifieAttributLigne($pdo,$table,$attribut, $attribut_valeur,$nom_id,$num_id){
    $modif_libellé = "'".$attribut_valeur."'";
    $sql_modif = "UPDATE $table SET $attribut=$modif_libellé WHERE $nom_id = $num_id";
    $pdo->prepare($sql_modif);
    $pdo->exec($sql_modif);
}



?>
