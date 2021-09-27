<?php

/**
 * This function converts meters to centimeters
 * 
 * @param mixed $metros
 * 
 * @return mixed
 */
function converteDistancia($metros): float
{
    return $metros * 100;
}

echo converteDistancia(50) . "cm";
