
<div>
  <?php
 
  require('Classe/ProcedureCRUD.php');
  
  $pdo = connectBdd();

  $stmt =  voirLigne($pdo,"Client","ID_Client",$_GET['id_client']);

  $donnee = $stmt->fetch();
  ?>
</div>
<br /><br />

<div class="container">
  <div class="row">
    <div class="col-lg-10">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Référence</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Telephone</th>
            <th scope="col">Index_Adresse</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Statut</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo ($donnee["ID_Client"]); ?></td>
            <td><?php echo ($donnee["Nom"]); ?></td>
            <td><?php echo ($donnee["Prenom"]); ?> </td>
            <td><?php echo ($donnee["Telephone"]); ?> </td>
            <td><?php echo ($donnee["Index_Adresse"]); ?> </td>
            <td><?php echo ($donnee["Username"]); ?> </td>
            <td><?php echo ($donnee["Email"]); ?> </td>
            <td><?php echo ($donnee["Password"]); ?> </td>
            <td><?php echo ($donnee["Statut"]); ?> </td>
            
          </tr>

          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <br />
  <div class="row">
    <div class="col-lg-6">
      <a name="" id="" class="btn btn-primary" href="template.php?page=CRUDClient" role="button">retour</a>
    </div>
  </div>
</div>