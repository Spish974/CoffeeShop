<?php
class Base
{
    public $dns = "aze";
    private $pdo;

    public function __construct()
    {
        $this->dns = 'mysql:host=mysql-rlucas974.alwaysdata.net;dbname=rlucas974_coffeeshop;port=3306;charset=utf8';
        $this->pdo = new PDO($this->dns, 'rlucas974', 'm9741223');
    }
    public function __toString()
    { }

    public function TestClientConnexion($user,$pass)
    {
        $stmt = $this->pdo->query("SELECT `Nom`,`Prenom` FROM `Client` WHERE `Username`='$user' AND `Password`='$pass'");
        if ($stmt->rowCount() == 1) {
            $donnees = $stmt->fetch();
            if (isset($_SESSION["logconnect"])==false) {
                $_SESSION["logconnect"]=true;
            }
            $_SESSION["nomsession"] = $donnees['Nom'];
            $_SESSION["prenomsession"] = $donnees['Prenom'];
            return "1";
        } else {
            return "0";
        }
    }
    public function Deconnexion()
    {
        if (isset($_SESSION["logconnect"])) {
        $_SESSION["logconnect"]=false;
        }
    }
    public function ReturnClientNom()
    {
        $stmt = $this->pdo->query("SELECT `Nom`,`Prenom` FROM `Client` WHERE `Username`='rlucas' AND `Password`='m9741223'");
        if ($stmt->rowCount() == 1) {
            return "1";
        } else {
            return "0";
        }
    }
    public function ReturnClientCle()
    {
        $stmt = $this->pdo->query("SELECT `Nom`,`Prenom` FROM `Client` WHERE `Username`='rlucas' AND `Password`='m9741223'");
        if ($stmt->rowCount() == 1) {
            return "1";
        } else {
            return "0";
        }
    }
    public function ReturnClientPrenom()
    {
        $stmt = $this->pdo->query("SELECT `Nom`,`Prenom` FROM `Client` WHERE `Username`='rlucas' AND `Password`='m9741223'");
        if ($stmt->rowCount() == 1) {
            return "1";
        } else {
            return "0";
        }
    }
    public function ReturnClientEmail()
    {
        $stmt = $this->pdo->query("SELECT `Nom`,`Prenom` FROM `Client` WHERE `Username`='rlucas' AND `Password`='m9741223'");
        if ($stmt->rowCount() == 1) {
            return "1";
        } else {
            return "0";
        }
    }
}
