<script Language="javascript">
    var retour = "";
    var xhttp = new XMLHttpRequest();

    function verif(value) {
        if (value.length >= 2) {
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    retour = this.responseText;
                    console.log(retour);
                    document.getElementById('retour').innerHTML =
                        retour;
                }
            };
            xhttp.open("GET", 'Classe/AjaxRecherche.php?valuKey=' + value, true);
            xhttp.send();
        }else{
            document.getElementById('retour').innerHTML ="";
        }
    }
</script>
<br><br>
<div>
    <input type="text" name="recherche" onkeyup="verif(this.value);">
    <p id="retour"></p>
</div>