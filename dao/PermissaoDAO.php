<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/vo/Permissao.php";

class PermissaoDAO {
    function salvar($obj) {
        require $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/bd/Conexao.php";
        try {
            $sql = "insert into permissao (id,decricao)
                    values (:id,:descricao)";
            $p_sql = $dbh->prepare($sql);
            $p_sql->bindValue(":id", $obj->getId());
            $p_sql->bindValue(":descricao", $obj->getPermissao());
           
            $p_sql->execute();
            return $dbh->lastInsertId();
        } catch (Exception $ex) {
            echo "Erro: Não foi possível inserir. " .
            $ex->getMessage();
        }
    }


    function atualizar($obj) {
        require $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/bd/Conexao.php";
        try {
            $sql = "UPDATE permissao SET descricao=:descricao WHERE id = :id";
            $p_sql = $dbh->prepare($sql);
            $p_sql->bindValue(":id", $obj->getId());
            $p_sql->bindValue(":descricao", $obj->getdescricao());
            
            
            $p_sql->execute();
        } catch (Exception $ex) {
            echo "Erro: Não foi possível inserir. " .
            $ex->getMessage();
        }
    }

    function remover($id) {
        require $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/bd/Conexao.php";
        try {
            $sql = "DELETE FROM `permissao` WHERE id = :idRemovido";
            $p_sql = $dbh->prepare($sql);
            $p_sql->bindValue(":idRemovido", $id);
            $p_sql->execute();
        } catch (Exception $ex) {
            echo "Erro: Não foi possível inserir. " .
            $ex->getMessage();
        }
    }

    function listar() {
        
    }

    function pegarPorId($id) {
        require $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/bd/Conexao.php";
        try {
            $sql = "SELECT * FROM `permissao` where id = :idBuscar";
            $p_sql = $dbh->prepare($sql);
            $p_sql->bindValue(":idBuscar", $id);
            $p_sql->execute();
            $dados = $p_sql->fetchAll(PDO::FETCH_OBJ);
            $lista = array();
            foreach ($dados as $p) {
                $lista[] = self::popular($p);
            }
            if (sizeof($lista)>0)
                return $lista[0];
            else{
                return new Permissao();
            }
        } catch (Exception $ex) {
            echo "Erro: Não foi possível inserir. " .
            $ex->getMessage();
        }
    }

    function listarTodos() {
        require $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/bd/Conexao.php";
        try {
            $sql = "SELECT * FROM `permissao` order by nome ASC";
            $p_sql = $dbh->prepare($sql);
            $p_sql->execute();
            $dados = $p_sql->fetchAll(PDO::FETCH_OBJ);
            $lista = array();
            foreach ($dados as $p) {
                $lista[] = self::popular($p);
            }
            return $lista;
        } catch (Exception $ex) {
            echo "Erro: Não foi possível inserir. " .
            $ex->getMessage();
        }
    }

    private static function popular($dados) {
        $obj = new Permissao();
        $obj->setId($dados->id);
        $obj->setDescricao($dados->descricao);
       
        return $obj;
    }

}
