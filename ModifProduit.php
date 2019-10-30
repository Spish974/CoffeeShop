<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>

<?php

$dsn = 'mysql:host=mysql-rlucas974.alwaysdata.net;dbname=rlucas974_coffeeshop;port=3306;charset=utf8';
$pdo = new PDO($dsn, 'rlucas974', 'm9741223');
$get_id_produit = $_GET['id_produit'];

?>

<div>
    <div class="container">
        <form action="" method="POST" onsubmit="<?php
                                    

                                                if (isset($_POST['modif_libellé'])) {
                                                    $modif_libellé = '"'.$_POST['modif_libellé'].'"';
                                                    $sql_modif = "UPDATE `Produit` SET `Libellé`= $modif_libellé WHERE ID_PRODUIT = $get_id_produit";
                                                    $pdo->prepare($sql_modif);
                                                    $pdo->exec($sql_modif);
                                                }
                                                if (isset($_POST['modif_catégorie'])) {
                                                    $modif_catégorie = '"'.$_POST['modif_catégorie'].'"';
                                                    $sql_modif = "UPDATE `Produit` SET `Catégorie`= $modif_catégorie WHERE ID_PRODUIT = $get_id_produit";
                                                    $pdo->prepare($sql_modif);
                                                    $pdo->exec($sql_modif);
                                                }
                                                if (isset($_POST['modif_prix'])) {
                                                    $modif_prix = $_POST['modif_prix'];
                                                    $sql_modif = "UPDATE `Produit` SET `Prix`= $modif_prix WHERE ID_PRODUIT = $get_id_produit";
                                                    $pdo->prepare($sql_modif);
                                                    $pdo->exec($sql_modif);
                                                }
                                                if (isset($_POST['modif_description'])) {
                                                    $modif_description = '"'.$_POST['modif_description'].'"';
                                                    $sql_modif = "UPDATE `Produit` SET `Description`= $modif_description WHERE ID_PRODUIT = $get_id_produit";
                                                    $pdo->prepare($sql_modif);
                                                    $pdo->exec($sql_modif);
                                                }

                                                if (isset($_POST['modif_ref'])) {
                                                    
                                                    $modif_id_produit = $_POST['modif_ref'];
                                                    $sql_modif = "UPDATE `Produit` SET `ID_PRODUIT`= $modif_id_produit WHERE ID_PRODUIT = $get_id_produit";
                                                    $pdo->prepare($sql_modif);
                                                    $pdo->exec($sql_modif);
                                                }


                                                ?>">

            <div class="row">
                <div class="col-lg-12">

                    <label for="modif_ref">Nouvelle référence: </label>
                    <input type="text" class="form-control" name="modif_ref" id="" placeholder="">

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">

                    <label for="modif_libellé">Nouveau libellé: </label>
                    <input type="text" class="form-control" name="modif_libellé" id="" placeholder="">

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">

                    <label for="modif_catégorie">Nouvelle catégorie: </label>
                    <input type="text" class="form-control" name="modif_catégorie" id="" aria-describedby="helpId" placeholder="">

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">

                    <label for="modif_prix">Nouveau Prix: </label>
                    <input type="text" class="form-control" name="modif_prix" id="" aria-describedby="helpId" placeholder="">

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">

                    <label for="modif_description">Nouvelle Description:</label>
                    <textarea class="form-control" name="modif_description" id="" rows="5"></textarea>

                </div>
            </div>

            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">modifier</button>
                </div>
            </div>
        </form>
    </div>
</div>


<?php
//$sql_modif="UPDATE `Produit` SET `ID_Produit`=[value-1],`Libellé`=[value-2],`Catégorie`=[value-3],`Prix`=[value-4],`Description`=[value-5],`Image`=[value-6] WHERE ID_PRODUIT=$_GET["id_produit"]";
//$pdo->prepare($sql_modif);
//$pdo->exec($sql_modif);


?>