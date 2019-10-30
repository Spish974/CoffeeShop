<!DOCTYPE html>
<html>
<?php require("Template/head.php"); ?>

<body class="accueil" style="background-color: #f3f2f1">
    <div class="bckg-img">
        <?php require('Template/mainmenu.php'); ?>
        <img class="logo" src="src/img/logo.png">
        <i class="fas fa-chevron-down godown"></i>
    </div>
    <div class="contenu" style="margin: 0 5%;margin-bottom: 50vh;">
        <!--CODE APRES LA BALISE-->
        <img src="src/img/CapLatteLockup-1254x884-IMG.png" class="imgcoffee" alt="coffee">
        <h1>Une envie de gourmandise?</h1>
        <p class="textaccueil">Le favori classique de Tassimo s'est un peu transformé avec Coffee Shop Selection ! Chai latte est une spécialité savoureuse de thé avec des épices Indiennes et mousse de lait. <br>Ce thé crémeux transforme votre pause quotidienne en un moment de détente exotique. </p>
        <div class="img-2-lunch">
            <div class="acc-info2">
                <h1>Ambiance Chill</h1>
            </div>
        </div>
        <!---->
        <div>
            <h1>Pour bien débuter votre journée</h1>
            <div class="cat-img-acc">
                <img class="categ" alt="" src="src/img/cafegrain.png">
                <img class="categ" alt="" src="src/img/sommaire_4.png">
                <img class="categ" alt="" src="src/img/smoothies-fruits-legumes-sante.jpg">
            </div>
        </div>
        <hr style="background: #b5b5b5;width: 60%;margin: 50px auto;">
        <div class="info-brunch">
            <h1>
                Laissez vous tenter par nos délicieux brunch maison
            </h1>
            <div class="brunchdiv brunch1">

            <div class="textbrunch">
                    Une nouvelle recette plus moelleuse qui éveillera votre appétit.
                </div>

                <img alt="" src="src/img/brunch_image.png">
            </div>
        </div>
    </div>
    <?php require('Template/footer.php'); ?>
</body>

</html>