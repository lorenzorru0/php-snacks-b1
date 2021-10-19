<?php

$partite = [
    [
        'squadraCasa' => 'Olimpia Milano',
        'squadraOspite' => 'Venezia',
        'puntiCasa' => 93,
        'puntiOspite' => 68
    ],
    [
        'squadraCasa' => 'Cremona',
        'squadraOspite' => 'Varese',
        'puntiCasa' => 94,
        'puntiOspite' => 78
    ],
    [
        'squadraCasa' => 'Brescia',
        'squadraOspite' => 'Napoli',
        'puntiCasa' => 98,
        'puntiOspite' => 88
    ],
    [
        'squadraCasa' => 'Universo Trviso',
        'squadraOspite' => 'Dinamo Sassari',
        'puntiCasa' => 64,
        'puntiOspite' => 71
    ],
    [
        'squadraCasa' => 'VL Pesaro',
        'squadraOspite' => 'Derthona',
        'puntiCasa' => 81,
        'puntiOspite' => 90
    ],
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 1</title>
</head>

<body>

    <h1>Campionato serie A basket</h1>
    <?php 
        for ( $i = 0; $i < count($partite); $i++) {
            echo "<h2>{$partite[$i]['squadraCasa']} - {$partite[$i]['squadraOspite']} | {$partite[$i]['puntiCasa']} - {$partite[$i]['puntiOspite']}</h2>";
        }
    ?>

</body>

</html>