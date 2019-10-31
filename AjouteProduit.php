<div>
    <div class="container">
        <?php
        include_once("Classe/ProcedureCRUD.php");
        $pdo = connectBdd();


        if (isset($_GET['Ajout_Libellé'])) {
         
            $transfert = $pdo->query("INSERT INTO `Produit`(`ID_Produit`, `Libellé`, Catégorie, `Prix`, `Description`) VALUES (Null,'$_GET[Ajout_Libellé]','$_GET[Ajout_Catégorie]','$_GET[Ajout_Prix]','$_GET[Ajout_Description]')");
            require("CRUDProduit.php");
            exit();
        }
        //$stmt = $pdo->query("SELECT `ID_Produit`,`Libellé`,Prix FROM `Produit`"); ?>
        <form action="template.php" method="GET">
            <fieldset class="form-group row">
                <legend class="col-form-legend col-sm-1-12">Ajouter un produit</legend>

                <input type="hidden" name="page" value="AjouteProduit" />
                <!--<div class="col-sm-1-12">
                    <div class="form-group">
                        <label for="Ajout_ID_Produit">ID Produit: </label>
                        <input type="text" name="Ajout_ID_Produit" id="" class="form-control" placeholder="0123456789..." aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>
                        <br />
                    </div> -->

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
    </div>

</div>