<!DOCTYPE html>
<html>
    <head>
        <title>Coffee Shop - Panier</title>
        <script type="text/javascript" src="src/scriptPanier.js"></script>
    </head>
        
    <button id='bouton' onClick="resume()" > Bouton resumé </button>
    <button id='creerP' onClick="creerProduit('test', 4, 6)" > Creer produit </button>
    <button id='ajouter' onClick="augmenteQuantite(produittest)" > + </button>
    <button id='retirer' onClick="reduireQuantite(produittest)" > - </button>

    <div class = 'liste'>
            
    </div>

    <div class = 'resume'>

    </div>
        
</html>