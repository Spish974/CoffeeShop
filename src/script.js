$(document).ready(function () {
    $(".popup-login .saisie.register").css('display','none');
    $(window).scroll(function () {
        if (window.scrollY > 70) {
            $(".mainmenu").addClass("barre");
            $("i.godown").css("opacity", "0");
        } else {
            $(".mainmenu.barre").removeClass("barre");
            $("i.godown").css("opacity", "");
        }
    })

    $(".mainmenu .contener #compte a.login").on("click", function () {
            $(".popup-login").removeClass("hind");
    })
    
    $(".popup-login .popform .close").on("click", function () {
        $(".popup-login").addClass("hind");
        $(".popup-login").addClass("act");
    })
    $(".popup-login .saisie a.inscription").on("click", function(){
        $(".popup-login h1.titrepopup").html("Inscription");
        $(".popup-login .saisie.register").css('display','block');
        $(".popup-login .saisie.login").css('display','none');
        $(".popup-login .saisie .champsaisie input").val('');
        
    })
    $(".popup-login .saisie a.connection").on("click", function(){
        $(".popup-login h1.titrepopup").html("Connecter");
        $(".popup-login .saisie.register").css('display','none');
        $(".popup-login .saisie.login").css('display','block');
    })
});