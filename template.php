<!DOCTYPE html>
<html>

<head>
    <?php
    $page = "";
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    if ($page == "menu" || $page == "panier" || $page == "compte") {echo "<title>" . $page . "</title>";} else {$page="1";echo "<title>Page introuvable</title>";}
    ?>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="src/img/icon.png" />
    <link href="src/style.css" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="src/script.js"> </script>
    <link href="src/fontawesome/css/all.css" rel="stylesheet">
</head>

<body style="background-color: #ffffff;" class="template">
    <?php require('mainmenu.php'); ?>
    <?php
    if ($page !="1") {
        echo "<title>" . $page . "</title>";
        echo "<div class='titrepage'><h1>" . $page . "</h1></div>";
        echo "<div class='contenu' style='margin-bottom:50vh;'>";
        require($page . '.php');
        echo "</div>";
    } else {echo "<p>aucune page trouver</p>";}?>
</body>
<?php require('footer.php'); ?>
</html>