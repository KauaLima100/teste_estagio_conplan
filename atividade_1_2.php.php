<?php

$usuarios = array(
    array("nome" => "Kauã", "idade" => 15),
    array("nome" => "Erick", "idade" => 22),
    array("nome" => "Tais", "idade" => 17),
    array("nome" => "Marquinhos", "idade" => 18),
    array("nome" => "Ana", "idade" => 16),
    array("nome" => "Carlos", "idade" => 30)
);

$menores = array();
$maiores = array();

foreach ($usuarios as $usuario) {
    if ($usuario['idade'] < 18) {
        $menores[] = $usuario;
    } else {
        $maiores[] = $usuario;
    }
}

echo "Menores de idade (<18):\n";
foreach ($menores as $menor) {
    echo "- " . $menor['nome'] . " (" . $menor['idade'] . " anos)\n";
}

echo "\nMaiores de idade (>=18):\n";
foreach ($maiores as $maior) {
    echo "- " . $maior['nome'] . " (" . $maior['idade'] . " anos)\n";
}
?>