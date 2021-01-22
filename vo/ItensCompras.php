<?php


class ItensCompras {
    private $id;
    private $idProduto;
    private $idCompra;
    private $quantidade;
    private $subtotal;
    
    function getId() {
        return $this->id;
    }

    function getIdProduto() {
        return $this->idProduto;
    }

    function getIdCompra() {
        return $this->idCompra;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getSubtotal() {
        return $this->subtotal;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setIdProduto($idProduto): void {
        $this->idProduto = $idProduto;
    }

    function setIdCompra($idCompra): void {
        $this->idCompra = $idCompra;
    }

    function setQuantidade($quantidade): void {
        $this->quantidade = $quantidade;
    }

    function setSubtotal($subtotal): void {
        $this->subtotal = $subtotal;
    }

    function tostring(){
        return $idProduto." - ".$idCompra;
    }
    
        
}
