<?php

/**
 * 3) Dado um vetor que guarda o valor de faturamento diário de uma distribuidora, faça um programa, na linguagem que desejar, que calcule e retorne:
*• O menor valor de faturamento ocorrido em um dia do mês;
*• O maior valor de faturamento ocorrido em um dia do mês;
*• Número de dias no mês em que o valor de faturamento diário foi superior à média mensal.

*IMPORTANTE:
*a) Usar o json ou xml disponível como fonte dos dados do faturamento mensal;
*b) Podem existir dias sem faturamento, como nos finais de semana e feriados. Estes dias devem ser ignorados no cálculo da média;
*/



$json = file_get_contents('dados.json');

$dados = json_decode($json, true);
$menor_valor = $dados[0]['valor'];
$maior_valor = $dados[0]['valor'];

//calculo do maior e menor faturamento
foreach ($dados as $faturamento) {
    if ($faturamento['valor'] < $menor_valor) {
        $menor_valor = $faturamento['valor'];
    }
    if ($faturamento['valor'] > $maior_valor) {
        $maior_valor = $faturamento['valor'];
    }
}

//calculo da media
$media_mensal = 0;
foreach ($dados as $faturamento) {
    $media_mensal += $faturamento['valor'];
}
$dias = 0;
foreach ($dados as $faturamento) {
    if ($faturamento['valor'] > 0) {
        $dias ++ ;
    }
}


$media_mensal /= $dias;

//calculo de dias acima da media
$dias_acima_media = 0;
foreach ($dados as $dia) {
    if ($dia['valor'] > $media_mensal) {
        $dias_acima_media++;
    }
}

echo "Media mensal: ".$media_mensal."\n";
echo "Número de dias com faturamento acima da média: " . $dias_acima_media."\n";
echo "Menor valor de faturamento diário: ".$menor_valor."\n";
echo "Maior valor de faturamento diário: ".$maior_valor."\n";
