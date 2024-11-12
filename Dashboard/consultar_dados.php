<?php
include('../conexao.php');

// Consulta para obter a contagem de usuários
$sql = "SELECT COUNT(*) as total_usuarios FROM usuarios";
$result = $mysqli->query($sql);

// Verificar se a consulta retornou resultados
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_usuarios = $row['total_usuarios'];
} else {
    $total_usuarios = 0;
}

// Fechar conexão
$mysqli->close();

// Retornar o total de usuários
// echo $total_usuarios;
?>


<?php
include('../conexao.php');

// Consulta para obter a contagem de usuários
$sql = "SELECT COUNT(*) as total_carros FROM carros";
$result = $mysqli->query($sql);

// Verificar se a consulta retornou resultados
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_carros = $row['total_carros'];
} else {
    $total_carros = 0;
}

// Fechar conexão
$mysqli->close();

// Retornar o total de usuários
// echo $total_carros;
?>