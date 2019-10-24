$(document).ready(function () {
    $(window).scroll(function () {
        if (window.scrollY > 70) {
            $(".mainmenu").addClass("barre");
            $("i.godown").css("opacity", "0");
        } else {
            $(".mainmenu.barre").removeClass("barre");
            $("i.godown").css("opacity", "");
        }
    })
    var connect = sessionStorage.getItem("connexion");
    console.log(connect);
    if (connect == null) {
        $(".mainmenu .contener #compte").html('<a>Login</a>');
    } else {
        $(".mainmenu .contener #compte").html('<a href="template.php?page=compte">Compte</a>');
    }
    $(".mainmenu .contener #compte").on("click", function () {
        if (connect == null) {
            //sessionStorage.setItem("connexion", "connecter");
            //location.reload();
            $(".popup-login").removeClass("hind");
        }
    })
    $(".popup-login .popform .close").on("click", function () {
        $(".popup-login").addClass("hind");
    })
    $(".popup-login .saisie button").on("click", function () {
        sessionStorage.setItem("connexion", "connecter");
        location.reload();
    })

});
function deconnexion() {
    sessionStorage.removeItem("connexion");
    location.href = "index.php";
}