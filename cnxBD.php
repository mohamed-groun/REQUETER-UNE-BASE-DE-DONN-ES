<?php
require 'connexionPDO.php';

$cnxPDO = ConnexionPDO::getInstance();
$requete = "Select * from utilisateur";
$reponse = $cnxPDO->query($requete);
$personnes=($reponse->fetchAll(PDO::FETCH_OBJ));
?>
<html>
<head>
    <title> Liste</title>
</head>
<body>
<table border="3">
    <tr>

        <td>CIN</td>
        <td>NOM</td>
        <td>PRENOM</td>
        <td>AGE</td>
    </tr>
    <?php
    foreach ($personnes as $personne)
    {
    ?>
    <tr>
        <td> <?= $personne->Cin ?></td>
        <td> <?= $personne->Nom ?></td>
        <td> <?= $personne->Prenom ?></td>
        <td> <?= $personne->Age ?></td>
        <?php
        }
        ?>

    </tr>

</table>
</body>
</html>
