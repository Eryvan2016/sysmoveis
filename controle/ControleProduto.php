<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/vo/Produto.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/dao/ProdutoDAO.php";
$produto = new Produto();
$produto->setNome($_POST['nome']);
$produto->setDescricao($_POST['descricao']);
$produto->setQuantidade($_POST['quantidade']);
$produto->setValor($_POST['valor']);
$produto->setSituacao($_POST['situacao']);

$dao = new ProdutoDAO();
if ($_POST['id'] == 0)
    $dao->salvar($produto);
else
    $dao->atualizar($produto);
header('Location: http://' . $_SERVER['HTTP_HOST'] . '/sysmoveis/pages/listarProduto.php');
?>