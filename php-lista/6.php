<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Verificador Par ou Ímpar</title>
</head>
<body>
    <h1>Verificar se o número é Par ou Ímpar</h1>

    <form method="post" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST['numero']);

        // Verifica se o número é par ou ímpar
        if ($numero % 2 == 0) {
            $resultado = "Par";
        } else {
            $resultado = "Ímpar";
        }

        echo "<p>Você digitou o número <strong>$numero</strong>.</p>";
        echo "<p>O número é <strong>$resultado</strong>.</p>";
    }
    ?>
</body>
</html>
