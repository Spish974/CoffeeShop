<script>
    localStorage.removeItem('article');
</script>
<?php
session_start();
session_destroy();
    $_SESSION["logconnect"]=false;
    header('Location: index.php');
    exit();
?>

