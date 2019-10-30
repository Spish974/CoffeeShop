<?php
include_once("Classe/ProcedureCRUD.php");
$pdo=connectBdd();
$get_id_produit = $_GET['id_produit'];


if (isset($_POST['modif_libellé']) && !empty('modif_libellé') ) {
    modifieAttributLigne($pdo,"Produit","Libellé",$_POST['modif_libellé'],"ID_Produit",$get_id_produit);
}
if (isset($_POST['modif_catégorie']) && !empty('modif_catégorie') ) {
    modifieAttributLigne($pdo,"Produit","Catégorie",$_POST['modif_catégorie'],"ID_Produit",$get_id_produit);
}
if (isset($_POST['modif_prix']) && !empty('modif_prix')) {
    modifieAttributLigne($pdo,"Produit","prix",$_POST['modif_prix'],"ID_Produit",$get_id_produit);
}
if (isset($_POST['modif_description']) && !empty('modif_description')) {
    modifieAttributLigne($pdo,"Produit","description",$_POST['modif_description'],"ID_Produit",$get_id_produit);
}

/*if (isset($_POST['modif_ref'])) {
                                                    
                                                    $modif_id_produit = $_POST['modif_ref'];
                                                    $sql_modif = "UPDATE `Produit` SET `ID_PRODUIT`= $modif_id_produit WHERE ID_PRODUIT = $get_id_produit";
                                                    $pdo->prepare($sql_modif);
                                                    $pdo->exec($sql_modif);
                                                }*/




?>


<div class="container">
    <form action="" method="POST">

        <!-- <div class="row">
                <div class="col-lg-12">

                    <label for="modif_ref">Nouvelle référence: </label>
                    <input type="text" class="form-control" name="modif_ref" id="" placeholder="">

                </div>
            </div> -->

        <div class="row">
            <div class="col-lg-12">

                <label for="modif_libellé">Nouveau libellé: </label>
                <input type="text" class="form-control" name="modif_libellé" id="" placeholder="">

            </div>
        </div>
        <br />

        <div class="row">
            <div class="col-lg-12">

                <label for="modif_catégorie">Nouvelle catégorie: </label>
                <input type="text" class="form-control" name="modif_catégorie" id="" aria-describedby="helpId" placeholder="">

            </div>
        </div>
        <br />

        <div class="row">
            <div class="col-lg-12">

                <label for="modif_prix">Nouveau Prix: </label>
                <input type="text" class="form-control" name="modif_prix" id="" aria-describedby="helpId" placeholder="">

            </div>
        </div>
        <br />

        <div class="row">
            <div class="col-lg-12">

                <label for="modif_description">Nouvelle Description:</label>
                <textarea class="form-control" name="modif_description" id="" rows="5"></textarea>

            </div>
        </div>

        <br /><br />
        <div class="form-group row">
            <div class="offset-lg-4 col-lg-1">
                <button type="submit" class="btn btn-primary">modifier</button>
            </div>
            <div class="col-lg-1">
                <a name="" id="" class="btn btn-primary" href="template.php?page=CRUDProduit" role="button">Retour</a>
            </div>
        </div>
    </form>



</div>



<?php
//$sql_modif="UPDATE `Produit` SET `ID_Produit`=[value-1],`Libellé`=[value-2],`Catégorie`=[value-3],`Prix`=[value-4],`Description`=[value-5],`Image`=[value-6] WHERE ID_PRODUIT=$_GET["id_produit"]";
//$pdo->prepare($sql_modif);
//$pdo->exec($sql_modif);


?>