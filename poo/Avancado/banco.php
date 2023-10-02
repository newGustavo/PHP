<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$endereco1 = new Endereco(cidade: 'Rio Branco', rua: 'Trav Felicidade', numero: '12', bairro: 'Quinze');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Gustavo', $endereco1);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Anabelle', $endereco1);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $endereco1));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
