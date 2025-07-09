<?php

include_once  __DIR__. './../modelo/Conexao.php';
include_once  __DIR__. './../modelo/Usuario.php';
include_once  __DIR__. './../modelo/UsuarioDAO.php';

class cadastroController{

    public function cadastrar(){
        $dao=new UsuarioDAO();

        if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])){
            $nome=$_POST['nome'];
            $email=$_POST['email'];
            $senha=$_POST['senha'];
            $usr= new Usuario($nome, $email, $senha);
            $usr=$dao->insere($usr);
            if(!isset($usr)){
                $_SESSION['usr']=$usr->id;
                header("Location:rota.php?rota=login");
            } else {
                header("Location:rota.php");
            }
        } else {
            header("Location:rota.php");
        }
    }
}

?>