<!DOCTYPE html>
<html>

    <?php
    $page = "";
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    if ($page == "menu" || $page == "panier" || $page == "compte" || $page == "admin" || $page == "AfficheClient" || $page == "CRUDProduit" || $page == "AjouteProduit" || $page == "VoirProduit"  ) {
        echo "<title>" . $page . "</title>";
    } else {
        if(isset($_GET['redirection'])==false){
            header('Location: index.php');
            exit();
        }
    }

    ?>
    <?php require("Template/head.php"); ?>

<body style="background-color: #ffffff;" class="template">
    <?php require('Template/mainmenu.php'); ?>
    <?php
    if ($page != "1") {
        echo "<title>" . $page . "</title>";
        if ($page != "AfficheClient" && $page != "CRUDProduit") {
            echo "<div class='titrepage'><h1>" . $page . "</h1></div>";
            }
        echo "<div class='contenu'>";
        require($page . '.php');
        echo "</div>";
    } else {
        echo "<p>aucune page trouver</p>";
    } ?>
</body>
<?php require('Template/footer.php'); ?>

</html>