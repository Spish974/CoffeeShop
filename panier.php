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
    require('Classe/ConnectBDD.php');
    //session_start();
    if (isset($_SESSION["logconnect"])==true) {
        $bddPanier = new Base;
        $bddPanier->recupPanier();
        
    }
    $t = sizeof($_SESSION["Libellé"]);
    if (isset($_SESSION["logconnect"])==true) {
        
        for($i = 0;$i < $t;$i++){
            echo $_SESSION["Libellé"][$i];
            echo (" : ");
            echo $_SESSION["Prix"][$i];
            echo ("€");
            ?> <br/> <?php
        }
    
        /*foreach($_SESSION["Libellé"] as $lib){
            echo $lib;
            echo $_SESSION["Prix"];
            
            
        }*/
        //foreach ($_SESSION["Prix"] as $prix) {
            //$produit["Prix"] = $prix;
            
            //echo $prix; 
        //}
        //$produit;
        
    }

?>

</div>


<div class='resume'>

</div>

</html>

<?php
/*
class Resume
{   public function resume(){
    require('Classe/ConnectBDD.php');
    if (isset($_SESSION["logconnect"])==true) {
        $bddPanier = new Resume;
        $bddPanier->recupPanier();
    }
}
}*/
?>