<?php
include_once  __DIR__. './Conexao.php';
include_once  __DIR__. './Usuario.php';
include_once  __DIR__. './UsuarioDAO.php';

$daoUsuario=new UsuarioDAO();

//$daoUsuario->insere(new Usuario("João", "Jao@gmail.com", "jao"));
//echo var_dump($daoUsuario->busca_usr_email("Jao@gmail.com"));
echo"<pre>";
print_r($daoUsuario->listar_todos());
echo"<pre>";

echo "teste autentificação";
echo var_dump($daoUsuario->autenticar("Jao@gmail.com", "jao"));
echo var_dump($daoUsuario->autenticar("Jao@gmailcom", "jao"));

?>