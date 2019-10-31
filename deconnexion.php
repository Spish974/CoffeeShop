<script>
    localStorage.removeItem('article');
    localStorage.removeItem('nbArticle');
</script>
<?php
session_start();
    $_SESSION["article"]="";
session_destroy();
    $_SESSION["logconnect"]=false;
?>
<script>
    function t() {
        var compteur = document.getElementById('compteur');
        s = duree;
        if (s < 1) {
            document.location.href="index.php";
        } else {
            compteur.innerHTML = "Redirection dans " + s + "s";
        }
        duree = duree - 1;
        window.setTimeout("t();", 999);

    }
</script>

<div style="
    text-align: center;
    position: absolute;
    width: 100%;
    top: 50%;
    transform: translateY(-50%);
"><h1>Vous êtes deconnecter</h1>
        <span id="compteur" style="
    margin: 20px;
    display: block;
">Redirection vers la page d'accueil</span>
        <div>
            <a href=index.php style="
    padding: 7px 20px;
    background-color: #d0c9bd;
    color: #3c3c3c;
    border-radius: 5px;
    margin-top: 20px;
    display: inline-block;
">Retour</a>
        </div>
</div>
<script>
    duree = "1";
    t();
</script>

