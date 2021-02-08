<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/vo/Usuario.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/dao/UsuarioDAO.php";
$usuario = new Usuario();
$usuario->setNome($_POST['nome']);
$usuario->setLogin($_POST['login']);
$usuario->setSenha($_POST['senha']);
$usuario->setEmail($_POST['email']);
$dao = new UsuarioDAO();
if ($_POST['id'] == 0)
    $dao->salvar($usuario);
else
    $dao->atualizar($usuario);
header('Location: http://' . $_SERVER['HTTP_HOST'] . '/sysmoveis/listarUsuario.php');
?>