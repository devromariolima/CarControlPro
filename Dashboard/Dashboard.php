<?php

if (isset($_SESSION)) {
    session_start();
}

include_once('../Dashboard/consultar_dados.php');

include_once('../conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- !-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,1,0" />
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Manutenção de Frotas</title>
</head>

<body>
    <div class="container">
        <h1 class="my-4 text-dark text-center">Dashboard Geral</h1>

        <!-- Gráfico de Barras -->
        <canvas id="graficoBarras" width="400" height="200"></canvas>
    </div>

    <script>
        var totalUsuarios = <?php echo $total_usuarios; ?>;
        var totalCarros = <?php echo $total_carros; ?>;

        // Dados para o gráfico de barras
        var dadosGraficoBarras = {
            labels: ['Total Usuários', 'Total de carros', 'Honda', 'Chevrolet', 'Volkswagen'],
            datasets: [{
                label: 'Total',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
                data: [totalUsuarios, totalCarros, 80, 70, 60] // Usando o total de usuários aqui
            }]
        };

        // Opções para o gráfico de barras
        var opcoesGrafico = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        };

        // Criando o gráfico de barras
        var ctxBarras = document.getElementById('graficoBarras').getContext('2d');
        var graficoBarras = new Chart(ctxBarras, {
            type: 'bar',
            data: dadosGraficoBarras,
            options: opcoesGrafico
        });
    </script>


</body>

</html>