<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/vo/Produto.php";

class ProdutoDAO {

    function salvar($obj) {
        require $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/bd/Conexao.php";
        try {
            $sql = "insert into produto (nome,descricao,situacao,quantidade,valor)
                    values (:nome,:descricao,:situacao,:quantidade,:valor)";
            $p_sql = $dbh->prepare($sql);
            $p_sql->bindValue(":nome", $obj->getNome());
            $p_sql->bindValue(":descricao", $obj->getDescricao());
            $p_sql->bindValue(":situacao", $obj->getSituacao());
            $p_sql->bindValue(":quantidade", $obj->getQuantidade());
            $p_sql->bindValue(":valor", $obj->getValor());
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
            $sql = "UPDATE produto SET nome,descricao=:descricao,situacao=:situacao,quantidade=:quantidade,valor=:valor,WHERE id = :id";
             $p_sql = $dbh->prepare($sql);
            $p_sql->bindValue(":nome", $obj->getNome());
            $p_sql->bindValue(":descricao", $obj->getDescricao());
            $p_sql->bindValue(":situacao", $obj->getSituacao());
            $p_sql->bindValue(":quantidade", $obj->getQuantidade());
            $p_sql->bindValue(":valor", $obj->getValor());
            $p_sql->execute();
        } catch (Exception $ex) {
            echo "Erro: Não foi possível inserir. " .
            $ex->getMessage();
        }
    }

    function remover($id) {
        require $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/bd/Conexao.php";
        try {
            $sql = "DELETE FROM `produto` WHERE id = :idRemovido";
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
            $sql = "SELECT * FROM `produto` where id = :idBuscar";
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
                return new Produto();
            }
        } catch (Exception $ex) {
            echo "Erro: Não foi possível inserir. " .
            $ex->getMessage();
        }
    }

    function listarTodos() {
        require $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/bd/Conexao.php";
        try {
            $sql = "SELECT * FROM `produto` order by descricao ASC";
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
        $obj = new Produto();
        $obj->setNome($dados->nome);
        $obj->setDescricao($dados->descricao);
        $obj->setSituacao($dados->situacao);
        $obj->setQuantidade($dados->quantidade);
        $obj->setValor($dados->valor);
        return $obj;
    }

}