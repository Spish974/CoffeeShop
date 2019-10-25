<?php
session_start();
if (isset($_SESSION["logconnect"])==false){
    require('Classe/ConnectBDD.php');
    if(isset($_POST["action"]) && isset($_POST["usrname"]) && isset($_POST["password"])){
        $bdd = new Base;
        $bdd->TestClientConnexion($_POST["usrname"],$_POST["password"]);
    }
}
?>
<div class="contener-main-menu">
    <div class="mainmenu">
        <div class="titlemenu"><a>Coffee Shop</a></div>
        <div class="contener">
            <a href="index.php">Accueil</a>
            <a href="template.php?page=admin">Admin</a>
            <a href="template.php?page=menu">Menu</a>
            <a href="template.php?page=panier"><i class="fas fa-shopping-bag"></i> Panier</a>
            <span id="compte"><?php if (isset($_SESSION["logconnect"])==false){echo "<a class='login'>Login</a>";}else{echo '<a href="template.php?page=compte">Compte</a>';}?></span>
        </div>
    </div>
</div>
        <?php require('popuplogin.php'); ?>