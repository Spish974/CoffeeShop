<head>
    <title>Coffee Shop - Panier</title>
    <script type="text/javascript" src="src/scriptPanier.js"></script>

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
    ?>
    <!-- window.location.href='template.php?page=panier'-->

    <button id='bouton' onClick="window.location.href='src/FuncPanier.php'"> Bouton resumé </button>
    <button id='creerP' onClick="creerProduit('test', 4, 6)"> Creer produit </button>
    <button id='ajouter' onClick="augmenteQuantite(produittest)"> + </button>
    <button id='retirer' onClick="reduireQuantite(produittest)"> - </button>
    <a href="deconnexion.php">deconnexion</a>
    <div class='liste'>
        <?php
        if (error_reporting(E_ERROR)) {
            error_reporting(0);
        }
        /*if(isset($bddPanier) == true){
            echo 'var exist'.isset($bddPanier);
            //session_start();*/
        if (isset($_SESSION["logconnect"]) == true) {
            if (isset($bddPanier) == false) {
                $bddPanier = new Base;
                $bddPanier->recupPanier();
                $t = sizeof($_SESSION["Libellé"]);
                for ($i = 0; $i < $t; $i++) {
                    echo $_SESSION["Libellé"][$i] . " : " . $_SESSION["Prix"][$i] . "€ <br/>";
                }
            } else {
                $bddPanier->recupPanier();
                $t = sizeof($_SESSION["Libellé"]);
                for ($i = 0; $i < $t; $i++) {
                    echo $_SESSION["Libellé"][$i] . " : " . $_SESSION["Prix"][$i] . "€ <br/>";
                }
            }
        } else {
            echo $_SESSION["logconnect"] . '<br>';
            //echo 'var exist'.isset($bddPanier).'<br>';
            echo "Connectez-vous avec l'onglet \"Login\" pour voir votre panier !" . '<br>';
        }
        /*}else if (isset($bddPanier) == false) {
            echo 'var not exist'.isset($bddPanier);
            /*$bddPanier = new Base;
            $bddPanier->recupPanier();
        }*/
        ?>

    </div>

    <div class='resume' style="margin-top:20px">
        <?php
        $bdd->stringToPanier();
        ?>
        <input type="button" id="videPanButt" action="alertt()" value="Vider le panier">
    </div>