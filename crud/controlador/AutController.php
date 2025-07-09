<?php

include_once  __DIR__. './../modelo/Conexao.php';
include_once  __DIR__. './../modelo/Usuario.php';
include_once  __DIR__. './../modelo/UsuarioDAO.php';
class AutController{

    public function login(){
        $dao=new UsuarioDAO();

        if(isset($_POST['email']) && isset($_POST['senha'])){
            $login=$_POST['email'];
            $senha=$_POST['senha'];
            $usr=$dao->autenticar($email,$senha);
            if(!isset($usr)){
                $_SESSION['usr']=$usr->id;
                header("Location:rota.php?rota=home");
            } else {
                header("Location:rota.php");
            }
        } else {
            header("Location:rota.php");
        }
    }
}

?>