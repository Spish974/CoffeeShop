<head>
    <title>Affichage base client <br /></title>
    
</head>
<br /><br />
<h2> Base Client actuelle <br /><br /><br /></h2>



<?php
include_once('Classe/ProcedureCRUD.php');

$pdo = connectBdd();
$stmt = selectTable($pdo,"Client");
/*$dsn = 'mysql:host=mysql-rlucas974.alwaysdata.net;dbname=rlucas974_coffeeshop;port=3306;charset=utf8';

$pdo = new PDO($dsn, 'rlucas974', 'm9741223');

$stmt = $pdo->query("SELECT `ID_Produit`,`Libellé`,Prix FROM `Produit`");*/


?>
<div class="container">
    <div class="col-lg-12">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Référence</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th></th>
                </tr>
            </thead>

            <?php
            while ($donnee = $stmt->fetch()) {
                ?>

                <tbody>
                    <tr>

                        <td scope="row"> <?php echo ($donnee["ID_Client"]) ?> </td>
                        <td> <?php echo ($donnee["Nom"]) ?> </td>
                        <td> <?php echo ($donnee["Prenom"]) ?> </td>
                        <td> 
                        <?php echo "<a id='btn_voir' class='btn btn-primary' href='template.php?page=VoirClient&id_client=" . $donnee['ID_Client'] . "'> Voir </a>"; ?>  
                        <?php echo "<a id='btn_modif' class='btn btn-primary' href='template.php?page=ModifClient&id_client=" . $donnee['ID_Client'] . "'> Modifier </a>"; ?>
                        <?php echo "<a id='btn_supprimer' class='btn btn-primary' href='template.php?page=SupprimeClient&id_client=" . $donnee['ID_Client'] . "'> Supprimer </a>"; ?>
                        </td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
        <div>
        </div>
        <br /><br /><br />

        <a name="AjouteProduit" id="btn_ajout_produit" class="btn btn-primary" href="template.php?page=AjouteProduit" role="button">Ajouter un produit</a>

        <?php
        //$transfert = $pdo->query("INSERT INTO `Produit`(`ID_Produit`, `Libellé`, `Prix`, `Description`, Catégorie) VALUES ('123456','test','1.99','testestest','testcatégorie')"); 
        //$req_transfert = INSERT INTO `Produit`(`Description`, `Libellé`) VALUES ('testestest1', 'testtest2')""; 
        //exec($req_transfert);
        ?>
    </div>
</div>