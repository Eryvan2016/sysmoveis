<?php

class UsuarioPermissao {
    private $id;
    private $usuario_id;
    private $permissao_id;
    
    function getId() {
        return $this->id;
    }

    function getUsuario_id() {
        return $this->usuario_id;
    }

    function getPermissao_id() {
        return $this->permissao_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsuario_id($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    function setPermissao_id($permissao_id) {
        $this->permissao_id = $permissao_id;
    }
}
