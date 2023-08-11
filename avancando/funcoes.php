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

$listaDados = [$dado, $dado0, $dado1, $dado2, $dado3];
function sacar($nome, $valor){
    global $listaDados;

    for ( $i = 0 ; $i < count($listaDados) ; $i++){
        if ($listaDados[$i]['nome'] == $nome){
            if (is_numeric($valor)) {
                if ($listaDados[$i]['valor'] > $valor){
                    $listaDados[$i]['valor'] -= $valor;
                    echo "Transação Efetuada! Seu novo valor é de " . $listaDados[$i]['valor']  . "." . PHP_EOL;
                } else {
                    echo "Saldo Insuficiente!" . PHP_EOL;
                }
            } else {
                echo "Valor Invalido!" . PHP_EOL;
            }
        }
    }
}

function depositar($nome, $valor){
    global $listaDados;

    for ( $i = 0 ; $i < count($listaDados) ; $i++){
        if ($listaDados[$i]['nome'] == $nome){
            if (is_numeric($valor) && $valor > 0){
                $listaDados[$i]['valor'] += $valor;
                echo "Transação Efetuada! Seu novo valor é de " . $listaDados[$i]['valor'] . "." . PHP_EOL;
            } else {
                echo "Falha na execução! Seu saldo é de: " . $listaDados[$i]['valor'] . "." . PHP_EOL;
            }
        }
    }
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