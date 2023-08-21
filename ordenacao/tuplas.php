<?php

// revendo o list()
// uma forma de pegar dados de um array é:

$dados = [
    'Gustavo',
    22,
    2000,
];

$dados1 = [
    "nome" => 'Gustavo',
    "idade" => 22,
    "anoNascimento" => 2000,
];

// echo "Lista 1: " . PHP_EOL;
// list($nome, $idade, $anonasc) = $dados;
// var_dump($nome, $idade, $anonasc);

echo "Lista 2: " . PHP_EOL;
list("nome" => $nome1, "idade" =>  $idade1, "anoNascimento" => $anonasc1) = $dados1;
var_dump($nome1, $idade1, $anonasc1);



// compact e extract

// extract -> faz a mesma coisa que o list dentro de um array
// ele cria variaveis com o array
extract($dados1);
var_dump($nome, $idade, $anoNascimento);


// comapact -> faz o inver, pega varias variaveis e retorna um array

$nome2 = "Valdei";
$nome21 = "Carol";
$nome1 = "Ana";

$novosNomes = compact('nome1', 'nome2', "nome21");
var_dump($novosNomes);
?>;