<?php

require_once 'compteBancaireClass.php';

$name = 'Dupont';
$value = 1000;

$compte1 = new CompteBancaire('Duchmol', 800);
$compte2 = new CompteBancaire($name, $value);

$compte1->depot(350);
$compte1->retrait(200);

$compte2->depot(25);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte Bancaire</title>
</head>
<body>
    <h1>Compte Bancaire</h1>
    <p><?php $compte1->affiche(); ?></p><br>
    <p><?php $compte2->affiche(); ?></p>
</body>
</html>