<?php
// Iniciar a sessão
session_start();

// Limpar as variáveis de sessão
$_SESSION = array();

// Destruir a sessão
session_destroy();

// Responder com uma mensagem indicando que a sessão foi encerrada com sucesso
echo json_encode(array('message' => 'Sessão encerrada com sucesso'));
?>
