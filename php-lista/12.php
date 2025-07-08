<?php
function calcularArray($numeros) {
    // Soma todos os números
    $soma = array_sum($numeros);

    // Encontra o maior número
    $maior = max($numeros);

    // Encontra o menor número
    $menor = min($numeros);

    return [
        'soma' => $soma,
        'maior' => $maior,
        'menor' => $menor,
    ];
}

// Exemplo de uso:
$meuArray = [3, 7, 2, 9, 4];

$resultado = calcularArray($meuArray);

echo "Array: " . implode(", ", $meuArray) . "<br>";
echo "Soma: " . $resultado['soma'] . "<br>";
echo "Maior número: " . $resultado['maior'] . "<br>";
echo "Menor número: " . $resultado['menor'] . "<br>";
?>
