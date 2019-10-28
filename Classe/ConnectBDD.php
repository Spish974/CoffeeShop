<?php
class Base
{
    public $dns;
    private $pdo;

    public function __construct()
    {
        $this->dns = 'mysql:host=mysql-rlucas974.alwaysdata.net;dbname=rlucas974_coffeeshop;port=3306;charset=utf8';
        $this->pdo = new PDO($this->dns, 'rlucas974', 'm9741223');
    }
    public function __toString()
    { }

    public function recupPanier()
    {
        $listpan = $this->pdo->query("SELECT `Libellé`,`Prix` FROM `Produit` ");
        if ($listpan->rowCount() > 0) {
            $_SESSION["Libellé"] = array();
            $_SESSION["Prix"] = array();

            while ($donnees = $listpan->fetch()) {
                $_SESSION["Libellé"][] = $donnees["Libellé"];
                $_SESSION["Prix"][] = $donnees["Prix"];
            }
        }
    }
    public function createPanier()
    {/*
        $listuser = $this->pdo->query("SELECT `Nom` FROM `Client` WHERE `Username`='$user' AND `Password`='$pass'");
        $_SESSION["nomsession"] = $donnees['Nom'];
        $pan = $this->pdo->query("CREATE TABLE `Panier` ( `user` $_SESSION["nomsession"] , `idProduit` INT NOT NULL , `prixProduit` INT NOT NULL , `Somme` INT NOT NULL ) ENGINE = InnoDB;");
    */
    }

    public function TestClientConnexion($user, $pass)
    {
        $stmt = $this->pdo->query("SELECT `Nom``Prenom``Telephone``Index_Adresse``Username``Email``Statut` FROM `Client` WHERE `Username`='$user' AND `Password`='$pass'");
        if ($stmt->rowCount() == 1) {
            $donnees = $stmt->fetch();
            if (isset($_SESSION["logconnect"]) == false) {
                $_SESSION["logconnect"] = true;
            }
            $_SESSION["nomsession"] = $donnees['Nom'];
            $_SESSION["prenomsession"] = $donnees['Prenom'];
            $_SESSION["Telephonesession"] = $donnees['Telephone'];
            $_SESSION["Index_Adressesession"] = $donnees['Index_Adresse'];
            $_SESSION["Usernamesession"] = $donnees['Username'];
            $_SESSION["Emailsession"] = $donnees['Email'];
            $_SESSION["Statutsession"] = $donnees['Statut'];
            return "1";
        } else {
            return "0";
        }
    }
    public function Deconnexion()
    {
        if (isset($_SESSION["logconnect"])) {
            $_SESSION["logconnect"] = false;
        }
    }
    public function AfficheArticleFilter($filter = "")
    {
        if ($filter == "") {
            $stmt = $this->pdo->query("SELECT * FROM `Produit` WHERE 1");
            if ($stmt->rowCount() > 0) {
                while ($donnees = $stmt->fetch()) {
                    echo "<div class='list-article-unite'><img alt src='src/img/" . $donnees["Image"] . "'>
                    <p class='tit-art-unit'>" . $donnees["Libellé"] . "</p>
                    <p class='prix-art-unit'>" . $donnees["Prix"] . "€</p>
                    </div>";
                }
            }
        } else {
            echo "qsd";
        }
    }
    public function test($var = "")
    {
        if($var==""){
            $var="1";
        }else{
            $var="Nom REGEXP '(".$var."[a-z]*)'";
        }
        $stmt = $this->pdo->query("SELECT * FROM `Client` WHERE $var");
        if ($stmt->rowCount() > 0) {
            while ($donnees = $stmt->fetch()) { 
                echo $donnees["Nom"]."<br>";
            }
        }
    }
}
