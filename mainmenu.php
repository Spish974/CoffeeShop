<?php
require "Classe/Client.php";
$client = new Client;
if(isset($_POST["usrname"]) && isset($_POST["password"])){
    $client->verifLogin($_POST["usrname"],$_POST["password"]);
}
?>
<div class="contener-main-menu">
    <div class="mainmenu">
        <div class="titlemenu"><a>Coffee Shop</a></div>
        <div class="contener">
            <a href="index.php">Accueil</a>
            <a href="template.php?page=menu">Menu</a>
            <a href="template.php?page=panier"><i class="fas fa-shopping-bag"></i> Panier</a>
            <span id="compte"></span>
        </div>
    </div>
</div>
        <?php require('popuplogin.php'); ?>