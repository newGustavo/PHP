<?php

$alou = [
    'nome'=> "Gustavo",
    'valor'=> 10000
]; 

$contasCorrentes = [
    123 => $alou,
    234 => [
        'nome'=> "Otavio",
        'valor'=> 15000
    ],
    345 => [
        'nome'=> "José",
        'valor'=> 11000
    ]
];

// sempre tentar copiar todo a estrutura da lista/array

foreach ($contasCorrentes as $id => $conta){
    echo $id . PHP_EOL;
    echo $conta['nome'] . PHP_EOL;
    echo $conta['valor'] . PHP_EOL;
    echo PHP_EOL;
} 