<?php
// lista simples de notas
$notas = [10, 8.8, 9.0, 10, 7.5, 9.5, 10.0, 8.7];

//var_dump -> mostra de forma detalhada os elementos da lista
echo "Antes do sort(): ". PHP_EOL;
var_dump($notas);

sort($notas);

echo "Depois do sort():" . PHP_EOL;
var_dump($notas);


rsort($notas);

echo "Depois do rsort():" . PHP_EOL;
var_dump($notas);

$newNotas = [
    "João" => 10,
    "Maria" => 8.9,
    "Patati" => 7.9,
    "Patata" => 9.5,
];
// a função arsort serve para manter os indices que foram informados

echo PHP_EOL;
var_dump($newNotas);





// continua com o indice associated
echo PHP_EOL;
echo "Usando apenas o asort" . PHP_EOL;
echo PHP_EOL;
asort($newNotas);
var_dump($newNotas);

// continua com o indice associated, mas reverse
echo PHP_EOL;
echo "Depois do arsort" . PHP_EOL;
echo PHP_EOL;
arsort($newNotas);
var_dump($newNotas);

// ksort é pela key(chave)
echo PHP_EOL;
echo "Pela chave passada (ksort): " . PHP_EOL;
echo PHP_EOL;
ksort($newNotas);
var_dump($newNotas);

// ksort é pela key reverse(chave)
echo PHP_EOL;
echo "Pela chave passada reverse (krsort): " . PHP_EOL;
echo PHP_EOL;
krsort($newNotas);
var_dump($newNotas);

echo PHP_EOL;
echo "Usando apenas o sort" . PHP_EOL;
echo PHP_EOL;
sort($newNotas);
var_dump($newNotas);

// Vale ressaltar que existe tambem o uksort(<array>, <funcao>) que serve para ordernar de acordo com a função que for passada


$alunoNotas = [
    [
        'aluno' => "Gustavo",
        'nota' => 9.8
    ],
    [
        'aluno' => "Raquel",
        'nota' => 9.3
    ],
    [
        'aluno' => "Ana",
        'nota' => 9.5
    ],
    [
        'aluno' => "Val",
        'nota' => 7.5
    ],
    [
        'aluno' => "Carol",
        'nota' => 8.2
    ],
];

// usort recebe dois parametros, uma lista pra ser ordenada e uma função
// essa função vai pegar dois elementos por vez e comparar quem deve ficar na frente
// e retornar um numero inteiro negativo se ele tiver que ficar na ordem que está
// positivo se tiver que alterar a ordem e zero se a função deve escolher

function ordenaNotas($dado0, $dado1): int
{
    // retorna -1 se o primeiro elemento for menor, 0 se for igual e 1 se for maior
    // neste caso o  s números serão ordenados de ordem crescente
    return $dado0['nota'] <=> $dado1['nota'];
    
    
    // if ternario
    // $valor = ($dado0['nota'] > $dado1['nota']) ? -1 : 1;
    // return $valor;
}

echo PHP_EOL;
echo "Antes do usort(): ". PHP_EOL;
foreach ($alunoNotas as $notas){
    echo "{$notas['aluno']} - {$notas['nota']}". PHP_EOL;
}

echo PHP_EOL;
echo "Depois do usort() de notas: ". PHP_EOL;
usort($alunoNotas, 'ordenaNotas');
foreach ($alunoNotas as $notas){
    echo "{$notas['aluno']} - {$notas['nota']}". PHP_EOL;
}

sort($alunoNotas);
echo PHP_EOL;
echo "Usando o sort normal ele compara a primeira chave:" . PHP_EOL;
foreach ($alunoNotas as $notas){
    echo "{$notas['aluno']} - {$notas['nota']}". PHP_EOL;
}
?>