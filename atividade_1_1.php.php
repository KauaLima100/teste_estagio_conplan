<?php

$jogos = array(
    array("nome" => "Minecraft", "preco" => 45.90),
    array("nome" => "Call of Duty", "preco" => 199.90),
    array("nome" => "Battlefield", "preco" => 149.90),
    array("nome" => "Stardew Valley", "preco" => 24.99),
    array("nome" => "Terraria", "preco" => 19.99),
    array("nome" => "Among Us", "preco" => 12.50),
    array("nome" => "Undertale", "preco" => 36.90)
);

echo "Jogos com preço abaixo de R$ 50,00:\n";
foreach ($jogos as $jogo) {
    if ($jogo['preco'] < 50) {
        echo "- " . $jogo['nome'] . ": R$ " . number_format($jogo['preco'], 2, ',', '.') . "\n";
    }
}
?>