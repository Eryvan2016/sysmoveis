<?php

class Cliente {
    private $id;
    private $cpf;
    private $nome;
    private $rua;
    private $bairro;
    private $cidade;
    private $numero;
    private $PontoReferencia;
    private $telefone;
    private $UF;
    private $cep;
    function getNumero() {
        return $this->numero;
    }

    function setNumero($numero): void {
        $this->numero = $numero;
    }

        function getCep() {
        return $this->cep;
    }

    function setCep($cep): void {
        $this->cep = $cep;
    }

                function getId() {
        return $this->id;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getNome() {
        return $this->nome;
    }

    function getRua() {
        return $this->rua;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getPontoReferencia() {
        return $this->PontoReferencia;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setCpf($cpf): void {
        $this->cpf = $cpf;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setRua($rua): void {
        $this->rua = $rua;
    }

    function setBairro($bairro): void {
        $this->bairro = $bairro;
    }

    function setCidade($cidade): void {
        $this->cidade = $cidade;
    }

    function setPontoReferencia($PontoReferencia): void {
        $this->PontoReferencia = $PontoReferencia;
    }

    function setTelefone($telefone): void {
        $this->telefone = $telefone;
    }
    function getUF() {
        return $this->UF;
    }

    function setUF($UF): void {
        $this->UF = $UF;
    }
    
}
