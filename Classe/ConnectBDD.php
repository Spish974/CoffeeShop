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

    public function TestClientConnexion($user, $pass)
    {
        $stmt = $this->pdo->query("SELECT * FROM `Client` WHERE (`Username`='$user' OR Email = '$user') AND `Password`='$pass'");
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
                $countart = 0;
                while ($donnees = $stmt->fetch()) {
                    echo "<div class='list-article-unite'><img alt src='src/img/" . $donnees["Image"] . "'>
                    <p class='tit-art-unit'>" . $donnees["Libellé"] . "</p>
                    <p class='prix-art-unit'>" . $donnees["Prix"] . "€</p>
                    <span class='ajouter-panier' idarticle='" . $donnees["ID_Produit"] . "'>Ajouter</span>
                    </div>";
                    $countart += 1;
                }
                echo "<div style='margin-top: 30px;'><p class='nb-choice'>" . $countart . " choix</p>
                </div>";
            }
        } else {
            echo "qsd";
        }
    }

    public function ajoutuser($user, $mail, $pwd)
    {
        $this->pdo->query("INSERT INTO `Client` (`ID_Client`, `Nom`, `Prenom`, `Telephone`, `Index_Adresse`, `Username`, `Email`, `Password`, `Statut`) VALUES (NULL, NULL, NULL, NULL, '0', '$user','$mail','$pwd', 'Client');");
    }
    public function TranscriptLocalphp()
    {
        if (isset($_SESSION["article"])) {
            return $_SESSION["article"];
        }
    }
    public function stringToPanier()
    {
        $chaine = $this->TranscriptLocalphp();
        $pos = 0;
        $nbarticle = substr_count($chaine, "A");
        if ($nbarticle > 0) {
            echo '<table>';
            for ($i = 0; $i < $nbarticle; $i++) {
                echo "<tr>";
                $where = substr($chaine, stripos($chaine, "A", $pos) + 1, stripos($chaine, "b", $pos) - stripos($chaine, "A", $pos) - 1);
                $quantite = substr($chaine, stripos($chaine, "b", $pos) + 1, stripos($chaine, "e", $pos) - stripos($chaine, "b", $pos) - 1);
                $stmt = $this->pdo->query("SELECT * FROM `Produit` WHERE `ID_Produit`='$where'");
                if ($stmt->rowCount() == 1) {
                    $donnees = $stmt->fetch();
                    echo "<td class='tabimg'><div><img alt='' src='src/img/".$donnees["Image"]."'></div></td>
                    <td class='tabLibelle'><div><b>" . $donnees["Libellé"] . "</b><br>".number_format($donnees["Prix"], 2, ',', ' ')."€</div></td>
                    <td class='tabQuantite'><div>" .$quantite. "</div></td>";
                    $totalQuantPrix=($donnees["Prix"]*$quantite);
                    echo "<td class='tabQuantPrix'><div><b>" .number_format($totalQuantPrix, 2, ',', ' ')."€</b></div></td>";
                }
                $pos = stripos($chaine, "e", $pos) + 1;
                echo "</tr>";
            }
            echo "</table>";
        }else{
            echo "<div><p>Votre panier est vide</p></div>";
        }
    }

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
    public function ListCat()
    {
        $stmt = $this->pdo->query("SELECT `Catégorie` FROM `Produit` GROUP BY `Catégorie`");
        if ($stmt->rowCount() > 0) {
            echo '<select name="catg" id="catg-select">
            <option value="">--Catégorie--</option>';
            while ($donnees = $stmt->fetch()) {
                echo '<option value="' . $donnees["Catégorie"] . '">' . $donnees["Catégorie"] . '</option>';
            }
            echo '</select>';
        }
    }
}
