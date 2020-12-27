<?php

class Produto {
    private $id;
    private $nome;
    private $cor;
    private $situacao;
    private $quantidade;
    private $valor;
    
    function getId() {
        return $this->id;
    }
    function getNome() {
        return $this->nome;
    }

    function getCor() {
        return $this->cor;
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

    function setCor($cor): void {
        $this->cor = $cor;
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
