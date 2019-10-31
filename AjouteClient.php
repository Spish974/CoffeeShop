<div>
    <div class="container">
        <?php
        include_once("Classe/ProcedureCRUD.php");
        $pdo = connectBdd();


        if (isset($_GET['Ajout_Nom'])) {
            $transfert = $pdo->query("INSERT INTO `Client`(ID_Client,`Nom`, Prenom, `Telephone`, `Index_Adresse`,Username,Email,Password,Statut) VALUES (Null,'$_GET[Ajout_Nom]','$_GET[Ajout_Prenom]','$_GET[Ajout_Téléphone]','$_GET[Ajout_Index_Adresse],'$_GET[Ajout_Username]','$_GET[Ajout_Email]','$_GET[Ajout_Password]','$_GET[Ajout_Statut]')");
            require("CRUDClient.php");
            exit();
        }
        //$stmt = $pdo->query("SELECT `ID_Produit`,`Libellé`,Prix FROM `Produit`"); ?>
        <form action="template.php" method="GET">
            <fieldset class="form-group row">
                <legend class="col-form-legend col-sm-1-12">Ajouter un produit</legend>

                <input type="hidden" name="page" value="AjouteClient" />
                <!--<div class="col-sm-1-12">
                    <div class="form-group">
                        <label for="Ajout_ID_Produit">ID Produit: </label>
                        <input type="text" name="Ajout_ID_Produit" id="" class="form-control" placeholder="0123456789..." aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>
                        <br />
                    </div> -->

                    <div class="form-group">
                        <label for="Ajout_Nom">Nom </label>
                        <input type="text" name="Ajout_Nom" id="" class="form-control" placeholder="Henry..." aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>
                        <br />
                    </div>

                    <div class="form-group">
                        <label for="Ajout_Prenom">Prenom </label>
                        <input type="text" name="Ajout_Prenom" id="" class="form-control" placeholder="Payet..." aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>
                        <br />
                    </div>

                    <div class="form-group">
                        <label for="Ajout_Téléphone">Téléphone </label>
                        <input type="text" name="Ajout_Téléphone" id="" class="form-control" placeholder="0692123456..." aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>
                        <br />
                    </div>

                    <div class="form-group">
                        <label for="Ajout_Index_Adresse">Index_Adresse </label>
                        <textarea class="form-control" name="Ajout_Index_Adresse" id="" rows="3">Balablablabla...</textarea>
                        <br />
                    </div>

                    <div class="form-group">
                        <label for="Ajout_Username">Username </label>
                        <input type="text" name="Ajout_Username" id="" class="form-control" placeholder="Henry974..." aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>
                        <br />
                    </div>

                    <div class="form-group">
                        <label for="Ajout_Email">Email </label>
                        <input type="text" name="Ajout_Email" id="" class="form-control" placeholder="Henry974@gmail.com..." aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>
                        <br />
                    </div>

                    <div class="form-group">
                        <label for="Ajout_Password">Password </label>
                        <input type="text" name="Ajout_Password" id="" class="form-control"  aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>                        <br />
                    </div>

                    <div class="form-group">
                        <label for="Ajout_Statut">Statut </label>
                        <input type="text" name="Ajout_Statut" id="" class="form-control"  aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>                        <br />
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