<?php 

$alunos2023 = [
    'Vinicius',
    'Arthur',
    'João',
    'Alfredo',
    'Roberto',
];

$novosAlunos = [
    'José',
    'Luiz',
    'Bianca',
];

// array_merge(array1, array2) -> vai juntar dois arrays e vai colocar o array2 no final do array1 mexendo com os indices
echo PHP_EOL;
echo "Usando o array_merge(array1, array2)" . PHP_EOL;
var_dump(array_merge($alunos2023, $novosAlunos));

// no caso do "+" ele ignora os itens do segundo array que já tem indice no primero array, ou seja, se existir um item com
// indice 0 no primeiro array ele ignorará o item de indice 0 no segundo array
echo PHP_EOL;
echo "Usando o +" . PHP_EOL;
var_dump($alunos2023 + $novosAlunos);

// outra forma é usar a sintaxe [...$alunos2023, ...$novosAlunos] que funciona como o array_merge
// porém tem uma vantagem que é possivel adicionar elementos no meio como por exemplo
// [...$alunos2023, 'Josias', ...$novosAlunos] é chamado de "unpacking"

echo PHP_EOL;
echo 'Usando [...$alunos2023, "Josias", ...$novosAlunos]' . PHP_EOL;
$novoArray = [...$alunos2023, "Josias", ...$novosAlunos];
var_dump($novoArray);

// Adicionando elementos
echo PHP_EOL;
echo 'Adicionando elementos via push: array_push(array, elemento, elemento)' . PHP_EOL;

echo "Antes: ". PHP_EOL;
var_dump($alunos2023);

array_push($alunos2023, "Bob", "Charlie");

echo 'Depois: array_push($alunos2023, "Bob", "Charlie")'. PHP_EOL;
var_dump($alunos2023);

// Outra forma
echo PHP_EOL;
echo 'Outra forma é simplesmente $alunos2023[] = "Carlos"' . PHP_EOL;
$alunos2023[] = "Carlos";
var_dump($alunos2023);

// Inserindo elementos no inicio da lista
echo PHP_EOL;
echo 'Para inserir elementos no inicio basta utilizar o array_unshift($alunos2023, "Mari", "Rafa")' . PHP_EOL;
echo 'Antes do array_unshift(): ' . PHP_EOL;
var_dump($alunos2023);

echo 'Depois do array_unshift($alunos2023, "Mari", "Rafa"): ' . PHP_EOL;
array_unshift($alunos2023, "Mari", "Rafa");
var_dump($alunos2023);

// Removendo elementos do inicio do array 
echo "Antes do array_shift(): " . PHP_EOL;
var_dump($alunos2023);

array_shift($alunos2023);

echo "Depois do array_shift(): " . PHP_EOL;
var_dump($alunos2023);

// Removendo elementos do final do array 
echo "Antes do array_pop(): " . PHP_EOL;
var_dump($alunos2023);

array_pop($alunos2023);

echo "Depois do array_pop(): " . PHP_EOL;
var_dump($alunos2023);




?>