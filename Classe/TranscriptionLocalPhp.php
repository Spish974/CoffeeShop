<?php
//UTILISER DANS SCRIPT.JS
//NOTIF ET CLEAN
session_start();  
    if(isset($_GET["art"])){
        $_SESSION["article"]=$_GET["art"];
    }
    
?>
