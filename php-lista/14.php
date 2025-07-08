CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL
);


<?php
// Configurações do banco de dados - altere conforme seu ambiente
$host = "localhost";
$user = "seu_usuario";
$pass = "sua_senha";
$dbname = "seu_banco";

// Criar conexão
$conn = new mysqli($host, $user, $pass, $dbname);

// Checar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber dados do formulário
    $nome = $conn->real_escape_string($_POST['nome']);
    $email = $conn->real_escape_string($_POST['email']);
    $telefone = $conn->real_escape_string($_POST['telefone']);

    // Montar e executar a query de inserção
    $sql = "INSERT INTO usuarios (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

    if ($conn->query($sql) === TRUE) {
        $msg = "<p style='color:green;'>Usuário inserido com sucesso!</p>";
    } else {
        $msg = "<p style='color:red;'>Erro: " . $conn->error . "</p>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Inserir Usuário</title>
</head>
<body>
    <h1>Inserir Usuário</h1>
    
    <?= $msg ?>

    <form method="post" action="">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="text" id="telefone" name="telefone" required><br><br>

        <button type="submit">Inserir</button>
    </form>
</body>
</html>
