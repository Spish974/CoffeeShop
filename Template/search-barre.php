<script>
    $(document).ready(function () {
    var retour = "";
    var xhttp = new XMLHttpRequest();


    function verif(value = $('#filtersearch').val()){
        if (value.length < 2) {
            $(".barre-recherche-cont .sugestion").css("display","none");
            }
        verifsql(value);
    }
    async function verifsql(value) {
        if (value.length >= 2) {
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    retour = this.responseText;
                    $(".barre-recherche-cont .sugestion").css("display","block");
                    document.getElementById('retour').innerHTML =
                        retour;
                }
            };
            xhttp.open("GET", '../Classe/AjaxRecherche.php?valuKey=' + value, true);
            xhttp.send();
        } else {
            document.getElementById('retour').innerHTML = "";
        }
    }
    $("#catg-select").on("change",function(){
        $a=$("#catg-select").val();
        console.log($a);
    })
    $(document).on('keypress',function(e) {
        if(e.which == 13) {
            if($("input#filtersearch").is(":focus"))
            affichelistfilter();
        }
    });
    async function affichelistfilter(filter = $('#filtersearch').val()) {
        if (filter.length < 2) filter = "";
        var xhttpfilter = new XMLHttpRequest();
        xhttpfilter.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                retour = this.responseText;
                $('.post-article').html(retour);
            }
        };
        xhttpfilter.abort();
        xhttpfilter.open("GET", 'Classe/affichefilter.php?filter=' + filter, true);
        xhttpfilter.send();
    }
    function prendreSug(val) {
        $(".barre-recherche-cont #filtersearch").val(val);
    }
})
</script>
<div class="option-recherche">
    <div class="list-cat">
        <?php
            $bdd->ListCat();
        ?>
</div>
    <div class="barre-recherche-cont">
        <input type="text" name="filter" id="filtersearch" onkeyup="verif();">
        <div class="sugestion" style="display: none;">
            <span id="retour"></span>
        </div>
    </div>
    <div onclick="affichelistfilter();" class="butt-search">Rechercher
</div>
</div>
<div class="post-article">
    <?php
    $_GET['filter'] = "";
    require("Classe/affichefilter.php");
    ?>
</div>