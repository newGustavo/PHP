<?php

// Declaração de arrays

$var = array(1, 2, 3, 4, 5, 6, 7);
$var1 = [10, 20, 30, 40, 50, 60, 70];

// Loops em arrays 

for ($i = 0 ; $i < 7 ; $i++){
    echo "O número do índice $i é " . $var[$i] . PHP_EOL;
}

echo "BREAK ROW" . PHP_EOL;

for ($i = 0 ; $i <= count($var1) - 1 ; $i++){
    echo "O número do índice $i é " . $var1[$i] . PHP_EOL;
}

// Contando o número de elementos

echo count($var);

// Array associativo

$novoArray  = [
    'nome' => 'Gustavo',
    'saldo' => 800
];

$novoArray1  = [
    'nome' => 'Gustavo',
    'saldo' => 800
];

$novoArray2 = [
    'nome' => 'Gustavo',
    'saldo' => 800
];

$arrayDeArrays = [$novoArray, $novoArray1, $novoArray2];

for ($i = 0 ; $i < count($arrayDeArrays); $i++){
    echo PHP_EOL;
    echo $arrayDeArrays[$i]["nome"] . PHP_EOL;
    echo $arrayDeArrays[$i]["saldo"];
}

$conta1 = [
    "nome" => "Gustavo",
    "saldo" => 10000
];
$conta2 = [
    "nome" => "Augusto",
    "saldo" => 12000
];

$meuArray = [$conta1, $conta2];

echo PHP_EOL . "Break row" . PHP_EOL;

for ($i = 0 ; $i < count($meuArray) ; $i++ ) {
    echo $meuArray[$i] . PHP_EOL;
}