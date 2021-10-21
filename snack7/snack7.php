<?php

require __DIR__ . '/data.php';
include __DIR__ . '/functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>

<body>
    <h1>Classe 40 </h1>

    <?php foreach($classe40 as $studenti) {?>
            <h2> <?= $studenti['nome'] . ' ' .  $studenti['cognome'] . '<br>media voti: ' . media($studenti['voti']);?></h2>
    <?php } ?>

</body>

</html>