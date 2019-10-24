<!DOCTYPE html>
<html>
<?php
require "Classe/Client.php";
$client = new Client();
if(isset($_POST["usrname"]) && isset($_POST["password"])){
    $client->verifLogin($_POST["usrname"],$_POST["password"]);
}
?>

<form action="" method="POST" style="border:solid 1px black;padding:10px;margin:20px">
    <div>
        <p>user</p>
        <input type="text" name="usrname">
    </div>
    <div>
        <p>mot de passe</p>
        <input type="password" name="password">
    </div>
    <input type="submit" value="Login">
</form>


<br><br>
<div>
    <button onClick="deconnexion()">deconnexion</button>
</div>

</html>