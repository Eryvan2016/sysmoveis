<?php

class Fornecedor {
    private $id;
    private $cnpj;
    private $nome;
    private $tipo;
    private $rua;
    private $bairro;
    private $numero;
    private $cidade;
    private $telefone;
    private $email;
    private $UF;
    function getTelefone() {
        return $this->telefone;
    }

    function getEmail() {
        return $this->email;
    }

    function getUF() {
        return $this->UF;
    }

    function getId() {
        return $this->id;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getNome() {
        return $this->nome;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getRua() {
        return $this->rua;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getNumero() {
        return $this->numero;
    }

    function getCidade() {
        return $this->cidade;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setCnpj($cnpj): void {
        $this->cnpj = $cnpj;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    function setRua($rua): void {
        $this->rua = $rua;
    }

    function setBairro($bairro): void {
        $this->bairro = $bairro;
    }

    function setNumero($numero): void {
        $this->numero = $numero;
    }

    function setCidade($cidade): void {
        $this->cidade = $cidade;
    }
    
    function setTelefone($telefone): void {
        $this->telefone = $telefone;
    }

    function setEmail($email): void {
        $this->email = $email;
    }

    function setUF($UF): void {
        $this->UF = $UF;
    }


}
