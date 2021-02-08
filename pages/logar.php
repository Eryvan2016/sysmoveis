<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/bd/conexao.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/sysmoveis/pages/UsuarioClass.php";
if (isset($_POST['email'])&& !empty($_POST['email']) && isset($_POST['senha'])&& !empty($_POST['senha']) ){
$u= new Usuario();

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    
    
   if( $u->login($email, $senha)==true){
       if(isset($_SESSION['idUser'])){
       header('Location: http://' . $_SERVER['HTTP_HOST'] . '/sysmoveis/pages/index.php');
       
       }
   }
   else{
       
       header('Location: http://' . $_SERVER['HTTP_HOST'] . '/sysmoveis/Login_v11/index.html');
   }
   
}
else{
    
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/sysmoveis/Login_v11/index.html');
}
 


?>