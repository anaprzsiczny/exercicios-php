<?php

$firstValue = $_POST['firstValue'];
$secondValue = $_POST['secondValue'];
$thirdValue = $_POST['thirdValue'];
$triangle = false;
$message = "";

if ($firstValue > 0 && $secondValue > 0 && $thirdValue > 0) {
    if ($firstValue + $secondValue > $thirdValue 
        || $secondValue + $thirdValue > $firstValue 
        || $thirdValue + $firstValue > $secondValue
    ) {
        $triangle = true;
        $message = "É um triângulo!";
        $type = "";
    }
} else {
    $message = "Não é um triângulo!";
}

if ($triangle) {
    if ($firstValue == $secondValue && $firstValue == $thirdValue) {
        $type = "Equilátero";
    } elseif ($firstValue == $secondValue 
        || $secondValue == $thirdValue 
        || $thirdValue == $firstValue
    ) {
        $type = "Isósceles";
    } else {
        $type = "Escaleno";
    }
}

header("Location: index.php?message={$message}&type={$type}");
exit;

?>