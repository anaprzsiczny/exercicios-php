<?php

/**
 * This function converts celsius to fahrenheit
 * 
 * @param mixed $celsius
 * 
 * @return float
 */
function converteTemperatura($celsius): float
{
    return ($celsius * 9/5) + 32;
}

echo converteTemperatura(0) . "°F";
?>