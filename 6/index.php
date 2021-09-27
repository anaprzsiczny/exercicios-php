<?php

/**
 * This function receives a number and returns the corresponding day of the week
 * 
 * @param int $numero
 * 
 * @return string
 */
function diaDaSemana($numero) : string
{
    if ($numero === 1) {
        return "1-Domingo";
    } elseif ($numero === 2) {
        return "2-Segunda";
    } elseif ($numero === 3) {
        return "3-Terça";
    } elseif ($numero === 4) {
        return "4-Quarta";
    } elseif ($numero === 5) {
        return "5-Quinta";
    } elseif ($numero === 6) {
        return "6-Sexta";
    } elseif ($numero === 7) {
        return "7-Sábado";
    } else {
        return "Valor inválido!";
    }
}

echo diaDaSemana(1);
?>