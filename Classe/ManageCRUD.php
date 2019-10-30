<?php

use PDO;
class ManagerCRUD{

    private $pdoStatement;

    public function __construct(){
        $this->pdo = new PDO('mysql:host=mysql-rlucas974.alwaysdata.net;dbname=rlucas974_coffeeshop;port=3306;charset=utf8', 'rlucas974', 'm9741223');

    }
    

    public function voir($table, $id){
        $this->pdoStatement = $this->pdo->query("SELECT * FROM $table WHERE Id_.$table.= $id");
        $donnee = [];
        $this->$donnee = pdoStatement->fetch();
    }

    public function creer($id){
        
    }


    public function modifier($id){
        
    }

    public function supprimer($id){
        
    }
    

}

?>