<?php 

$dados = [
    10, 9, 8, 7, 6, 5
];


// ordenação sort()

$notasOrdenadas = $dados; 
sort($notasOrdenadas);

echo "Desordenadas: ";
var_dump($dados);
foreach($dados as $dado){
    echo $dado . PHP_EOL;
}

echo "Ordenadas: ";
var_dump($notasOrdenadas);
foreach($notasOrdenadas as $dado){
    echo $dado . PHP_EOL;
}

// usort() recebe 2 variaveis por parametro, a primeira o que deve ser ordenado e a 
// segunda tem que ser uma função que retorna um número inteiro, esse inteiro deve ser negativo
// se o primeiro item precisar vir antes, retorna um positivo se o segundo precisar vir primeiro e 
// 0 se não precisar mudar nada

$newDados = [
    ["nome" => "Augusto",
    "nota" => "10"
    ],
    ["nome" => "Bianca",
    "nota" => "9"
    ],
    ["nome" => "Carlos",
    "nota" => "8"
    ],
    ["nome" => "Daniel",
    "nota" => "10"
    ],
    ["nome" => "Ezequiel",
    "nota" => "9.5"
    ],
];

function ordenaNumero (array $var1, array $var2): int
{
    if ($var1['nota'] > $var2['nota']){
        return -1;
    } else if ($var1['nota'] < $var2['nota']){
        return 1;
    } else {
        return 0;
    }
}
echo "Break row" . PHP_EOL;

echo "Antes do usort()" . PHP_EOL;
var_dump($newDados);

usort($newDados, 'ordenaNumero');

echo "Depois do usort()" . PHP_EOL;
var_dump($newDados);