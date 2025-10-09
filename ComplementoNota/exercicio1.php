<?php


$nomePeca = 'Jaqueta';
$tamanho = 'G';


$precoBase = 0;

switch (mb_strtolower($nomePeca, 'UTF-8')) {
    case 'camiseta':
        $precoBase = 50.00;
        break;
    case 'calça':
        $precoBase = 120.50;
        break;
    case 'jaqueta':
        $precoBase = 210.00;
        break;
    default:
        // Se a peça não for encontrada, o preço continua 0
        $precoBase = 0;
        break;
}


$precoFinal = $precoBase;

if ($precoBase > 0) {
    
    if (strtoupper($tamanho) == 'G') {
        $acrescimo = $precoBase * 0.10; // Calcula 10% do preço base
        $precoFinal = $precoBase + $acrescimo;
    }
}

if ($precoFinal > 0) {
   
    $precoFormatado = number_format($precoFinal, 2, ',', '.');
  
    echo "O preço da peça '{$nomePeca}' no tamanho {$tamanho} é de R$ {$precoFormatado}.";
} else {

    echo "Desculpe, a peça '{$nomePeca}' não foi encontrada em nosso catálogo.";
}

?>