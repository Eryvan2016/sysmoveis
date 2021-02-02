<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Listar Usuário</title>
        <script>
            function remover(id) {
                window.location.assign("http://<?php echo $_SERVER['HTTP_HOST'] ?>/sysmoveis/removerUsuario.php?id=" + id);
            }
            function editar(id) {
                window.location.assign("http://<?php echo $_SERVER['HTTP_HOST'] ?>/sysmoveis/addUsuario.php?id=" + id);
            }
        </script>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Login</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
            <?php
            require $_SERVER['DOCUMENT_ROOT'] . "/sysconst/dao/UsuarioDAO.php";
            $dao = new UsuarioDAO();
            $lista = $dao->listarTodos();
            foreach ($lista as $u) {
                echo "<tr><td>" . $u->getId() . "</td><td>" . $u->getNome() . "</td><td>" .
                $u->getLogin() . "</td><td>" . $u->getEmail() . "</td>"
                . "<td><input type='button' value='Remover' onclick='remover(" . $u->getId() . ")'/>"
                . "<input type='button' value='Editar' onclick='editar(" . $u->getId() . ")'//></td></tr>";
            }
            ?>
        </table>

    </body>
</html>