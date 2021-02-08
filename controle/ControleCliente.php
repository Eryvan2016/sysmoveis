<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/vo/Cliente.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/dao/ClienteDAO.php";
$cliente = new Cliente();
$cliente->setCpf($_POST['cpf']);
$cliente->setNome($_POST['nome']);
$cliente->setRua($_POST['rua']);
$cliente->setBairro($_POST['bairro']);
$cliente->setCidade($_POST['cidade']);
$cliente->setNumero($_POST['numero']);
$cliente->setUf($_POST['uf']);
$cliente->setPontoReferencia($_POST['PontoReferencia']);
$cliente->setTelefone($_POST['Telefone']);
$cliente->setCep($_POST['cep']);
$dao = new ClienteDAO();
if ($_POST['id'] == 0)
    $dao->salvar($cliente);
else
    $dao->atualizar($cliente);
header('Location: http://' . $_SERVER['HTTP_HOST'] . '/sysmoveis/pages/listarCliente.php');
?>