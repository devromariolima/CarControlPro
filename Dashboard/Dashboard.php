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
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet" /> -->
    <!-- !-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,1,0" />
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Manutenção de Frotas</title>
    <!-- <link rel="stylesheet" href="css/styles_sidebar.css" /> -->
</head>

<body>

    <!-- <div class="container">
        <aside class="sidebar">
            <header>
                <img src="assets/viafertil.png" />
                <span> Manutenção de Frotas </span>
            </header>
            <button>
                <span class="material-symbols-outlined"> home </span>
                <span>Home</span>
            </button>
            <button onclick="handleHeaderClicked('tools')">
                <span class="material-symbols-outlined"> build </span>
                <span>Manutenção de Veículos</span>
                <span class="material-symbols-outlined"> expand_more </span>
            </button>
            <div id="tools" class="subnav">
                <div class="subnav-inner">
                    <form action="consulta_veiculos.php" method="post">
                        <button type="submit" class="btn">Consultar veiculos</button>
                    </form>
                    <!-- <button>
        <span>relatório de veículos</span>
        </button> -->
    <!-- </div>
    </div>
    <button onclick="handleHeaderClicked('settings')">
        <span class="material-symbols-outlined"> settings </span>
        <span>Selecionar Estabelecimento</span>
        <span class="material-symbols-outlined"> expand_more </span>
    </button>
    <div id="settings" class="subnav">
        <div class="subnav-inner">
            <form action="consulta_veiculos_porto.php" method="post">
                <button type="submit">Porto dos gauchos</button> <!-- AQUI -->
    <!-- </form>
            <button>
                <span>Brasnorte</span>
            </button>
            <button>
                <span>Juara</span>
            </button>
            <button>
            <span>Acessibilidade</span>
          </button>
        </div>
    </div>
    <button>
        <span class="material-symbols-outlined"> account_circle </span>
        <span>Perfil</span>
    </button>
    <button id="Close" onclick="Logout()">
        <span class="material-symbols-outlined"> logout </span>
        <span id="btnClose">Sair</span>
    </button>
    </aside>  -->

    <div class="container">
        <h1 class="my-4 text-dark text-center">Dashboard Geral</h1>

        <!-- Gráfico de Barras -->
        <canvas id="graficoBarras" width="400" height="200"></canvas>
    </div>
    </div>


    <script src="js/main_dropdown.js"></script>


    <script>
        document.getElementById('Close').addEventListener('click', function Logout() {
            // Envie uma solicitação para o arquivo logout.php
            fetch('logout.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        logout: true
                    })
                })
                .then(response => {
                    if (response.ok) {
                        // Redirecione para a página de login ou para onde desejar
                        window.location.href = 'login.php';
                        console.log("deu certo");
                    } else {
                        // Trate qualquer erro aqui, como exibir uma mensagem de erro para o usuário
                        console.error('Erro ao encerrar a sessão');
                    }
                })
                .catch(error => {
                    console.error('Erro de rede:', error);
                });
        });
    </script>



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