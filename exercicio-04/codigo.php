<?php

/**
 * 4) Dado o valor de faturamento mensal de uma distribuidora, detalhado por estado:
*SP – R$67.836,43
*RJ – R$36.678,66
*MG – R$29.229,88
*ES – R$27.165,48
*Outros – R$19.849,53

*Escreva um programa na linguagem que desejar onde calcule o percentual de representação que cada estado teve dentro do valor total mensal da distribuidora.
*/




// Valores de faturamento por estado
$faturamento_sp = 67836.43;
$faturamento_rj = 36678.66;
$faturamento_mg = 29229.88;
$faturamento_es = 27165.48;
$faturamento_outros = 19849.53;

// Valor total mensal da distribuidora
$total = $faturamento_sp + $faturamento_rj + $faturamento_mg + $faturamento_es + $faturamento_outros;

// Cálculo do percentual de representação de cada estado
$percentual_sp = ($faturamento_sp / $total) * 100;
$percentual_rj = ($faturamento_rj / $total) * 100;
$percentual_mg = ($faturamento_mg / $total) * 100;
$percentual_es = ($faturamento_es / $total) * 100;
$percentual_outros = ($faturamento_outros / $total) * 100;

// Exibição dos percentuais
echo "Percentual de representação de cada estado no faturamento mensal:\n";
echo "SP: " . number_format($percentual_sp, 2) . "%\n";
echo "RJ: " . number_format($percentual_rj, 2) . "%\n";
echo "MG: " . number_format($percentual_mg, 2) . "%\n";
echo "ES: " . number_format($percentual_es, 2) . "%\n";
echo "Outros: " . number_format($percentual_outros, 2) . "%\n";
