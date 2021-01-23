<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/vo/Cliente.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/dao/ClienteDAO.php";
$cliente = new Cliente();
$cliente->setNome($_POST['cpf']);
$cliente->setNome($_POST['nome']);
$cliente->setRua($_POST['rua']);
$cliente->setNumero($_POST['numero']);
$cliente->setBairro($_POST['bairro']);
$cliente->setCidade($_POST['cidade']);
$cliente->setNome($_POST['PontoReferencia']);
$cliente->setUf($_POST['uf']);
$cliente->setCep($_POST['cep']);
$cliente->setCelular($_POST['celular']);
$dao = new ClienteDAO();
if ($_POST['id'] == 0)
    $dao->salvar($cliente);
else
    $dao->atualizar($cliente);
header('Location: http://' . $_SERVER['HTTP_HOST'] . '/sysmoveis/listarCliente.php');
?>