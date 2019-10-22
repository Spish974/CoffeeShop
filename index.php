<!DOCTYPE html>
<html>

<head>
    <title>Coffee Shop</title>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="src/img/icon.png" />
    <link href="src/style.css" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="src/script.js"> </script>
    <link href="src/fontawesome/css/all.css" rel="stylesheet">
</head>

<body class="accueil" style="background-color: #f3f2f1">
    <div class="bckg-img">
        <?php require('mainmenu.php'); ?>
        <img class="logo" src="src/img/logo.png">
        <i class="fas fa-chevron-down godown"></i>
    </div>
    <div class="contenu" style="margin-bottom:50vh;">
        <!--CODE APRES LA BALISE-->
        <img src="src/img/CapLatteLockup-1254x884-IMG.png" class="imgcoffee" alt="coffee">
        <h1>Une envie de gourmandise?</h1>
        <p class="textaccueil">Le favori classique de Tassimo s'est un peu transformé avec Coffee Shop Selection ! Chai latte est une spécialité savoureuse de thé avec des épices Indiennes et mousse de lait. <br>Ce thé crémeux transforme votre pause quotidienne en un moment de détente exotique. </p>
        <!---->
    </div>
    <?php require('footer.php'); ?>
</body>
</html>