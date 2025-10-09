<?php

header('Content-Type: text/html; charset=utf-8');

echo "<h2>Simulador de Caixa Eletrônico</h2>";

$valorSaque = 100;

echo "<p><strong>Valor solicitado para o saque:</strong> R$ {$valorSaque},00</p>";
echo "<hr>";

$valorDaNota = 0;

switch ($valorSaque) {
    case 20:
        $valorDaNota = 20;
        break;
    case 50:
        $valorDaNota = 50;
        break;
    case 100:
        $valorDaNota = 50; 
        break;
    default:
        echo "<p style='color: red;'><strong>ERRO:</strong> Opção de saque inválida. Por favor, escolha um dos valores disponíveis (20, 50 ou 100).</p>";
        break;
}

if ($valorDaNota > 0) {

    echo "<p>Aguarde, contando as notas...</p>";

    $valorEntregue = 0;
    $contadorDeNotas = 0;

    while ($valorEntregue < $valorSaque) {
        $valorEntregue += $valorDaNota;
        $contadorDeNotas++;
        echo "Entregando a {$contadorDeNotas}ª nota de R$ {$valorDaNota},00...<br>";
    }

    echo "<hr>";
    echo "<p style='color: green;'><strong>Saque concluído!</strong></p>";
    echo "<p><strong>Total entregue:</strong> R$ {$valorEntregue},00</p>";
    echo "<p><strong>Quantidade de notas:</strong> {$contadorDeNotas}</p>";
}

?>