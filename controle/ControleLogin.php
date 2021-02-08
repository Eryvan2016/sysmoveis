<?php

$email = $_POST['email'];
$senha = $_POST['senha'];
require_once $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/dao/UsuarioDAO.php";

$dao = new UsuarioDAO();
$usuarioLogado = $dao->logar($email, $senha);
if ($usuarioLogado != null) {
    echo "Olá " . $usuarioLogado->getNome();
    if (isset($_POST['lembrar'])) {
        setcookie("idUsuarioLogado", $usuarioLogado->getId(), time() + (60 * 60 * 24 * 30));
    } else {
        session_start();
        $_SESSION['idUsuarioLogado'] = $usuarioLogado->getId();
    }
} else {
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/sysmoveis/login.php?erro=1');
}