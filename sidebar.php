<?php

include_once('conexao.php');

if (isset($_SESSION)) {
  session_start();
}

// include_once('logout.php');

include_once('conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,1,0" />
  <title>Manutenção de Frotas</title>
  <link rel="stylesheet" href="css/styles_sidebar.css" />
</head>

<body>
  <aside class="sidebar">
    <header>
      <img src="assets/viafertil.png" />
      <span> Manutenção de Frotas </span>
    </header>
    <button>
      <span class="material-symbols-outlined"> home </span>
      <span>Home</span>
    </button>

    <button onclick="handleHeaderClicked('maintenance')">
      <span class="material-symbols-outlined"> build </span>
      <span>Clientes</span>
      <span class="material-symbols-outlined"> expand_more </span>
    </button>
    <div id="maintenance" class="subnav">
      <div class="subnav-inner">
        <form action="consult car/consulta_veiculos.php" method="post">
          <button type="submit" class="btn">Consultar Clientes</button>
        </form>
        <button>
          <span>Relatório de veículos</span>
        </button>
      </div>
    </div>

    <button onclick="handleHeaderClicked('tools')">
      <span class="material-symbols-outlined"> build </span>
      <span>Manutenção de Veículos</span>
      <span class="material-symbols-outlined"> expand_more </span>
    </button>
    <div id="tools" class="subnav">
      <div class="subnav-inner">
        <form action="./consult car/consulta_veiculos.php" method="post">
          <button type="submit" class="btn">Consultar veiculos</button>
        </form>
        <button>
          <span>relatório de veículos</span>
        </button>
        <a href="./Dashboard/Dashboard.php" style="text-decoration: none; color: inherit;">
          <button>Dashboard</button>
        </a>
      </div>
    </div>
    <button onclick="handleHeaderClicked('settings')">
      <span class="material-symbols-outlined"> settings </span>
      <span>Selecionar Estabelecimento</span>
      <span class="material-symbols-outlined"> expand_more </span>
    </button>

    <div id="settings" class="subnav">
      <div class="subnav-inner">
        <form action="consult car/consulta_veiculos_porto.php" method="post">
          <button type="submit" class="btn">Porto dos gauchos</button>
        </form>
        <button>
          <span>Brasnorte</span>
        </button>
        <button>
          <span>Juara</span>
        </button>
        <!-- <button>
            <span>Acessibilidade</span>
          </button> -->
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
  </aside>


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
</body>

</html>