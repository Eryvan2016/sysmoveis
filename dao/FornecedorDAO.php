<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/vo/Fornecedor.php";

class fornecedorDAO {

    function salvar($obj) {
        require $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/bd/Conexao.php";
        try {
            $sql = "insert into fornecedor (cnpj,nome,tipo,rua,bairro,numero,cidade,telefone,email,uf)
                    values (:cnpj,:nome,:tipo,:rua,:bairro,:numero,:cidade,:telefone,:email,:uf)";
            $p_sql = $dbh->prepare($sql);
            $p_sql->bindValue(":cnpj", $obj->getCnpj());
            $p_sql->bindValue(":nome", $obj->getNome());
            $p_sql->bindValue(":tipo", $obj->getTipo());
            $p_sql->bindValue(":rua", $obj->getRua());
            $p_sql->bindValue(":bairro", $obj->getbairro());
            $p_sql->bindValue(":numero", $obj->getNumero());
            $p_sql->bindValue(":cidade", $obj->getCidade());
            $p_sql->bindValue(":telefone", $obj->getTelefone());
            $p_sql->bindValue(":email", $obj->getEmail());
            $p_sql->bindValue(":uf", $obj->getUf());
            $p_sql->execute();
            return $dbh->lastInsertId();
        } catch (Exception $ex) {
            echo "Erro: Não foi possível inserir. " .
            $ex->getMessage();
        }
    }

    function atualizar($obj) {
        require $_SERVER['DOCUMENT_ROOT'] . "/sysconst/bd/Conexao.php";
        try {
            $sql = "UPDATE fornecedor SET cnpj=:cnpj,nome=:nome,rua=:rua,tipo=:tipo, bairro=:bairro, numero=:numero, cidade=:cidade, telefone=:telefone,email=:email,uf=:uf WHERE id = :id";
            $p_sql = $dbh->prepare($sql);
            $p_sql->bindValue(":cnpj", $obj->getCnpj());
            $p_sql->bindValue(":nome", $obj->getNome());
            $p_sql->bindValue(":tipo", $obj->getTipo());
            $p_sql->bindValue(":rua", $obj->getRua());
            $p_sql->bindValue(":bairro", $obj->getBairro());
            $p_sql->bindValue(":numero", $obj->getNumero());
            $p_sql->bindValue(":cidade", $obj->getCidade());
            $p_sql->bindValue(":telefone", $obj->getTelefone());
            $p_sql->bindValue(":email", $obj->getEmail());
            $p_sql->bindValue(":uf", $obj->getUf());
            $p_sql->bindValue(":id", $obj->getId());
            $p_sql->execute();
        } catch (Exception $ex) {
            echo "Erro: Não foi possível inserir. " .
            $ex->getMessage();
        }
    }

    function remover($id) {
        require $_SERVER['DOCUMENT_ROOT'] . "/sysconst/bd/Conexao.php";
        try {
            $sql = "DELETE FROM `fornecedor` WHERE id = :idRemovido";
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
        require $_SERVER['DOCUMENT_ROOT'] . "/sysconst/bd/Conexao.php";
        try {
            $sql = "SELECT * FROM `fornecedor` where id = :idBuscar";
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
                return new Fornecedor();
            }
        } catch (Exception $ex) {
            echo "Erro: Não foi possível inserir. " .
            $ex->getMessage();
        }
    }

    function listarTodos() {
        require $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/bd/Conexao.php";
        try {
            $sql = "SELECT * FROM `fornecedor` order by cnpj ASC";
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
        $obj = new Fornecedor();
        $obj->setId($dados->id);
        $obj->setCnpj($dados->cnpj);
        $obj->setNome($dados->nome);
        $obj->setTipo($dados->tipo);
        $obj->setRua($dados->rua);
        $obj->setBairro($dados->bairro);
        $obj->setNumero($dados->numero);
        $obj->setCidade($dados->cidade);
        $obj->setTelefone($dados->telefone);
        $obj->setUf($dados->uf);
        $obj->setEmail($dados->email);
        return $obj;
    }

}