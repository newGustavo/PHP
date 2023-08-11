<?php

// Listas sem indice
echo "Lista sem indice: " . PHP_EOL;

$conta = [
    'nome'=> "Gustavo",
    'valor'=> 10000
]; 

$conta0 = [
    'nome'=> "João",
    'valor'=> 18000
]; 

$conta1 = [
        'nome'=> "José",
        'valor'=> 11000
];

$conta2 = [
        'nome'=> "Otavio",
        'valor'=> 15000
];

$listaContas = [$conta, $conta0, $conta1, $conta2];

// for
for ($lista = 0 ; $lista < count($listaContas) ; $lista++) {
    echo $listaContas[$lista]['nome'] . PHP_EOL;
}

// foreach
foreach ($listaContas as $lista) {
    echo $lista['nome'] . PHP_EOL;
}

// Listas com indice
echo "Listas com indices" . PHP_EOL;

$contasCorrentes = [
    123 => $conta,
    234 => $conta0,
    345 => $conta1,
    456 => $conta2
];

// foreach
foreach ($contasCorrentes as $indice => $mostrar){
    echo "O índice é $indice, o nome é " . $mostrar['nome'] . " e o valor é " . $mostrar['valor'] . PHP_EOL; 
}