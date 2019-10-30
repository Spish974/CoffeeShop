$(document).ready(function () {
    notifPan();
    $( ".accueil .contenu *" ).css({"opacity":"0","transition":"none","transform":"translateY(50px)"});
    $(".popup-login .saisie.register").css('display', 'none');
    $(window).scroll(function () {
        if (window.scrollY > 70) {
            $(".mainmenu").addClass("barre");
            $("i.godown").css("opacity", "0");
            $( ".accueil .contenu *" ).filter( function(){;if(this.offsetTop<(window.scrollY+window.innerHeight)){;return true;}} ).css({"opacity":"","transition":"","transform":""});
        } else {
            $(".mainmenu.barre").removeClass("barre");
            $("i.godown").css("opacity", "");
        }
    })

    $("#compte a.login").on("click", function () {
        $(".popup-login").removeClass("hind");
    })

    $(".popup-login .popform .close").on("click", function () {
        $(".popup-login").addClass("hind");
        $(".popup-login").addClass("act");
        $(".popup-login .saisie .champsaisie input").val('');
    })
    $(".popup-login .saisie a.inscription").on("click", function () {
        $(".popup-login h1.titrepopup").html("Inscription");
        $(".popup-login .saisie.register").css('display', 'block');
        $(".popup-login .saisie.login").css('display', 'none');
        $(".popup-login .saisie .champsaisie input").val('');

    })
    $(".popup-login .saisie a.connection").on("click", function () {
        $(".popup-login h1.titrepopup").html("Connecter");
        $(".popup-login .saisie.register").css('display', 'none');
        $(".popup-login .saisie.login").css('display', 'block');
    })
    $(".contener-menumobile").on("click", function () {
        if ($(".contener-menumobile .butt-menu").is(":hover")) {
            $(".contener-menumobile .menu-deroulant").addClass("open");
            $("body").css("overflow",'hidden');
            $("a.titre-coff-mob").css("pointer-events","none");
            $(".contener-menumobile").css("display","block");
        } else {
            if ($(".contener-menumobile .menu-deroulant").hasClass("open") && $(".contener-menumobile .menu-deroulant").is(":hover")==false) {
                $(".contener-menumobile .menu-deroulant").removeClass("open");
                $("body").css("overflow",'');
                $("a.titre-coff-mob").css("pointer-events","");
                $(".contener-menumobile").css("display","");
            }
        }
    })
    $('#videPanButt').on("click", function(){clearPan();});
    $(".list-article-unite span.ajouter-panier").on("click", function(){localsArtPan($(this));});

    function clearPan(){
        localStorage.removeItem("article")
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open("GET", "Classe/TranscriptionLocalPhp.php?art=", false ); // false for synchronous request
        xmlHttp.send(null);
        document.location.href="/template.php?page=panier";
    }
    function localsArtPan($this){
        $lsg= localStorage.getItem("article")!=null ? localStorage.getItem("article"):"";
        $artAjout=$this.attr("idarticle");
        $posindex=$lsg.indexOf("A"+$artAjout+"b");
        if($posindex==-1){
            localStorage.setItem("article",$lsg+"A"+$this.attr("idarticle")+"b1e");
            notifPan();
        }else{
            $part1=$lsg.indexOf("b",$posindex);
            $part2=$lsg.indexOf("e",$posindex);            
            localStorage.setItem("article",$lsg.substring(0,$part1+1)+(parseInt($lsg.substring($part1+1,$part2))+1)+$lsg.substring($part2));
            notifPan();
        }
    }
    function occurrences(string, subString, allowOverlapping) {

        string += "";
        subString += "";
        if (subString.length <= 0) return (string.length + 1);
    
        var n = 0,
            pos = 0,
            step = allowOverlapping ? 1 : subString.length;
    
        while (true) {
            pos = string.indexOf(subString, pos);
            if (pos >= 0) {
                ++n;
                pos += step;
            } else break;
        }
        return n;
    }
    function notifPan(){
        $lsg= localStorage.getItem("article")!=null ? localStorage.getItem("article"):"";

        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open("GET", "Classe/TranscriptionLocalPhp.php?art="+$lsg, true ); // false for synchronous request
        xmlHttp.send(null);
        $nboccurence=occurrences($lsg,"b");
        $countart=0;
        for(i=0;i<$nboccurence;i++)
        {
            
            $countart += parseInt($lsg.substring($lsg.indexOf("b")+1,$lsg.indexOf("e")));
            $lsg=$lsg.substring($lsg.indexOf("e")+1);
        }
        if($countart!=0){
            $("span.notif-pan").html($countart);
            $("span.notif-pan").css({"transition":"","transform":""});
            $("span.notif-pan").removeClass("animshake");
            window.requestAnimationFrame(function(time) {
                window.requestAnimationFrame(function(time) {
                    $("span.notif-pan").addClass("animshake");
                });
              });
        }else{
            $("span.notif-pan").html(0);
            $("span.notif-pan").css({"transition":"none","transform":"translateY(10px) scale(0)"});
            $("span.notif-pan").removeClass("animshake");
        }
        
    }
});