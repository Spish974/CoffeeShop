<head>
    <?php
    $verificationURL = substr($_SERVER["REQUEST_URI"], 1, strpos($_SERVER["REQUEST_URI"], ".php") - 1);
    if ($verificationURL == "index" || $verificationURL == "template" || isset($_GET['redirection'])) {}else{
        header('Location: index.php');
        exit();
    }
    ?>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower|Pacifico|Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Coffee Shop</title>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="src/img/icon.png" />
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="src/script.js"> </script>
    <link rel="stylesheet" href="src/bootstrap.css"/>
    <link href="src/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="src/style.css" />
</head>
