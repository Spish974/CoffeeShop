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
?>

<div>
    <div class="container">
        <form method="GET" action="" onsubmit="<?php 
            if(isset($_GET['modif_nom'])){
                
            }
        
        ?>">

            <div class="row">
                <div class="col-lg-12">
                    
                      <label for="modif_ref">Nouvelle référence: </label>
                      <input type="text" class="form-control" name="modif_ref" id="" aria-describedby="helpId" placeholder="">
                    
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    
                      <label for="modif_nom">Nouveau Nom: </label>
                      <input type="text" class="form-control" name="modif_nom" id="" aria-describedby="helpId" placeholder="">
                    
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    
                      <label for="modif_libellé">Nouveau libellé: </label>
                      <input type="text" class="form-control" name="modif_libellé" id="" aria-describedby="helpId" placeholder="">
                    
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    
                      <label for="modif_categorie">Nouvelle catégorie: </label>
                      <input type="text" class="form-control" name="modif_categorie" id="" aria-describedby="helpId" placeholder="">
                    
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
        </form>
    </div>
</div>


<?php
//$sql_modif="UPDATE `Produit` SET `ID_Produit`=[value-1],`Libellé`=[value-2],`Catégorie`=[value-3],`Prix`=[value-4],`Description`=[value-5],`Image`=[value-6] WHERE ID_PRODUIT=$_GET["id_produit"]";
//$pdo->prepare($sql_modif);
//$pdo->exec($sql_modif);


?>