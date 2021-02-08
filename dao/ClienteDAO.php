<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/vo/Cliente.php";

class ClienteDAO {
    function salvar($obj) {
        require $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/bd/Conexao.php";
        try {
            $sql = "insert into cliente (id,cpf,nome,rua,bairro,cidade,numero,uf,pontoReferencia,telefone,cep)
                    values (:id,:cpf,:nome,:rua,:bairro,:cidade,:numero,:uf,:pontoReferencia,:telefone,:cep)";
            $p_sql = $dbh->prepare($sql);
            $p_sql->bindValue(":id", $obj->getId());
            $p_sql->bindValue(":cpf", $obj->getCpf());
            $p_sql->bindValue(":nome", $obj->getNome());
            $p_sql->bindValue(":rua", $obj->getRua());
            $p_sql->bindValue(":bairro", $obj->getBairro());
            $p_sql->bindValue(":cidade", $obj->getCidade());
            $p_sql->bindValue(":numero", $obj->getNumero());
            $p_sql->bindValue(":uf", $obj->getUf());
            $p_sql->bindValue(":pontoReferencia", $obj->getPontoReferencia());
            $p_sql->bindValue(":telefone", $obj->getTelefone());
            $p_sql->bindValue(":cep", $obj->getcep());
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
            $sql = "UPDATE cliente SET id=:id, cpf=:cpf,nome=:nome,rua=:rua,bairro=:bairro,cidade=:cidade,numero=:numero,uf=:uf,pontoReferencia=:pontoReferencia, telefone=:telefone,cep=:cep WHERE id = :id";
            $p_sql = $dbh->prepare($sql);
            $p_sql->bindValue(":id", $obj->getId());
            $p_sql->bindValue(":cpf", $obj->getCpf());
            $p_sql->bindValue(":nome", $obj->getNome());
            $p_sql->bindValue(":rua", $obj->getRua());
            $p_sql->bindValue(":bairro", $obj->getBairro());
            $p_sql->bindValue(":cidade", $obj->getCidade());
            $p_sql->bindValue(":numero", $obj->getNumero());
            $p_sql->bindValue(":uf", $obj->getUf());
            $p_sql->bindValue(":pontoReferencia", $obj->getPontoReferencia());
            $p_sql->bindValue(":telefone", $obj->gettelefone());
            $p_sql->bindValue(":cep", $obj->getcep());
            
            $p_sql->execute();
        } catch (Exception $ex) {
            echo "Erro: Não foi possível inserir. " .
            $ex->getMessage();
        }
    }

    function remover($id) {
        require $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/bd/Conexao.php";
        try {
            $sql = "DELETE FROM `cliente` WHERE id = :idRemovido";
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
            $sql = "SELECT * FROM `cliente` where id = :idBuscar";
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
                return new Cliente();
            }
        } catch (Exception $ex) {
            echo "Erro: Não foi possível inserir. " .
            $ex->getMessage();
        }
    }

    function listarTodos() {
        require $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/bd/Conexao.php";
        try {
            $sql = "SELECT * FROM `cliente` order by nome ASC";
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
        $obj = new Cliente();
        $obj->setId($dados->id);
        $obj->setcpf($dados->cpf);
        $obj->setNome($dados->nome);
        $obj->setRua($dados->rua);
        $obj->setBairro($dados->bairro);
        $obj->setCidade($dados->cidade);
         $obj->setNumero($dados->numero);
        $obj->setUf($dados->uf);
        $obj->setPontoReferencia($dados->PontoReferencia);
        $obj->setTelefone($dados->telefone);
        $obj->setcep($dados->cep);
        return $obj;
    }

}