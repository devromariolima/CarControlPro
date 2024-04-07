<?php
include('conexao.php');

$sql = "SELECT * FROM carros WHERE local_de_uso = 'Porto dos gauchos'";
$result = $mysqli->query($sql);

// Incluir a biblioteca Dompdf
require_once 'dompdf/dompdf/autoload.inc.php';

// Iniciar a geração do PDF com o Dompdf
use Dompdf\Dompdf;
$dompdf = new Dompdf();

// Definir orientação da página como paisagem
$dompdf->setPaper('A4', 'landscape');

// HTML do relatório com estilização manual em CSS
$html = '
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Carros - Porto dos Gaúchos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            font-size: 12px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
            vertical-align: top;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-4">Relatório de Carros - Porto dos Gaúchos</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Placa</th>
                    <th>Descrição do Veículo</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Ano de Fabricação</th>
                    <th>Valor</th>
                    <th>Tara</th>
                    <th>Unidade Federativa</th>
                    <th>Situação</th>
                    <th>Local de Uso</th>
                    <th>Responsável</th>
                    <th>Vencimento do Seguro</th>
                    <th>Vencimento do IPVA</th>
                    <!-- Adicione mais colunas conforme necessário -->
                </tr>
            </thead>
            <tbody>';

// Inserir dados dinâmicos na tabela
while ($row = $result->fetch_assoc()) {
    $html .= '
    <tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['placa'].'</td>
        <td>'.$row['descricao_do_veiculo'].'</td>
        <td>'.$row['marca'].'</td>
        <td>'.$row['modelo'].'</td>
        <td>'.$row['ano_de_fabricacao'].'</td>
        <td>'.$row['valor'].'</td>
        <td>'.$row['tara'].'</td>
        <td>'.$row['unidade_federativa'].'</td>
        <td>'.$row['situacao'].'</td>
        <td>'.$row['local_de_uso'].'</td>
        <td>'.$row['responsavel'].'</td>
        <td>'.$row['vencimento_do_seguro'].'</td>
        <td>'.$row['vencimento_do_ipva'].'</td>
        <!-- Adicione mais colunas conforme necessário -->
    </tr>';
}

$html .= '
            </tbody>
        </table>
    </div>
</body>
</html>';

// Carregar o HTML no Dompdf
$dompdf->loadHtml($html);

// Renderizar o PDF
$dompdf->render();

// Exibir o PDF ou salvá-lo em um arquivo
$dompdf->stream('relatorio_carros.pdf');
?>
