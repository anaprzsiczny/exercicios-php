<?php

/**
 *  This function calculates the numerical average of an indeterminate amount of numbers
 * 
 * @param mixed ...$numeros
 * 
 * @return float
 */
function calculaMedia(...$numeros): float 
{
    $totalSoma = 0;
    $quantidade = 0;

    foreach ($numeros as $numero) {
        $totalSoma += $numero;
        $quantidade++;
    }

    return $totalSoma/$quantidade;
}

echo calculaMedia(5, 10, 15, 20);
?>