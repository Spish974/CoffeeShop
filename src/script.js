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
});
