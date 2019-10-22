<?php
        $panierExiste = false;
        $np;
        function nombreProduit(){ //fonction comptage du nombre de produit dans le panier
            $np = count ($panier);
          }

        if($panierExiste = false){ //si le panier n'existe pas on le créer
            $panierExiste = true; //le panier a été créer

            $panier = array( //le panier contient une liste de produit ainsi que la somme des produits
                array('produittest', 4, 2),
                somme => 0,
            );
            

        }   else if($panierExiste = true){
                for ($i = 0; $i < $np; $i++) { //boucle affichage contenu panier
                    nombreProduit();
                    echo $panier[$i];
                }
                function creeProduit($nom, $prix, $quantite){ //fonction création d'un produit
                    $panier[$np+1] = array($nom, $prix ,$quantite);
                }
                function calculSomme(){
                    nombreProduit(); //actualisation du nombre de produit
                    $somme = 0;
                    for ($i=0; $i< $np; $i++){
                        $sommme = $sommme + $panier[$i][1];
                    }
                }
                function augmenteQuantite($nom){ //fonction ajout d'un même produit
                    nombreProduit(); //actualisation du nombre de produit
                    for ($i=0; $i< $np; $i++){
                        if($panier[$i][1] == $nom){
                            $panier[$i][2] = $panier[$i][2] + 1;
                        }
                    }
                }
                function reduireQuantite($nom){ //fonction reduire la quantité de produit
                    nombreProduit(); //actualisation du nombre de produit
                    for ($i=0; $i< $np; $i++){
                        if($panier[$i][1] == $nom){
                            $panier[$i][2] = $panier[$i][2] - 1;
                        }
                        if($panier[$i][2] == 0){
                            function retire($nom){ //fonction suppression du produit
                                nombreProduit(); //actualisation du nombre de produit
                                for ($i=0; $i< $np; $i++){
                                    if($panier[$i][0] == $nom){ 
                                        if(confirm("Voulez-vous retirer ce produit ?")){
                                            $panier[$i][0] = null;
                                            $panier[$i][1] = null;
                                            $panier[$i][2] = null;
                                        }else{
                                            $panier[$i][2] = 1;
                                        }
                                    
                                    }
                                }
                            }
                        }
                    }
                } 
            }

        ?>