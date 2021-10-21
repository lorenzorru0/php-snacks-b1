<?php

function media($voti)
{
    $media = 0;

    for ($i = 0; $i < count($voti); $i++) {
        $media += $voti[$i];
    }
    return number_format($media / count($voti), 2);
};

$classe40 = [
    [
        'nome' => 'Lorenzo',
        'cognome' => 'Orrù',
        'voti' => ['6', '7', '4', '8', '7', '10']
    ],
    [
        'nome' => 'Samuele',
        'cognome' => 'Madrigali',
        'voti' => ['6', '5', '7', '8', '7', '9']
    ],
    [
        'nome' => 'Marco',
        'cognome' => 'Rossi',
        'voti' => ['5', '7', '4', '8', '7', '4']
    ],
    [
        'nome' => 'Giulia',
        'cognome' => 'Bianchi',
        'voti' => ['8', '7', '6', '8', '7', '10']
    ],
];

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