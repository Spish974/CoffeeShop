<script type="text/javascript">
    //localStorage.clear()  //clears the localstorage
    //alert("local storage supprimer");
   
</script>
<?php
session_start();
session_destroy();
    $_SESSION["logconnect"]=false;
    header('Location: index.php');
    exit();
?>

