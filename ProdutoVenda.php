<?php

class ProdutoVenda {
    private $id;
    private $quantidade;
    private $idProduto;
    private $idVenda;
    function getId() {
        return $this->id;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getIdProduto() {
        return $this->idProduto;
    }

    function getIdVenda() {
        return $this->idVenda;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setQuantidade($quantidade): void {
        $this->quantidade = $quantidade;
    }

    function setIdProduto($idProduto): void {
        $this->idProduto = $idProduto;
    }

    function setIdVenda($idVenda): void {
        $this->idVenda = $idVenda;
    }


}
