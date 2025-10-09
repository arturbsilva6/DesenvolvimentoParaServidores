<?php
// Define o charset para garantir a acentuação correta
header('Content-Type: text/html; charset=utf-8');

// 1. Array do carrinho de compras
// Cada item é um array associativo com os detalhes do produto
$carrinho = [
    [
        "nome" => "Camiseta Básica Branca",
        "quantidade" => 2,
        "preco_unitario" => 49.90
    ],
    [
        "nome" => "Calça Jeans Slim",
        "quantidade" => 1,
        "preco_unitario" => 189.99
    ],
    [
        "nome" => "Par de Meias Cano Longo",
        "quantidade" => 3,
        "preco_unitario" => 15.00
    ],
    [
        "nome" => "Tênis de Corrida",
        "quantidade" => 1,
        "preco_unitario" => 350.50
    ]
];

// Variável para armazenar o total do pedido
$totalPedido = 0;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Recibo de Compra</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            width: 380px;
            margin: 20px auto;
            border: 1px solid #ccc;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2, h3 {
            text-align: center;
            margin: 5px 0;
            border-bottom: 1px dashed #333;
            padding-bottom: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
        th.num, td.num {
            text-align: right;
        }
        .total-line {
            font-weight: bold;
            border-top: 1px dashed #333;
            margin-top: 10px;
            padding-top: 5px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

    <h2>** RECIBO DA COMPRA **</h2>
    <h3>Lojão Genérico S/A</h3>

    <table>
        <thead>
            <tr>
                <th>Produto</th>
                <th class="num">Qtd.</th>
                <th class="num">Preço</th>
                <th class="num">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // 2. Itera sobre o carrinho para exibir os itens e calcular os totais
            foreach ($carrinho as $item) {
                $nome = $item["nome"];
                $quantidade = $item["quantidade"];
                $preco = $item["preco_unitario"];
                
                // Calcula o subtotal para este item
                $subtotal = $quantidade * $preco;
                
                // Adiciona o subtotal ao total geral do pedido
                $totalPedido += $subtotal;

                // 3. Exibe a linha da tabela para cada produto, formatando os números
                echo "<tr>";
                echo "<td>" . htmlspecialchars($nome) . "</td>";
                echo "<td class='num'>" . $quantidade . "</td>";
                echo "<td class='num'>" . number_format($preco, 2, ',', '.') . "</td>";
                echo "<td class='num'>" . number_format($subtotal, 2, ',', '.') . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <div class="total-line">
        <table>
            <tr>
                <td><strong>TOTAL DO PEDIDO:</strong></td>
                <td class="num"><strong>R$ <?php echo number_format($totalPedido, 2, ',', '.'); ?></strong></td>
            </tr>
        </table>
    </div>

    <div class="footer">
        <p>Agradecemos a sua preferência!</p>
        <p>Data: <?php echo date("d/m/Y H:i:s"); ?></p>
    </div>

</body>
</html>