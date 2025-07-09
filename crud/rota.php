<?php
include_once  __DIR__. './modelo/Conexao.php';
include_once  __DIR__. './modelo/Usuario.php';
include_once  __DIR__. './modelo/UsuarioDAO.php';
include_once  __DIR__. './controlador/AutController.php';
session_start();



if(isset($_GET['rota'])){
    $rota=$_GET['rota'];
} else {
    $rota= "login";
}

switch($rota){
    case 'login':
        
        if(isset($_SESSION['usr'])){
            header("Location:home.php");
        }
        require "login.php";
        break;
    case 'autenticacao':
        $auth=new AutController();
        $auth->login();
        break;
    case 'home':
        header("Location:home.php");
        break;
    case 'logout':
        header("Location:rota.php");
        break;
    case 'cadastro':
        $cc=new cadastroController();
        $cc->cadastrar();
        header("Location:cadastrarUsuarios.php");
        break;
    default:
        echo "Rota desconhecida";
}

?>