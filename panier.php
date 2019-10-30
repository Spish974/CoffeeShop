<head>
    <title>Coffee Shop - Panier</title>
    <script type="text/javascript" src="src/scriptPanier.js"></script>

</head>

<div>
    <?php
    if (isset($_SESSION["logconnect"]) == true) {
        if ($_SESSION["nomsession"] == null) {
            echo "<div class='propriétaire'><h1>" /*. $page . */ . " de " . $_SESSION["Usernamesession"] . "</h1></div>";
        } else {
            echo "<div class='propriétaire'><h1>" /*. $page . */ . " de " . $_SESSION["nomsession"] . " " . $_SESSION["prenomsession"] . "</h1></div>";
        }
    } else { }
    ?>
</div>

<div class='resume' style="margin-top:20px">
    <div class="element-pan">
        <?php
        $bdd->stringToPanier();
        ?>
    </div>
    <input type="button" id="videPanButt" value="Vider le panier">
</div>