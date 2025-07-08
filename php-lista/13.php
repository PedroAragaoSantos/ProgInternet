<?php
session_start();

// Se já estiver logado, redireciona para a página principal
if (isset($_SESSION['usuario'])) {
    header('Location: principal.php');
    exit;
}

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Usuário e senha fixos
    if ($usuario === 'admin' && $senha === '1234') {
        $_SESSION['usuario'] = $usuario;
        header('Location: principal.php');
        exit;
    } else {
        $erro = 'Usuário ou senha incorretos.';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if ($erro): ?>
        <p style="color:red;"><?= htmlspecialchars($erro) ?></p>
    <?php endif; ?>
    <form method="post" action="">
        <label for="usuario">Usuário:</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>

<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Página Principal</title>
</head>
<body>
    <h1>Bem-vindo, <?= htmlspecialchars($_SESSION['usuario']) ?>!</h1>
    <p>Você está logado.</p>

    <form method="post" action="logout.php">
        <button type="submit">Sair</button>
    </form>
</body>
</html>

<?php
session_start();
session_destroy();
header('Location: login.php');
exit;
?>
