<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <form>
            
            <fieldset class="form-group row">
                <legend class="col-form-legend col-sm-1-12">Informations générales</legend>
                <div class="col-sm-1-12">
                    <div class="form-group">
                      <label for="Nom">Nom</label>
                      <input type="text" name="Nom" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted"></small>
                    </div>
                </div>

                <div class="form-group">
                  <label for="Prenom">Prenom</label>
                  <input type="text" name="Prenom" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">Help text</small>
                </div>

                <div class="form-group">
                  <label for="E-mail">E-mail</label>
                  <input type="email" class="form-control" name="E-mail" id="" aria-describedby="emailHelpId" placeholder="">
                  <small id="emailHelpId" class="form-text text-muted">Help text</small>
                </div>

            
            </fieldset>
            <legend class="col-form-legend col-sm-1-12">Votre message</legend>


            <div class="form-group row">
                 <label for="inputName" class="col-sm-1-12 col-form-label">Objet</label>
                    <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="inputName" id="inputName" placeholder="">
                    </div>
            </div>

            <div class="form-group">
              <label for="Message">Message</label>
              <textarea class="form-control" name="Message" id="" rows="3"></textarea>
            </div>
            
            </fieldset>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Valider</button>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>