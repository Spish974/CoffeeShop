<head>
    <title>Coffee Shop - Panier</title>
    <script type="text/javascript" src="src/scriptPanier.js"></script>

</head>

<div>
    <?php
    if (isset($_SESSION["logconnect"]) == true) {
        if ($_SESSION["nomsession"] == null) {
            echo "<div class='propriétaire'><h1>" . " de " . $_SESSION["Usernamesession"] . "</h1></div>";
        } else {
            echo "<div class='propriétaire'><h1>" . " de " . $_SESSION["nomsession"] . " " . $_SESSION["prenomsession"] . "</h1></div>";
        }
    } else { }

    ?>  <?php
    if (isset($_SESSION["logconnect"]) == true) {
        $bdd->createPanier();
        ?> 

        <?php
    }else {
        echo "Connectez-vous avec l'onglet \"Login\" pour voir votre panier !" . '<br>';
    }
    ?>
</div>
<div class='resume' style="margin-top:20px">
    <div class="element-pan">
        <?php
        $bdd->stringToPanier();
        ?>
    </div>
</div>
