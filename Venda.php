<?php

class Venda {
    private $id;
    private $data;
    private $hora;
    private $ValorTotal;
    
    
    function getId() {
        return $this->id;
    }

    function getData() {
        return $this->data;
    }

    function getHora() {
        return $this->hora;
    }

    function getValorTotal() {
        return $this->ValorTotal;
    }
    
    function setId($id): void {
        $this->id = $id;
    }

    function setData($data): void {
        $this->data = $data;
    }

    function setHora($hora): void {
        $this->hora = $hora;
    }

    function setValorTotal($ValorTotal): void {
        $this->ValorTotal = $ValorTotal;
    }
    

}
