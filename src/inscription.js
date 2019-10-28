var retour = "";
var xhttp = new XMLHttpRequest();

function verifuserinsc(value) {
    if (value.length >= 5) {
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText != "1") {
                    document.getElementById('verifusererror').innerHTML = "Nom d'utilisateur déjà utiliser";
                } else {
                    document.getElementById('verifusererror').innerHTML = "";
                }
            }
        };
        xhttp.open("GET", 'Classe/TestUserExist.php?userexist=' + value, true);
        xhttp.send();
    } else {
        document.getElementById('verifusererror').innerHTML = "";
    }
}

function verifmailinsc(value) {
    if (value.length >= 12) {
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText != "1") {
                    document.getElementById('verifmailerror').innerHTML = "Adresse email déjà utiliser";
                } else {
                    document.getElementById('verifmailerror').innerHTML = "";
                }
            }
        };
        xhttp.open("GET", 'Classe/TestUserExist.php?mailexist=' + value, true);
        xhttp.send();
    } else {
        document.getElementById('verifmailerror').innerHTML = "";
    }
}
function verifusermailinsc() {
    $Suser = $(".popup-login .saisie.register .champsaisie input#username").val();
    $Smail = $(".popup-login .saisie.register .champsaisie input#email").val();
    $Spwd = $(".popup-login .saisie.register .champsaisie input[name='password']").val();
    $SConpwd = $(".popup-login .saisie.register .champsaisie input[name='confirmpassword']").val();
    if ($Spwd == $SConpwd) {
        if ($Suser.length >= 5 && $Smail.length >= 12 && $Spwd.length >= 6) {
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.responseText == "1") {
                        $('form#redirection-enregist input[name="usern"]').val($Suser);
                        $('form#redirection-enregist input[name="eml"]').val($Smail);
                        $('form#redirection-enregist input[name="pwrd"]').val($Spwd);
                        $('form#redirection-enregist').submit();
                    }
                }
            };
            xhttp.open("GET", 'Classe/TestUserExist.php?userinscr=' + $Suser + '&mailinscr=' + $Smail, true);
            xhttp.send();
        }
    }
}

$(document).ready(function () {
    $(".popup-login .saisie input.butt-reg").on("click", function () {
        verifusermailinsc();
    })
})