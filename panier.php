<!DOCTYPE html>
<html>

<head>
    <title>Coffee Shop - Panier</title>
    <script type="text/javascript" src="src/scriptPanier.js"></script>

</head>
<!-- window.location.href='template.php?page=panier'-->

<button id='bouton' onClick="window.location.href='src/FuncPanier.php'"> Bouton resumé </button>
<button id='creerP' onClick="creerProduit('test', 4, 6)"> Creer produit </button>
<button id='ajouter' onClick="augmenteQuantite(produittest)"> + </button>
<button id='retirer' onClick="reduireQuantite(produittest)"> - </button>

    <div class='liste'>
        <?php
        if(error_reporting(E_ERROR) > 1){
            error_reporting(0);
            
        }
        
        //echo ini_set('error_reporting', E_ALL);
        //echo error_reporting(0);
        
        //session_start();
        if (isset($_SESSION["logconnect"])==true) {
            $bddPanier = new Base;
            $bddPanier->recupPanier();
            $t = sizeof($_SESSION["Libellé"]);
            if (isset($_SESSION["logconnect"])==true) {
                for ($i = 0;$i < $t;$i++) {
                    echo $_SESSION["Libellé"][$i]." : ".$_SESSION["Prix"][$i]."€ <br/>";
                }
            }
        }else{
            echo ("Connectez-vous avec l'onglet \"Login\" pour voir votre panier !"); 
        }

        ?>

    </div>

    <div class='resume'>

    </div>

</html>