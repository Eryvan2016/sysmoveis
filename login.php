<?php
session_start();
if (isset($_SESSION['idUsuarioLogado'])){
     header('Location: http://'.$_SERVER['HTTP_HOST'].'/sysmoveis/addUsuario.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="controle/controleLogin.php" method="post">
            <?php 
            if (isset($_GET['erro'])){
                echo "<div style='color:red'>Login ou senha errados!</div>";
            }
            ?>
            <div>
                <label for="login">Login:</label>
                <input type="text" id="login" name="login" 
                       placeholder="Digite aqui o seu login"/>
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" 
                       placeholder="Digite aqui o sua senha"/>
            </div>
            <div>
                Lembrar de mim 
                <input type="checkbox" name="lembrar" />
            </div>
            <div>
                <input type="submit" value="Entrar"/>
            </div>
        </form>
    </body>
</html>