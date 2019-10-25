<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Affichage base client</title>
</head>

<body>

    <h2> Base Produit actuelle <br /></h2>

    <?php

    $dsn = 'mysql:host=mysql-rlucas974.alwaysdata.net;dbname=rlucas974_coffeeshop;port=3306;charset=utf8';

    $pdo = new PDO($dsn, 'rlucas974', 'm9741223');

    $stmt = $pdo->query("SELECT `ID_Produit`,`Libellé`,Prix FROM `Produit`");
    ?>

    <table class="table">
        <thead>
            <tr>
                <th>Référence</th>
                <th>Libellé</th>
                <th>Prix</th>
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
                </tr>
            </tbody>
        <?php } ?>
    </table>


    <div class="container">
        <form action="" method="GET" onsubmit="<?php $transfert = $pdo->query("INSERT INTO `Produit`(`ID_Produit`, `Libellé`, Catégorie, `Prix`, `Description`) VALUES ('$_GET[Ajout_ID_Produit]','$_GET[Ajout_Libellé]','$_GET[Ajout_Catégorie]','$_GET[Ajout_Prix]','$_GET[Ajout_Description]')") ?>" >
            <fieldset class="form-group row">
                <legend class="col-form-legend col-sm-1-12">Ajouter un produit</legend>
                <div class="col-sm-1-12">
                    <div class="form-group">
                        <label for="Ajout_ID_Produit">ID Produit: </label>
                        <input type="text" name="Ajout_ID_Produit" id="" class="form-control" placeholder="0123456789..." aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>
                        <br />
                    </div>

                    <div class="form-group">
                        <label for="Ajout_Libellé">Libellé: </label>
                        <input type="text" name="Ajout_Libellé" id="" class="form-control" placeholder="Café..." aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>
                        <br />
                    </div>

                    <div class="form-group">
                        <label for="Ajout_Catégorie">Catégorie: </label>
                        <input type="text" name="Ajout_Catégorie" id="" class="form-control" placeholder="Boisson..." aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>
                        <br />
                    </div>

                    <div class="form-group">
                        <label for="Ajout_Prix">Prix: </label>
                        <input type="text" name="Ajout_Prix" id="" class="form-control" placeholder="1.99..." aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>
                        <br />
                    </div>

                    <div class="form-group">
                        <label for="Ajout_Description">Description: </label>
                        <textarea class="form-control" name="Ajout_Description" id="" rows="3">Balablablabla...</textarea>
                        <br />
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </div>
        </form>

<?php
//$transfert = $pdo->query("INSERT INTO `Produit`(`ID_Produit`, `Libellé`, `Prix`, `Description`, Catégorie) VALUES ('123456','test','1.99','testestest','testcatégorie')"); 
//$req_transfert = INSERT INTO `Produit`(`Description`, `Libellé`) VALUES ('testestest1', 'testtest2')""; 
//exec($req_transfert);
?>




</body>

</html>