<?php

header('Content-Type: text/html; charset=utf-8');

$salarios = [
    1800.50,
    2500.00,
    1250.75,
    3200.00,
    2000.00,
    980.00
];

function exibirSalarios($titulo, $arrayDeSalarios) {
    echo "<h3>$titulo</h3>";
    echo "<ul>";
    foreach ($arrayDeSalarios as $valor) {
        echo "<li>R$ " . number_format($valor, 2, ',', '.') . "</li>";
    }
    echo "</ul>";
}

exibirSalarios("Salários Originais:", $salarios);

echo "<hr>";
echo "<p>Aplicando aumento de 10% para quem ganha menos de R$ 2000,00...</p>";

foreach ($salarios as &$salario) {
    if ($salario < 2000) {
        $salario *= 1.10;
    }
}

unset($salario);

exibirSalarios("Salários Corrigidos:", $salarios);

?>