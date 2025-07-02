<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuario</title>
</head>
<body>
    <form action="Usuarios_Listar.php" method="GET">
    <h2>Cadastro</h2>
    
    <label for="nome"> Nome </label>
    <input id="nome" type="string" name="nome" value="<?php echo isset($_GET["nome"])? $_GET ["nome"] : ""; ?>" >

    <label for="email"> Email </label>
    <input id="email" type="string" name="email" value="<?php echo isset($_GET["email"])? $_GET ["email"] : ""; ?>" >
    
    <label for="senha"> Senha </label>
    <input id="senha" type="string" name="senha" value="<?php echo isset($_GET["senha"])? $_GET ["senha"] : ""; ?>" >

    <input type = "submit">

</form>
    
</body>
</html>