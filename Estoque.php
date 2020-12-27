<?php


class Estoque {
    private $id;
    private $idProduto;
    private $nome;
    private $situacao;
    private $quantidade;
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getSituacao() {
        return $this->situacao;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setSituacao($situacao): void {
        $this->situacao = $situacao;
    }

    function setQuantidade($quantidade): void {
        $this->quantidade = $quantidade;
    }

    function getIdProduto() {
        return $this->idProduto;
    }

    function setIdProduto($idProduto): void {
        $this->idProduto = $idProduto;
    }


}
