<?php
session_start();


if (isset($_SESSION['usr'])){
    header("Location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="rota.php?rota=logout">LOGOUT</a>
    <a href="rota.php?rota=cadastrarUsuario=cadastro">CADASTRO USUARIO</a>
    <nav>
        <h2>Lista de usuarios</h2>
    </nav>
    <main>
        <?php require "listarUsuarios.php" ?>
</main>
    
</body>
</html>