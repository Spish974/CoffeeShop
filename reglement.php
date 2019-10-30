<head>
    <title>Coffee Shop - Valider</title>
    
</head>

<body>
    <?php
    if (isset($_SESSION["logconnect"]) == true) {
        if ($_SESSION["nomsession"] == null) {
            echo "<div class='propriétaire'><h1>" /*. $page . */ . " de " . $_SESSION["Usernamesession"] . "</h1></div>";
        } else {
            echo "<div class='propriétaire'><h1>" /*. $page . */ . " de " . $_SESSION["nomsession"] . " " . $_SESSION["prenomsession"] . "</h1></div>";
        }
    } else { }

    if (isset($_SESSION["logconnect"]) == true) {
        $bdd->createPanier();
        ?> <button id='deconnexion' onClick=""> <a href="deconnexion.php"> Deconnexion </a> </button> <?php
    }else {
        echo "Connectez-vous avec l'onglet \"Login\" pour voir votre panier !" . '<br>';
    }
    ?>

    <div class='resume' style="margin-top:20px">
        <?php
        $bdd->stringToPanier();
        ?>
        <input type="button" id="videPanButt" value="Vider le panier">
    </div>