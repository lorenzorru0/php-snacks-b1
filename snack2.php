<?php

$accesso = 0;

if (!empty($_GET['name']) && !empty($_GET['mail']) && !empty($_GET['age'])) {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    if (strlen($name) >= 4 && strpos($mail, '@') && strpos($mail, '.') && is_numeric(($age))) {
        $accesso = 1;
    } else {
        $accesso = 2;
    }
} else {
    echo 'Inserisci i dati';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 2</title>
</head>

<body>

    <?php if ($accesso == 0) { ?>
        <form action="">
            <input type="text" name="name" id="name" placeholder="Write your name">
            <input type="text" name="mail" id="mail" placeholder="Write your mail">
            <input type="text" name="age" id="age" placeholder="Write your age">
            <button type="submit">RUN</button>
        </form>
    <?php } ?>

    <?php if ($accesso == 1) { ?>
        <h3>Accesso riuscito</h3>
    <?php } elseif ($accesso == 2) { ?>
        <h3>Accesso negato</h3>
    <?php } ?>

</body>

</html>