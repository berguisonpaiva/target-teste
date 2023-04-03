<?php

// String a ser invertida
$string = (string) readline("Digite a String a ser invertida: ");


// Tamanho da string
$tamanho = strlen($string);

// String invertida
$string_invertida = "";

// Inverte a string
for ($i = $tamanho - 1; $i >= 0; $i--) {
    $string_invertida .= $string[$i];
}

// Imprime a string invertida
echo $string_invertida;
