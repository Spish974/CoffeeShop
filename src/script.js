$(document).ready(function(){
    $(window).scroll(function(){
        if(window.scrollY>70){
            $(".mainmenu").addClass("barre");
        }else{
            $(".mainmenu.barre").removeClass("barre");

        }
    })
});
