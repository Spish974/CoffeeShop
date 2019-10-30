<div class="contener-menumobile">
    <div class="top-mob">
        <a class="titre-coff-mob" href="index.php" style="">
            <h1>Coffee Shop</h1>
        </a>
        <div class="butt-menu">
            <i class="fas fa-bars"></i>
        </div>
    </div>
    <div class="menu-deroulant">
        <h1>Coffee Shop</h1>
        <hr style="
    background: #636363;
">
        <a href="index.php">Accueil</a>
        <a href="template.php?page=menu">Menu</a>
        <a href="template.php?page=panier">Panier</a>
        <span id="compte"><?php if (isset($_SESSION["logconnect"])==false){echo "<a class='login'>Login</a>";}else{echo '<a href="template.php?page=compte">Compte</a>';}?></span>

    </div>
</div>