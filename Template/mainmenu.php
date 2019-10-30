<?php
session_start();
require('Classe/ConnectBDD.php');
$bdd = new Base;
if (isset($_SESSION["logconnect"]) == false) {
    if (isset($_POST["action"])) {
        if ($_POST["action"] == "log") {
            if (isset($_POST["identifiant"]) && isset($_POST["password"])) {
                $bdd->TestClientConnexion($_POST["identifiant"], $_POST["password"]);
            }
        }
        if ($_POST["action"] == "reg") {
            if (isset($_POST["identifiant"]) && isset($_POST["password"])) {
                $bdd->TestClientConnexion($_POST["identifiant"], $_POST["password"]);
            }
        }
    }
}
?>
<div class="contener-main-menu">
    <div class="mainmenu">
        <div class="titlemenu"><a>Coffee Shop</a></div>
        <div class="contener">
            <a href="index.php">Accueil</a>
            <a href="template.php?page=menu">Menu</a>
            <a href="template.php?page=panier"><i class="fas fa-shopping-bag"></i> Panier
                <span class="notif-pan">0</span>
            </a>
            <?php
            if (isset($_SESSION["Statutsession"])) {
                if ($_SESSION["Statutsession"] == "Admin") {
                    echo '<a href="template.php?page=admin">Admin</a>';
                }
            }
            ?>
            <span id="compte"><?php if (isset($_SESSION["logconnect"]) == false) {
                                    echo "<a class='login'>Login</a>";
                                } else {
                                    echo '<a href="template.php?page=compte">Compte</a>';
                                } ?></span>
        </div>
    </div>
</div>
<?php require('popup/popupModule.php'); ?>
<?php require('Template/menumobile.php'); ?>