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

$newDados = [
    031 => [
        'nome' => "Gustavo",
        'saldo' => 9999,
    ],
    866 => [
        'nome' => "Raquel",
        'saldo' => 9999,
    ],
    217 => [
        'nome' => "Ana",
        'saldo' => 9999,
    ],
    572 => [
        'nome' => "Val",
        'saldo' => 9999,
    ],
    252 => $dado10
];

// for
for ($lista = 0 ; $lista < count($listaContas) ; $lista++) {
    echo $listaContas[$lista]['nome'] . PHP_EOL;
}

// foreach
foreach ($listaContas as $lista) {
    echo $lista['nome'] . PHP_EOL;
}

// Listas com indice
echo PHP_EOL;
echo "Listas com indices" . PHP_EOL;

$contasCorrentes = [
    123 => $conta,
    234 => $conta0,
    345 => $conta1,
    456 => $conta2
];

// foreach
foreach ($contasCorrentes as $indice => $mostrar){
    echo "O índice é $indice, o nome é {$mostrar['nome']} e o valor é  {$mostrar['valor']}" . PHP_EOL; 
}

echo PHP_EOL;
echo "Break Row";
echo PHP_EOL;
foreach ($newDados as $ind => $dados) {
    // list('nome' => $nome, 'saldo' => $saldo) = $dados;
    ['nome' => $nome, 'saldo' => $saldo] = $dados; // está é a maneira mais simplificada de se fazer;

    echo "O índice é {$ind} o nome é {$nome} e o valor é {$saldo}." . PHP_EOL; 
}

// removendo elementos de uma lista.
echo PHP_EOL;
echo "Antes do 'unset()'" . PHP_EOL;
foreach($newDados as $ind => $dados) {
    echo "O índice é {$ind} o nome é {$nome} e o valor é {$saldo}." . PHP_EOL; 
}
echo PHP_EOL;
unset($newDados[031]);
echo "Depois do 'unset()'" . PHP_EOL;
foreach($newDados as $ind => $dados) {
    echo "O índice é {$ind} o nome é {$nome} e o valor é {$saldo}." . PHP_EOL; 
}