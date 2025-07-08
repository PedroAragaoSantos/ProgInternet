<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Intervalo com Span e CSS</title>
    <style>
        .numero-inicio {
            color: blue;
            font-weight: bold;
        }
        .numero-fim {
            color: green;
            font-style: italic;
        }
    </style>
</head>
<body>
    <h1>Informe um intervalo</h1>

    <form method="post" action="">
        <label for="inicio">Número inicial:</label>
        <input type="number" id="inicio" name="inicio" required>
        <br><br>
        <label for="fim">Número final:</label>
        <input type="number" id="fim" name="fim" required>
        <br><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inicio = intval($_POST['inicio']);
        $fim = intval($_POST['fim']);

        echo "<p>Intervalo informado:</p>";
        echo "<span class='numero-inicio'>$inicio</span> até <span class='numero-fim'>$fim</span>";
    }
    ?>
</body>
</html>
