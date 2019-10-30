<?php
include_once("Classe/ProcedureCRUD.php");
$pdo=connectBdd();
$get_id_produit = $_GET['id_client'];


if (isset($_POST['modif_nom']) && !empty('modif_nom') ) {
    modifieAttributLigne($pdo,"Client","Nom",$_POST['modif_nom'],"ID_Client",$get_id_produit);
}
if (isset($_POST['modif_prenom']) && !empty('modif_prenom')) {
    modifieAttributLigne($pdo,"Client","Prenom",$_POST['modif_prenom'],"ID_Client",$get_id_produit);
}
if (isset($_POST['modif_téléphone']) && !empty('modif_téléphone')) {
    modifieAttributLigne($pdo,"Client","Telephone",$_POST['modif_téléphone'],"ID_Client",$get_id_produit);
}
if (isset($_POST['modif_index_adresse']) && !empty('modif_index_adresse')) {
    modifieAttributLigne($pdo,"Client","Index_Adresse",$_POST['modif_index_adresse'],"ID_Client",$get_id_produit);
}
if (isset($_POST['modif_username']) && !empty('modif_username')) {
    modifieAttributLigne($pdo,"Client","Username",$_POST['modif_username'],"ID_Client",$get_id_produit);
}
if (isset($_POST['modif_email']) && !empty('modif_email')) {
    modifieAttributLigne($pdo,"Client","Email",$_POST['modif_email'],"ID_Client",$get_id_produit);
}
if (isset($_POST['modif_password']) && !empty('modif_password')) {
    modifieAttributLigne($pdo,"Client","Password",$_POST['modif_password'],"ID_Client",$get_id_produit);
}
if (isset($_POST['modif_statut']) && !empty('modif_statut')) {
    modifieAttributLigne($pdo,"Client","Statut",$_POST['modif_statut'],"ID_Client",$get_id_produit);
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

                <label for="modif_nom">Nouveau Nom:  </label>
                <input type="text" class="form-control" name="modif_nom" id="" placeholder="">

            </div>
        </div>
        <br />

        <div class="row">
            <div class="col-lg-12">

                <label for="modif_prenom">Nouveau Prenom: </label>
                <input type="text" class="form-control" name="modif_prenom" id="" aria-describedby="helpId" placeholder="">

            </div>
        </div>
        <br />

        <div class="row">
            <div class="col-lg-12">

                <label for="modif_téléphone">Nouveau Téléphone: </label>
                <input type="text" class="form-control" name="modif_téléphone" id="" aria-describedby="helpId" placeholder="">

            </div>
        </div>
        <br />

        <div class="row">
            <div class="col-lg-12">

                <label for="modif_index_adresse">Nouvel Index_Adresse: </label>
                <textarea class="form-control" name="modif_index_adresse" id="" rows="5"></textarea>

            </div>
        </div>

        <br />

        <div class="row">
            <div class="col-lg-12">

                <label for="modif_username">Nouvel Username: </label>
                <textarea class="form-control" name="modif_username" id="" rows="5"></textarea>

            </div>
        </div>

        <br />

        <div class="row">
            <div class="col-lg-12">

                <label for="modif_email">Nouvel Email: </label>
                <textarea class="form-control" name="modif_email" id="" rows="5"></textarea>

            </div>
        </div>

        <br />

        <div class="row">
            <div class="col-lg-12">

                <label for="modif_password">Nouveau Password: </label>
                <textarea class="form-control" name="modif_password" id="" rows="5"></textarea>

            </div>
        </div>

        <br />

        <div class="row">
            <div class="col-lg-12">

                <label for="modif_statut">Nouvel Statut: </label>
                <textarea class="form-control" name="modif_statut" id="" rows="5"></textarea>

            </div>
        </div>


        <br /><br />
        <div class="form-group row">
            <div class="offset-lg-4 col-lg-1">
                <button type="submit" class="btn btn-primary">modifier</button>
            </div>
            <div class="col-lg-1">
                <a name="" id="" class="btn btn-primary" href="template.php?page=CRUDClient" role="button">Retour</a>
            </div>
        </div>
    </form>



</div>



<?php
//$sql_modif="UPDATE `Produit` SET `ID_Produit`=[value-1],`Libellé`=[value-2],`Catégorie`=[value-3],`Prix`=[value-4],`Description`=[value-5],`Image`=[value-6] WHERE ID_PRODUIT=$_GET["id_produit"]";
//$pdo->prepare($sql_modif);
//$pdo->exec($sql_modif);


?>