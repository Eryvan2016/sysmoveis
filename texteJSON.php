<?php
            require $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/dao/ProdutoDAO.php";
            $dao = new ProdutoDAO();
            $lista = $dao->listarTodosJSON();

$myJSON = json_encode($lista);
echo $myJSON;
?>