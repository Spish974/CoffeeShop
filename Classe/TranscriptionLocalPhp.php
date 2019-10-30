<?php
session_start();  
    if (isset($_GET["art"])) {
        $article = $_GET["art"];
        if($article == null){
            //$_SESSION["article"]=$article;
        }
        
    
        if (isset($_SESSION['indexClientsession'])) {
            $ID_client = $_SESSION['indexClientsession'];
        
            $dns = 'mysql:host=mysql-rlucas974.alwaysdata.net;dbname=rlucas974_coffeeshop;port=3306;charset=utf8';
            $pdo = new PDO($dns, 'rlucas974', 'm9741223');

            $panExist = $pdo->query("SELECT * FROM `Panier` WHERE Index_Client = '$ID_client' ");
            
            if ($panExist->rowCount() > 0) {
                /*if($donnees['produit'] == null){
                    $pdo->query("UPDATE `Panier` SET `produit`= '$article' WHERE `Index_Client` = '$ID_client'");
                }else{
                    $article = $_SESSION['produit']; 
                }*/
            //$pdo->query("UPDATE `Panier` SET `produit`= '$article' WHERE `Index_Client` = '$ID_client'");
            }else{
                $pdo->query("INSERT INTO `Panier` (`ID_Panier`, `produit`, `Index_Client`) VALUES (NULL, '$article', '$ID_client')");
            }
        }

    }
?>