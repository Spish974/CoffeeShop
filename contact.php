<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="src/style.css"  rel= "stylesheet" />
    <title>Page de conatct</title>
</head>


<body   method="post" action="traitement.php">
    <h1>Formulaire de contact</h1>
    <p id = "conteneur">
        <form id= "formulaire_contact">
            <fieldset id= "form_infos_générale">
                    <legend>Informations générales</legend>

                
                    <label for = "case_general"> Nom <label>
                    <input class = "case_general" type = "text" name = "Nom" required autofocus/>
                

                
                    <label for = "case_general"> prenom <label>
                    <input class = "case_general" type = "text" name = "Prenom" required/>
                

                
                    <label for = "case_general" >e-mail</label>
                    <input class = "case_general" type ="email" name = "Email" required />
                

            </fieldset>

            <fieldset id= "form_infos_message">
                    <legend> Message </legend>

                
                    <label for= "case"> Objet </label>
                    <input class= "case" type = "text" name= "Objet" required/>
                

                
                    <label for= "case"> Message </label>
                    <textarea class= "case" type = "text" name= "Message"> </textarea> 
                

            </fieldset>

            <input type="submit" value="Valider">
        </form>
    </p>
    
</body>



</html>