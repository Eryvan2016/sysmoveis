<?php

class ItensVendas {
    private $id;
    private $quantidade;
    private $valor;
    private $subtotal;
    private $idCliente;
    private $idVenda;
    private $idEstoque;
    function getId() {
        return $this->id;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getValor() {
        return $this->valor;
    }

    function getSubtotal() {
        return $this->subtotal;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getIdVenda() {
        return $this->idVenda;
    }

    function getIdEstoque() {
        return $this->idEstoque;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setQuantidade($quantidade): void {
        $this->quantidade = $quantidade;
    }

    function setValor($valor): void {
        $this->valor = $valor;
    }

    function setSubtotal($subtotal): void {
        $this->subtotal = $subtotal;
    }

    function setIdCliente($idCliente): void {
        $this->idCliente = $idCliente;
    }

    function setIdVenda($idVenda): void {
        $this->idVenda = $idVenda;
    }

    function setIdEstoque($idEstoque): void {
        $this->idEstoque = $idEstoque;
    }


}
