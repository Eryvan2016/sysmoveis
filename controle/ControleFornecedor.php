<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/vo/Fornecedor.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/dao/FornecedorDAO.php";
$fornecedor = new Fornecedor();
$fornecedor->setCnpj($_POST['cnpj']);
$fornecedor->setNome($_POST['nome']);
$fornecedor->setTipo($_POST['tipo']);
$fornecedor->setRua($_POST['rua']);
$fornecedor->setBairro($_POST['bairro']);
$fornecedor->setNumero($_POST['numero']);
$fornecedor->setUf($_POST['uf']);
$fornecedor->setCidade($_POST['cidade']);
$fornecedor->setTelefone($_POST['Telefone']);
$fornecedor->setEmail($_POST['email']);
$dao = new FornecedorDAO();
if ($_POST['id'] == 0)
    $dao->salvar($fornecedor);
else
    $dao->atualizar($fornecedor);
header('Location: http://' . $_SERVER['HTTP_HOST'] . '/sysmoveis/pages/listarFornecedor.php');
?>