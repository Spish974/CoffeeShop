<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Affichage base client <br /></title>
</head>
<br /><br />
<h2> Base produit actuelle <br /><br /><br /></h2>

<?php

$dsn = 'mysql:host=mysql-rlucas974.alwaysdata.net;dbname=rlucas974_coffeeshop;port=3306;charset=utf8';

$pdo = new PDO($dsn, 'rlucas974', 'm9741223');

$stmt = $pdo->query("SELECT `ID_Produit`,`Libellé`,Prix FROM `Produit`");


?>
<div class="container">
    <div class="col-lg-12">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Référence</th>
                    <th>Libellé</th>
                    <th>Prix</th>
                    <th>Action</th>
                </tr>
            </thead>

            <?php
            while ($donnee = $stmt->fetch()) {
                ?>

                <tbody>
                    <tr>

                        <td scope="row"> <?php echo ($donnee["ID_Produit"]) ?> </td>
                        <td> <?php echo ($donnee["Libellé"]) ?> </td>
                        <td> <?php echo ($donnee["Prix"]) ?> </td>
                        <td> 
                        <?php echo "<a id='btn_voir' class='btn btn-primary' href='VoirProduit.php?id_produit=" . $donnee['ID_Produit'] . "'> Voir </a>"; ?>  
                        <?php echo "<a id='btn_modif' class='btn btn-primary' href='ModifProduit.php?id_produit=" . $donnee['ID_Produit'] . "'> Modifier </a>"; ?>
                        <?php echo "<a id='btn_supprimer' class='btn btn-primary' href='SupprimeProduit.php?id_produit=" . $donnee['ID_Produit'] . "'> Supprimer </a>"; ?>
                        </td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
        <div>
        </div>
        <br /><br /><br />

        <a name="AjouteProduit" id="" class="btn btn-primary" href="AjouteProduit.php" role="button">Ajouter un produit</a>

        <?php
        //$transfert = $pdo->query("INSERT INTO `Produit`(`ID_Produit`, `Libellé`, `Prix`, `Description`, Catégorie) VALUES ('123456','test','1.99','testestest','testcatégorie')"); 
        //$req_transfert = INSERT INTO `Produit`(`Description`, `Libellé`) VALUES ('testestest1', 'testtest2')""; 
        //exec($req_transfert);
        ?>
    </div>
</div>