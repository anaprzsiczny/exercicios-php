<?php

/**
 * This function receives a number and returns the corresponding day of the week
 * 
 * @param int $numero
 * 
 * @return void
 */
function diaDaSemana($numero)
{
    switch ($numero) {
    case 1:
        echo "1 - Domingo";
        break;
    case 2:
        echo "2 - Segunda";
        break;
    case 3:
        echo "3 - Terça";
        break;
    case 4:
        echo "4 - Quarta";
        break;
    case 5:
        echo "5 - Quinta";
        break;
    case 6:
        echo "6 - Sexta";
        break;
    case 7:
        echo "7 - Sábado";
        break;
    default:
        echo "Valor inválido";
    }
}

diaDaSemana(7);
?>