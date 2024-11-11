<?php
if (!empty($_GET['id'])) {
  include_once('../conexao.php');

  // Verificar conexão
  if ($mysqli->connect_error) {
    die("Conexão falhou: " . $mysqli->connect_error);
  }

  // Sanitização e tipagem
  $id = (int) $_GET['id'];

  // Usando prepared statement para a consulta SELECT
  $sqlselect = "SELECT * FROM carros WHERE id = ?";
  $stmt = $mysqli->prepare($sqlselect);
  $stmt->bind_param("i", $id); // 'i' indica um inteiro
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    // Usando prepared statement para a consulta DELETE
    $sqlDelete = "DELETE FROM carros WHERE id = ?";
    $stmtDelete = $mysqli->prepare($sqlDelete);
    $stmtDelete->bind_param("i", $id); // 'i' indica um inteiro
    $stmtDelete->execute();
  }

  $stmt->close();
  $stmtDelete->close();
}

// Redirecionamento
header('Location: ../consult car/consulta_veiculos.php');
exit;
