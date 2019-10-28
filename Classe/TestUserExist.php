<?php
$dns = 'mysql:host=mysql-rlucas974.alwaysdata.net;dbname=rlucas974_coffeeshop;port=3306;charset=utf8';
$pdo = new PDO($dns, 'rlucas974', 'm9741223');

if (isset($_GET["userexist"])) {
    $var = $_GET["userexist"];
    $var = "Username='" . $var . "'";
    $stmt = $pdo->query("SELECT * FROM `Client` WHERE $var");
    if ($stmt->rowCount() > 0) {
        echo "0";
    } else {
        echo "1";
    }
}
if (isset($_GET["mailexist"])) {
    $var = $_GET["mailexist"];
    $var = "Email='" . $var . "'";
    $stmt = $pdo->query("SELECT * FROM `Client` WHERE $var");
    if ($stmt->rowCount() > 0) {
        echo "0";
    } else {
        echo "1";
    }
}
if (isset($_GET["userinscr"]) && isset($_GET["mailinscr"])) {
    $userinscr=$_GET["userinscr"];
    $mailinscr=$_GET["mailinscr"];
    $stmt = $pdo->query("SELECT * FROM `Client` WHERE Username='$userinscr' OR Email='$mailinscr'");
    if ($stmt->rowCount() > 0) {
        echo "0";
    } else {
        echo "1";
    }
}