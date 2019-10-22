<!DOCTYPE html>
<html>
    <head>
        <title>Coffee Shop - Panier</title>
        <meta charset="utf-8" />
        <link href="src/style.css" rel="stylesheet" />
        <script type="text/javascript" src="src/scriptPanier.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <!--<link href="src/script.js" rel="scriptsheet" />
        <link href="src/fonctionpanier.php" rel="script" />-->
        <h1>Panier</h1>
    </head>

    <header>
        <div class='heading'>
            <li>
                <a href="index.php">Accueil</a>
                <a href="menu.php">Menu</a>
                <a href="panier.php">Panier</a>
                <a href="compte.php">Compte</a>
            </li>
        </div>
    </header>
    
    <body>
    
    <button id='bouton' onClick="resume()" > Bouton resumé </button>
    <button id='creerP' onClick="creerProduit('test', 5, 6)" > Creer produit </button>
    <button id='ajouter' onClick="augmenteQuantite(produittest)" > <h1> + </h1></button>
    <button id='retirer' onClick="reduireQuantite(produittest)" > <h1> - </h1> </button>

    <div class = 'liste'>
            
    </div>

    <div class = 'resume'>

    </div>

    </body>
        
</html>