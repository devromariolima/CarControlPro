<?php  

if(isset($_SESSION)){
  session_start();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,1,0"
    />
    <title>Manutenção de Frotas</title>
    <link rel="stylesheet" href="css/styles_sidebar.css" />
  </head>
  <body>
    <aside class="sidebar">
      <header>
        <img src="assets/logo.svg" />
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
       <button>
        <span>relatório de veículos</span>
        </button>
      </div>
      </div>
      <button onclick="handleHeaderClicked('settings')">
        <span class="material-symbols-outlined"> settings </span>
        <span>Selecionar Estabelecimento</span>
        <span class="material-symbols-outlined"> expand_more </span>
      </button>
      <div id="settings" class="subnav">
        <div class="subnav-inner">
        <form action="consulta_veiculos_porto.php" method="post">
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
      <button>
        <span class="material-symbols-outlined"> logout </span>
        <span>Sair</span>
      </button>
    </aside>
    <script src="js/main_dropdown.js"></script>
  </body>
</html>