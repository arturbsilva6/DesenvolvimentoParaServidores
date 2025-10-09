<?php


$alunos = [
    "Marcos Vinícius" => [8, 7.5, 9, 8],
    "Ana Júlia"       => [5, 4, 6.5, 5.5],
    "Beatriz Costa"  => [9, 9.5, 10, 8.5],
    "Carlos Eduardo" => [6, 5, 7, 6],
    "Fernanda Lima"  => [4, 3.5, 5, 6]
];

echo "<h3>Boletim Final dos Alunos</h3>";


foreach ($alunos as $nome => $notas) {
    
    $somaDasNotas = array_sum($notas);

    $quantidadeDeNotas = count($notas);
    
    $media = $somaDasNotas / $quantidadeDeNotas;
    
    if ($media >= 6) {
        $status = "APROVADO";
    } else {
        $status = "REPROVADO";
    }
    
    echo "<b>Aluno(a):</b> {$nome}<br>";
    echo "<b>Notas:</b> " . implode(", ", $notas) . "<br>"; 
    echo "<b>Média Final:</b> " . number_format($media, 1, ',') . "<br>";
    echo "<b>Status:</b> {$status}<br>";
    echo "<hr>"; 
}

?>