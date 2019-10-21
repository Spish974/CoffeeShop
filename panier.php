<!DOCTYPE html>
<html>
    <head>
        <title>Coffee Shop - Panier</title>
        <meta charset="utf-8" />
        <link href="src/style.css" rel="stylesheet" />
        <link href="src/script.js" rel="scriptsheet" />
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

    <div class = 'liste'>
            
    </div>

    <div class = 'resume'>

    </div>

    </body>
        <?php
        $panierExiste = false;

        if($panierExiste = false){ //si le panier n'existe pas on le créer
            $panierExiste = true; //le panier a été créer

            $panier = array( //le panier contient une liste de produit ainsi que la somme des produits
                somme => 0,
            );

        }   else if($panierExiste = true){
                //print_r($panier);
                for ($i = 0; $i < $np; $i++) { //boucle affichage contenu panier
                    nombreProduit();
                    echo $panier[$i];
                }
                function nombreProduit(){ //fonction comptage du nombre de produit dans le panier
                  $np = count ($panier);
                }
                function creeProduit($nom, $prix, $quantite){ //fonction création d'un produit
                    $panier[$np+1] = array($nom, $prix ,$quantite);
                }
                function calculSomme(){
                    nombreProduit();
                    $somme = 0;
                    for ($i=0; $i< $np; $i++){
                        $sommme = $sommme + $panier[$i][1];
                    }
                }
                function augmenteQuantite($nom){ //fonction ajout d'un même produit
                    nombreProduit();
                    for ($i=0; $i< $np; $i++){
                        if($panier[$i][1] == $nom){
                            $panier[$i][2] = $panier[$i][2] + 1;
                        }
                    }
                }
                function reduireQuantite($nom){ //fonction reduire la quantité de produit
                    nombreProduit();
                    for ($i=0; $i< $np; $i++){
                        if($panier[$i][1] == $nom){
                            $panier[$i][2] = $panier[$i][2] - 1;
                        }
                    }
                }
                function retire($nom){ //fonction suppression du produit
                    nombreProduit();
                    for ($i=0; $i< $np; $i++){
                        if($panier[$i][0] == $nom){ 
                            $panier[$i][0] = null;
                        }
                    }
                }

            }

        ?>
</html>