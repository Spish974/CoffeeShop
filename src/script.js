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

    $(".mainmenu .contener #compte a.login").on("click", function () {
            $(".popup-login").removeClass("hind");
    })
    
    $(".popup-login .popform .close").on("click", function () {
        $(".popup-login").addClass("hind");
        $(".popup-login").addClass("act");
    })

});