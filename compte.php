<div class="compt-page">
    <div class="menu-compte">
        <span>Information</span>
        <span>Historique des commande</span>
        <span>Point de fidélité</span>
    </div>
    <div>
        <?php
        echo "<table style='margin: 1em auto;'><tbody><tr><td>Nom</td><td>".$_SESSION["nomsession"]."</td></tr>
        <tr><td>Prenom</td><td>".$_SESSION["prenomsession"]."</td></tr>
        <tr><td>Telephone</td><td>".$_SESSION["Telephonesession"]."</td></tr>
        <tr><td>Adresse</td><td>".$_SESSION["Index_Adressesession"]."</td></tr>
        <tr><td>Username</td><td>".$_SESSION["Usernamesession"]."</td></tr>
        <tr><td>Email</td><td>".$_SESSION["Emailsession"]."</td></tr>
        <tr><td>Statut</td><td>".$_SESSION["Statutsession"]."</td></tr></tbody>
</table>";

        ?>
    </div>
    <br>
    <a class="buttdeco" href="deconnexion.php">Déconnexion</a>
</div>