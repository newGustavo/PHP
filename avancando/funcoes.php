<?php

function retornaMensagem($nome){
    echo "Olá $nome";
}

// retornaMensagem('Gustavo');

$dado = [
    "nome" => "Gustavo",
    "valor" => 20000
];
$dado0 = [
    "nome" => "Arthur",
    "valor" => 12000
];
$dado1 = [
    "nome" => "Clara",
    "valor" => 13000
];
$dado2 = [
    "nome" => "Eloa",
    "valor" => 14000
];
$dado3 = [
    "nome" => "Neto",
    "valor" => 15000
];
 require 'operacoes.php';

$listaDados = [$dado, $dado0, $dado1, $dado2, $dado3];


$dado10 = [
    "nome" => "Teste",
    "saldo" => "9999",
];

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
$valor = 500;
newSacar($newDados[866], $valor);
foreach ($newDados as $ind => $conta){
    echo "O valor do indice é {$ind}, o nome é {$conta['nome']} e o saldo é de {$conta['saldo']}" . PHP_EOL;
}


sacar('Neto', 14000);
sacar('Neto', 2000);
depositar('Neto', 4000);
depositar('Neto', 3000);
sacar('Neto', 23000);
sacar('Neto', 3000);
sacar('Neto', 'a');
depositar('Neto', '3000');
depositar('Neto', 'a');



// foreach ($listaDados as $dados) {
//     echo "Nome: " . $dados['nome'] . PHP_EOL;
//     echo "Saldo: " . $dados['valor'] . PHP_EOL;
// }