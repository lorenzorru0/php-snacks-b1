<?php

function media($voti)
{
    $media = 0;

    for ($i = 0; $i < count($voti); $i++) {
        $media += $voti[$i];
    }
    return number_format($media / count($voti), 2);
};
