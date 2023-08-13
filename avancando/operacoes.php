<?php
// require só continua a execução se o arquivo for exportado com sucesso;
// include ele tenta importar porém se não conseguir ele continua a execução;


function sacar($nome, $valor)
{
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

function depositar($nome, $valor)
{
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

function newSacar(&$conta, $valor)
// Nesse caso a gente vai procurar a conta pelo indice
{
    $conta['saldo'] -= $valor;
}