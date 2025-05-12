<?php

echo "Informe o resultado da primeira avaliação (0-10): ";
   $primeiraAvaliacao = (float)trim(fgets(STDIN));

echo "Informe o resultado da segunda avaliação (0-10): ";
   $segundaAvaliacao = (float)trim(fgets(STDIN));

if ($primeiraAvaliacao < 0 || $primeiraAvaliacao > 10 || $segundaAvaliacao < 0 || $segundaAvaliacao > 10) {
    echo "Atenção: Os valores devem estar entre 0 e 10 pontos.\n";
    exit;
}

$desempenhoMedio = ($primeiraAvaliacao + $segundaAvaliacao) / 2;

if ($desempenhoMedio >= 7) {
    $resultadoFinal = "Aprovado";
} else {
    $resultadoFinal = "Reprovado";
}

echo "\nRelatório Acadêmico:\n";
echo "Primeira avaliação: " . number_format($primeiraAvaliacao, 1) . " pontos\n";
echo "Segunda avaliação: " . number_format($segundaAvaliacao, 1) . " pontos\n";
echo "Média alcançada: " . number_format($desempenhoMedio, 1) . " pontos\n";
echo "Situação: " . $resultadoFinal . "\n";
?>