<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Snack 6</title>
</head>

<body>

    <?php foreach ($db as $type => $value) { ?>
        <?php if ($type == 'teachers') { ?>
            <div class="boxGray">
                <ul>
                    <li>
                        <h2><?= $type; ?></h2>
                    </li>
                    <?php foreach ($value as $teachers) { ?>
                        <li>
                            <?= $teachers['name'] . ' - ' . $teachers['lastname']; ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        <?php } else { ?>
            <div class="boxGreen">
                <ul>
                    <li>
                        <h2><?= $type; ?></h2>
                    </li>
                    <?php foreach ($value as $teachers) { ?>
                        <li>
                            <?= $teachers['name'] . ' - ' . $teachers['lastname']; ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
    <?php } ?>


</body>

</html>