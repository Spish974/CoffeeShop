<?php
session_start();  
    if(isset($_GET["art"])){
        $_SESSION["article"]=$_GET["art"];
    }
?>