<!DOCTYPE html>
<html lang="en">

<head>
    <title>Funcpanier</title>
</head>

<body>
<?php
require('../Classe/ConnectBDD.php');
session_start();
if (isset($_SESSION["logconnect"])==true) {
    $bddPanier = new Base;
    $bddPanier->recupPanier();
    $_SESSION["Libellé"];// = $donnees["Libellé"];
    $_SESSION["Prix"];// = $donnees["Prix"];

}

?>
<meta http-equiv="refresh" content="3;URL=../template.php?page=panier">

</body>

</html>