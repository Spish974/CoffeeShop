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
            <h1 class="titrepopup">Login</h1>

            <div class="saisie">
                <form action="" method="POST">
                    <input type="hidden" name="action" value="log">
                    <div class="champsaisie">
                        <input type="text" name="usrname" id="email" size="30" required="" placeholder="Identifiant">
                        <input type="password" name="password" placeholder="Mot de passe">
                    </div>
                    <input type="submit" value="Connecter" class="butt-log">
                </form>
                <a class="inscription">Inscription</a>
            </div>
        </div>
    </div>
<?php
} ?>