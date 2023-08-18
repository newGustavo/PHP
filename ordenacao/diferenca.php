<?php 

$notasBimestre = [
    "A" => 10,
    "B" => 9,
    "C" => 8,
    "D" => 7,
    "E" => 6,
    "F" => 4,
    "G" => 5,
];

$notasBimestre2 = [
    // "A" => 10,
    "H" => 9,
    "I" => 8,
    "D" => 7,
];

$notasBimestre3 = [
    "K" => 3,
    "L" => 2,
    "C" => 6,
    "D" => 7,
    // "E" => 5,
    "F" => 4,
];

// array_diff(var1, var2, varN) -> essa função vai retornar a diferença nos valores
// levando em consideração apenas nos valores do primeiro array, ou seja, nessa função
// você não precisa levar em consideração a chave dos valores. É necessario levar em consideração
// que apenas os dados da var1 vão ser pesquisados nas outras variaveis, ou seja, ela é a base.
echo PHP_EOL;
echo "Array_diff apenas entre os dois primeiros Arrays: " . PHP_EOL;
var_dump(array_diff($notasBimestre, $notasBimestre2));

echo PHP_EOL;
echo "Array_diff apenas entre os 3 Arrays: " . PHP_EOL;
var_dump(array_diff($notasBimestre, $notasBimestre2, $notasBimestre3));

// levando em consideração que ele verifica apenas os valores, existe a função 
// array_diff_key() que considera apenas as chaves dos arrays
echo PHP_EOL;
echo "Array_diff_key: " . PHP_EOL;
var_dump(array_diff_key($notasBimestre, $notasBimestre2));


// Mostra a diferença entre o dado completo (chave e valor)

$lista0 = [
    "A" => 1,
    "B" => 2,
    "C" => 3,
];
$lista1 = [
    "A" => 1,
    "B" => 3,
    "D" => 2,
];

echo PHP_EOL;
echo "Array_diff_assoc: " . PHP_EOL;
var_dump(array_diff_assoc($lista0, $lista1));


?>

