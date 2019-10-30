

<div>
  <?php
  /*$dsn = 'mysql:host=mysql-rlucas974.alwaysdata.net;dbname=rlucas974_coffeeshop;port=3306;charset=utf8';

  $pdo = new PDO($dsn, 'rlucas974', 'm9741223');*/
  require('Classe/ProcedureCRUD.php');
  
  $pdo = connectBdd();

  $stmt =  voirLigne($pdo,"Produit","ID_Produit",$_GET['id_produit']);

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
            <th scope="col">Libellé</th>
            <th scope="col">Catégorie</th>
            <th scope="col">Prix</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo ($donnee["ID_Produit"]); ?></td>
            <td><?php echo ($donnee["Libellé"]); ?></td>
            <td><?php echo ($donnee["Catégorie"]); ?> </td>
            <td><?php echo ($donnee["Prix"]); ?> </td>
            <td><?php echo ($donnee["Description"]); ?> </td>
            </td>
          </tr>

          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <br />
  <div class="row">
    <div class="col-lg-6">
      <a name="" id="" class="btn btn-primary" href="template.php?page=CRUDProduit" role="button">retour</a>
    </div>
  </div>
</div>