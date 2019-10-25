<div class="AfficheClient">

    <h2> Base client actuelle <br /></h2>

    <?php

    $dsn = 'mysql:host=mysql-rlucas974.alwaysdata.net;dbname=rlucas974_coffeeshop;port=3306;charset=utf8';

    $pdo = new PDO($dsn, 'rlucas974', 'm9741223');

    $stmt = $pdo->query("SELECT `Nom`,`Prenom` FROM `Client`");
    ?>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
            </tr>
        </thead>

        <?php
        while ($donnee = $stmt->fetch()) {
            ?>

            <tbody>
                <tr>
                    <td scope="row"> <?php echo ($donnee["Nom"]) ?> </td>
                    <td> <?php echo ($donnee["Prenom"]) ?></td>
                </tr>
            </tbody>
        <?php } ?>
    </table>

</div>