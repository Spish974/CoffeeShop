<!DOCTYPE html>
<html>
<?php require("Template/head.php"); ?>

<body style="background-color: #ffffff;" class="template">
    <?php require('Template/mainmenu.php'); ?>
    <div class="enre-reus">
        <h1>ENREGISTREMENT REUSSI</h1>
        <?php
        /*$bdd = new Base;
            $bdd->ajoutuser($_POST["usern"],$_POST["eml"],$_POST["pwrd"])*/
        ?>
        <p>
            Nous somme heureux de vous voir parmis nous :)<br>
            Pour confirmer votre inscription veuillez cliquer sur le lien du mail reçus.
        </p>
    </div>
    <div style="
    position: absolute;
    bottom: 0;
    width: 100%;
">
    <?php require("Template/footer.php"); ?>
</div>
</body>