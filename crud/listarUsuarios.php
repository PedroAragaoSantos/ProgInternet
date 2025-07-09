<?php
include_once  __DIR__. './modelo/Conexao.php';
include_once  __DIR__. './modelo/Usuario.php';
include_once  __DIR__. './modelo/UsuarioDAO.php';
include_once  __DIR__. './controlador/AutController.php';
session_start();

?>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
    </tr>
<?php
$dao = new UsuarioDAO();
$lista = $dao-> listar_todos();

//echo var_dump($lista);

foreach($lista as $usuario ){
    echo "<tr>";
    echo "<td>" .$usuario ->id. "</td>";
    echo "<td>" .$usuario ->nome. "</td>";
    echo "<td>" .$usuario ->email. "</td>";

}




?>
</table>