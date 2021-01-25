  
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/dao/UsuarioDAO.php";
        $dao = new UsuarioDAO();
        $dao->remover($_GET['id']);
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/sysmoveis/listarUsuario.php');
        ?>
    </body>
</html>