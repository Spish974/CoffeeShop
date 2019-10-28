<script src="src/inscription.js"> </script>
<div class="saisie register">
    <form action="" method="POST">
        <input type="hidden" name="action" value="reg">
        <div class="champsaisie">
            <input type="text" name="usrname" id="username" size="30" required="" placeholder="Username" onkeyup="verifuserinsc(this.value);">
            <span id='verifusererror'></span>
            <input type="text" name="email" id="email" size="30" required="" placeholder="Email" onkeyup="verifmailinsc(this.value);">
            <span id='verifmailerror'></span>
            <input type="password" name="password" required="" placeholder="Mot de passe">
            <input type="password" name="confirmpassword" required="" placeholder="Confirmation du mot de passe">
            <p class="erroradressemail" style="display:none">Identifiant ou mot de passe incorrect.</p>
        </div>
        <input type="button" value="S'inscrire" class="buttlr butt-reg">
    </form>
    <div>
    <form id="redirection-enregist" action="enregistrementReussi.php?redirection=accueil" method="POST" style="/*display:none;*/">
        <input type="hidden" name="usern" value="valeur" />
        <input type="hidden" name="eml" value="valeur" />
        <input type="hidden" name="pwrd" value="valeur" />
    </form>
</div>
    <a class="connection">Se connecter</a>
</div>