<?php

$lista0 = [
    01, 02, 03, 04, 05, 06
];

$array = ['primeiro', 1 => 'segundo', 'terceiro'];

$lista1 = [
    01 => "a", 
    02 => "b", 
    03 => "c", 
    04 => "d", 
    05 => "e", 
    06 => "f"
];

$lista2 = [
    "a" => 10,
    "b" => 8,
    "c" => 7,
    "d" => 3,
    "e" => 9.5,
    "f" => 6
];

$lista3 = [
    00 => "z",
    01 => "a",
    02 => "b", 
    03 => "c", 
    04 => "d", 
    05 => "e", 
    06 => "f"
];

$lista4 = [
    "a" => 10,
    "b" => 8,
    "c" => null,
    "d" => 3,
    "e" => 9.5,
    "f" => 6
];

$var = 0;

// is_array retorna um boolean
echo "isarray(lista0): " . var_dump(is_array($lista0)) . PHP_EOL;
echo "isarray(lista1): " . is_array($lista1) . PHP_EOL;
echo "isarray(lista2): " . is_array($lista2) . PHP_EOL;
echo "isarray(var): " . var_dump(is_array($var)) . PHP_EOL;

if (is_array($lista0)){
    echo "Lista0 é um array!" . PHP_EOL;
}
if (is_array($lista1)){
    echo "Lista1 é um array!" . PHP_EOL;
}
if (is_array($lista2)){
    echo "Lista2 é um array!" . PHP_EOL;
}
if (is_array($var)){
    echo "var é um array!" . PHP_EOL;
} else {
    echo "var não é um array!" . PHP_EOL;
}

echo PHP_EOL;

// array_is_list simplesmente verifica se todos os indices são númericos
// para retornar true precisa começar em 0
echo "array_is_list(lista0): ". var_dump(array_is_list($lista0)) . PHP_EOL;
echo "array_is_list(lista1): ". var_dump(array_is_list($lista1)) . PHP_EOL;
echo "array_is_list(lista2): ". var_dump(array_is_list($lista2)) . PHP_EOL;
echo "array_is_list(lista3): ". var_dump(array_is_list($lista3)) . PHP_EOL;
echo "array_is_list(array): ". var_dump(array_is_list($array)) . PHP_EOL;

// array_key_exists('chave',  $array);
var_dump(array_key_exists('c', $lista1));
var_dump(array_key_exists('c', $lista2));
var_dump(array_key_exists('c', $lista4));

// isset faz o mesmo que o anterior, porém retorna false caso valor for null;
var_dump(isset($lista1['c']));
var_dump(isset($lista2['c']));
var_dump(isset($lista4['c']));

// in_array() verificando se existe um valor na lista

$notasAlunos = [
    "Bruno" => 8,
    "Andre" => 7,
    "Iago" => 10,
    "Allan" => 9.7,
];

echo PHP_EOL;

// var_dump(in_array('valor', $variavel))
var_dump(in_array(9.7, $notasAlunos));

// array_search busca um valor na lista e retorna o seu indice
// array_search(valor, array, strict(true or false -> verifica se é realmente igual o solicitado "==" é false e "===" é true))
var_dump(array_search(8, $notasAlunos, true));