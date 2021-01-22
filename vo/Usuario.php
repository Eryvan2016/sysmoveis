<?php

class Usuario {
    private $id;
    private $nome;
    private $login;
    private $senha;
    private $email;
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getEmail() {
        return $this->email;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setLogin($login): void {
        $this->login = $login;
    }

    function setSenha($senha): void {
        $this->senha = $senha;
    }

    function setEmail($email): void {
        $this->email = $email;
    }

             
}

