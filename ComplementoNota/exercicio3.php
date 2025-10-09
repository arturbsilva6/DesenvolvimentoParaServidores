<?php

echo "<h3>Soma dos Números Pares de 1 a 50</h3>";


$soma = 0;              
$pares = [];            
$numero_atual = 1;      


while ($numero_atual <= 50) {
    
 
    if ($numero_atual % 2 == 0) {
        
        $soma += $numero_atual;
        
        $pares[] = $numero_atual;
    }
    
    $numero_atual++;
}

echo "<p>A soma final de todos os números pares entre 1 e 50 é: <strong>{$soma}</strong>.</p>";

echo "<p>A lista de números pares encontrados é: <strong>" . implode(", ", $pares) . "</strong>.</p>";

?>