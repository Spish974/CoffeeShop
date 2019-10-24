<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="src/style.css"  rel= "stylesheet" />
    <title>Page de conatct</title>
</head>


<body id="page_contact">
    <h1>Formulaire de contact</h1>
    <div id = "conteneur">

        <form id= "formulaire_contact" method="post" action="traitement.php">

            <fieldset id= "form_infos_générale">
                    <legend>Informations générales</legend>

                <div id= "libelle_case_nom">
                    <label class="libelle_general" for="case_nom"> Nom :</label>
                    <input id="case_nom" type="text" name="Nom" placeholder="Votre nom..." required autofocus/>
                </div>

                <div  id="libelle_case_prenom">
                    <label class = "libelle_general" for = "case_prenom"> Prenom :</label>
                    <input id = "case_prenom" type = "text" name = "Prenom" placeholder="Votre prenom..."required/>
                </div>

                <div  id="libelle_case_email">
                    <label class = "libelle_general" for = "case_email" >E-mail :</label>
                    <input id = "case_email" type ="email" name = "Email" placeholder="Votre e-mail..." required />
                </div>
            </fieldset>

            <fieldset id= "form_infos_message"> 
                    <legend> Message </legend>

                <div id= "libelle_case_objet" >
                    <label for= "case_objet" class= "libelle_message"> Objet :</label>
                    <input id= "case_objet" type = "text" name= "Objet" required/>
                </div>

                <div id="libelle_case_message">
                    <label for= "case_message"  class= "libelle_message"> Message :</label>
                    <textarea id= "case_message" type = "text" name= "Message" > </textarea> 
                </div>
            </fieldset>

            <input id="bouton" type="submit" value="Valider">
        </form>
    </div>
    
</body>



</html>