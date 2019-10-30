<div class="saisie login">
    <form action="" method="POST">
        <input type="hidden" name="action" value="log">
        <div class="champsaisie">
            <input type="text" name="identifiant" id="identifiant" size="30" required="" placeholder="Identifiant ou e-mail" <?php if(isset($_POST["action"]) && isset($_POST["identifiant"])){
            if($_POST["action"]=="log") echo 'value="'.$_POST["identifiant"].'"';}?>>
            <input type="password" name="password" required="" placeholder="Mot de passe">
            <p class="errorpasslogin">Identifiant ou mot de passe incorrect.</p>
        </div>
        <input type="submit" value="Connecter" class="buttlr butt-log">
    </form>
    <a class="inscription">Inscription</a>
</div>