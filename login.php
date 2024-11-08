<?php

session_start();

include('conexao.php');

if (isset($_POST['email']) && isset($_POST['senha'])) { // Corrigido para verificar se ambos email e senha foram enviados

  if (strlen($_POST['email']) == 0) {
    echo "Preencha seu email";
  } else if (strlen($_POST['senha']) == 0) {
    // echo "Preencha sua senha";
  } else {

    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código: " . $mysqli->error);

    $quantidade = $sql_query->num_rows; // Corrigido para usar $sql_query

    if ($quantidade == 1) {

      $usuario = $sql_query->fetch_assoc();

      if (!isset($_SESSION)) {
        session_start();
      }
      $_SESSION['id'] = $usuario['id'];
      $_SESSION['nome'] = $usuario['nome'];

      header("Location: sidebar.php");
      exit;
    } else {
      // echo "E-mail ou senha incorretos";
    }
  }
} else {
  // echo "Informe o e-mail e senha";
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

  <link href="css/style_index.css" rel="stylesheet">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <h1>Sistema de gestão integrado</h1>

  <div class="login-page">
    <div class="form">
      <form action="" method="POST" class="login-form">
        <input type="text" name="email" placeholder="email" />
        <input type="password" name="senha" placeholder="senha" />
        <button id="btnIrParaPagina2">login</button>
        <p class="message">não é registrado? <a href="#"> Criar conta</a></p>
      </form>
    </div>
  </div>
</body>

</html>