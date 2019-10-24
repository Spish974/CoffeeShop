<?php
if(isset($_SESSION["logconnect"])==false){
?>
<div class=<?php echo '"popup-login';
if(isset($_POST["action"])){}else{echo " act hind";}
echo '"'?>>
    <div class="popform">
        <div class="close"><i class="far fa-times-circle"></i></div>
        <h1 class="titrepopup">Login</h1>

        <div class="saisie">
            <form action="" method="POST">
                <input type="hidden" name="action" value="log">
                <input type="text" name="usrname" id="email" size="30" required="">
                <input type="password" name="password">
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</div>
<?php
}?>