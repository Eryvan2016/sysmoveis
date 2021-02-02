<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        o documento root é:
        <?php
        require $_SERVER['DOCUMENT_ROOT']."/sysmoveis/vo/Usuario.php";
        require $_SERVER['DOCUMENT_ROOT']."/sysmoveis/dao/UsuarioDAO.php";
        $usuario = new Usuario();
        $usuario->setNome("Joaozinho");
        $usuario->setLogin("Jojo");
        $usuario->setSenha("afogadinhos");
        $usuario->setEmail("jojo@gmail.com");
        $dao = new UsuarioDAO();
        $dao->salvar($usuario);
        ?>
    </body>
</html>