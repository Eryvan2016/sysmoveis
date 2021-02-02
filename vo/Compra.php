<?php

class Compra {
    private $id;
    private $nome;
    private $situacao;
    private $quantidade;
    private $valor;
    private $idFornecedor;
    function getIdFornecedor() {
        return $this->idFornecedor;
    }
    
    function setIdFornecedor($idFornecedor): void {
        $this->idFornecedor = $idFornecedor;
    }
    
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

    function getValor() {
        return $this->valor;
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

    function setValor($valor): void {
        $this->valor = $valor;
    }


}
