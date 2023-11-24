<?php
session_start();
require_once('conexao.php');

// checa se o usuario esta logado
if (isset($_SESSION['user_id'], $_SESSION['username'])) {
    // limpa as arrays da sessao
    $_SESSION = array();

    // finaliza a sessao atual
    session_destroy();

    // redireciona para login
    header('Location: login.php');
    exit();
} else {
    // se o usuario nao estiver logado sera redirecionado
    header('Location: login.php');
    exit();
}
?>