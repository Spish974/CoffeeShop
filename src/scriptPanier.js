
$np = 1;
$panierExiste = true; //le panier a été créer
console.log('panier creer');
$somme = 0;
var panier = new Array( //le panier contient une liste de produit ainsi que la somme des produits
    $somme,
    new Array('produittest', 4, 2),
);


function resume() {
    console.log('panier ' + $panierExiste);
    console.log('contenue panier : ' + panier[+1]);
    calculSomme();
    console.log('somme : ' + $somme);
}


function nombreProduit() { //fonction comptage du nombre de produit dans le panier
    $np = panier.length;
    console.log('nombre produit ' + $np);
}


function creerProduit($nom, $prix, $quantite) { //fonction création d'un produit
    $prix = ((2 + $prix + $np) * 1.5) - ($prix * ($prix / 2));
    nombreProduit(); //actualisation du nombre de produit
    panier[$np] = new Array($nom, $prix, $quantite);
    //document.createElement("nom:"+ $nom + " prix:" + $prix + " NB:" + $quantite);
    console.log('produit creer ' + panier[$np]);
    calculSomme();
}


function calculSomme() {
    nombreProduit(); //actualisation du nombre de produit
    $somme = 0;
    if ($np > 0) {
        for ($i = 0; $i < $np; $i++) {
            $somme = $somme + panier[$i][1];
        }
    }
}


function augmenteQuantite($nom) { //fonction ajout d'un même produit
    nombreProduit(); //actualisation du nombre de produit
    for ($i = 0; $i < $np; $i++) {
        if ($panier[$i][1] == $nom) {
            $panier[$i][2] = $panier[$i][2] + 1;
            console.log("produit " + $nom + " ajouter");
        }
    }
}


function reduireQuantite($nom) { //fonction reduire la quantité de produit
    nombreProduit(); //actualisation du nombre de produit
    for ($i = 0; $i < $np; $i++) {
        if ($panier[$i][1] == $nom) {
            $panier[$i][2] = $panier[$i][2] - 1;
            console.log("produit " + $nom + " enlever");
        }
        if ($panier[$i][2] == 0) {
            function retire($nom) { //fonction suppression du produit
                nombreProduit(); //actualisation du nombre de produit
                for ($i = 0; $i < $np; $i++) {
                    if ($panier[$i][0] == $nom) {
                        if (confirm("Voulez-vous retirer ce produit ?")) {
                            $panier[$i][0] = null;
                            $panier[$i][1] = null;
                            $panier[$i][2] = null;
                        } else {
                            $panier[$i][2] = 1;
                        }

                    }
                }
            }
        }
    }
}