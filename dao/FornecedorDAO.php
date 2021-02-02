<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/vo/Fornecedor.php";

class fornecedorDAO {

    function salvar($obj) {
        require $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/bd/Conexao.php";
        try {
            $sql = "insert into produto (cnpj,nome,tipo,rua,bairro,numero,cidade,telefone,email,uf)
                    values (:cnpj,:nome,:tipo,:rua,:bairro,:numero,:cidade,:telefone,:email,:uf)";
            $p_sql = $dbh->prepare($sql);
            $p_sql->bindValue(":cnpj", $obj->getcnpj());
            $p_sql->bindValue(":nome", $obj->getnome());
            $p_sql->bindValue(":tipo", $obj->gettipo());
            $p_sql->bindValue(":rua", $obj->getrua());
            $p_sql->bindValue(":bairro", $obj->getbairro());
            $p_sql->bindValue(":numero", $obj->getnumero());
            $p_sql->bindValue(":cidade", $obj->getcidade());
            $p_sql->bindValue(":telefone", $obj->gettelefone());
            $p_sql->bindValue(":email", $obj->getemail());
            $p_sql->bindValue(":uf", $obj->getuf());
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
            $sql = "UPDATE produto SET cnpj=:cnpj,nome=:nome,rua=:rua,tipo=:tipo, bairro=:bairro, numero=:numero, cidade=:cidade, telefone=:telefone,email=:email,uf=:uf, WHERE id = :id";
            $p_sql = $dbh->prepare($sql);
            $p_sql->bindValue(":cnpj", $obj->getcnpj());
            $p_sql->bindValue(":nome", $obj->getnome());
            $p_sql->bindValue(":tipo", $obj->gettipo());
            $p_sql->bindValue(":rua", $obj->getrua());
            $p_sql->bindValue(":bairro", $obj->getbairro());
            $p_sql->bindValue(":numero", $obj->getnumero());
            $p_sql->bindValue(":cidade", $obj->getcidade());
            $p_sql->bindValue(":telefone", $obj->gettelefone());
            $p_sql->bindValue(":email", $obj->getemail());
            $p_sql->bindValue(":uf", $obj->getuf());
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
        require $_SERVER['DOCUMENT_ROOT'] . "/sysconst/bd/Conexao.php";
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
        require $_SERVER['DOCUMENT_ROOT'] . "/sysconst/bd/Conexao.php";
        try {
            $sql = "SELECT * FROM `produto` order by cnpj ASC";
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
        $obj->setId($dados->id);
        $obj->setDescricao($dados->cnpj);
        $obj->setCodigo($dados->nome);
        $obj->setPrecoCompra($dados->tipo);
        $obj->setPrecoVenda($dados->rua);
        $obj->setbairro($dados->bairro);
        $obj->setnumero($dados->numero);
        $obj->setcidade($dados->cidade);
        $obj->setcidade($dados->cidade);
        $obj->settelefone($dados->telefone);
        $obj->setuf($dados->uf);
        return $obj;
    }

}