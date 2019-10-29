<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<div>
    <?php
    $dsn = 'mysql:host=mysql-rlucas974.alwaysdata.net;dbname=rlucas974_coffeeshop;port=3306;charset=utf8';

    $pdo = new PDO($dsn, 'rlucas974', 'm9741223');

    $stmt = $pdo->query("SELECT `ID_Produit`,`Libellé`,Prix, Catégorie,Description FROM `Produit` WHERE ID_PRODUIT=".$_GET['id_produit']);

    $donnee = $stmt->fetch();
?>
</div>
<table class="table">
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
      <td><?php echo($donnee["ID_Produit"]); ?></td>
      <td><?php echo ($donnee["Libellé"]); ?></td>
      <td><?php echo ($donnee["Catégorie"]); ?> </td>
      <td><?php echo ($donnee["Prix"]); ?> </td>
      <td><?php echo ($donnee["Description"]); ?> </td>
</td>
    </tr>
    
    </tr>
  </tbody>
</table>
<a name="" id="" class="btn btn-primary" href="CRUDProduit.php" role="button">retour</a>