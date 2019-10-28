<?php
if (isset($_SESSION["logconnect"]) == false) {
    ?>
    <div class=<?php echo '"popup-login';
                    if (isset($_POST["action"])) { } else {
                        echo " act hind";
                    }
                    echo '"' ?>>
        <div class="popform">
            <div class="close"><i class="far fa-times-circle"></i></div>
            <h1 class="titrepopup">Connecter</h1>

            <?php require("connexion.php");?>
            <?php require("inscription.php");?>
        </div>
    </div>
<?php
} ?>