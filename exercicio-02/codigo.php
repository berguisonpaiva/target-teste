<?php


/**
 * 2) Dado a sequência de Fibonacci, onde se inicia por 0 e 1 e o próximo valor sempre será a soma dos 2 valores anteriores (exemplo: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34...), escreva um programa na linguagem que desejar onde, informado um número, ele calcule a sequência de Fibonacci e retorne uma mensagem avisando se o número informado pertence ou não a sequência.

*IMPORTANTE:
*Esse número pode ser informado através de qualquer entrada de sua preferência ou pode ser previamente definido no código;
*/


$num = (int) readline("Digite um número: ");

$fib_ant = 0;
$fib_atual = 1;
$pertence = false;

while ($fib_atual <= $num) {
    if ($fib_atual == $num) {
        $pertence = true;
        break;
    }
    $fib_prox = $fib_ant + $fib_atual;
    $fib_ant = $fib_atual;
    $fib_atual = $fib_prox;
}

if ($pertence) {
    echo "O número $num pertence à sequência de Fibonacci.\n";
} else {
    echo "O número $num não pertence à sequência de Fibonacci.\n";
}
