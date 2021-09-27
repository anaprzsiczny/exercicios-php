<?php

/**
 * This function receives an undetermined amount of numbers and returns the higher and the smallest
 *
 * @param mixed ...$numeros
 * @return void
 */
function maiorMenor(...$numeros)//: float 
{
    $maior = $numeros[0];
    $menor = $numeros[0];

    foreach ($numeros as $numero) {
        if ($numero > $maior) {
            $maior = $numero;
        }

        if ($numero < $menor) {
            $menor = $numero;
        }
    }

    echo "O menor número é {$menor}<br/>";
    echo "O maior número é {$maior}";
}

maiorMenor(51, 2, 3, 0, 85123, -10, 68, 124, 1);
