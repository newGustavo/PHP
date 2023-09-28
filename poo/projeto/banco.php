<?php
require 'Conta.php';

$contaUm = new Conta();
$contaUm -> sacar(100);
$contaUm -> depositar(-10);
$contaUm -> depositar(1010);

$contaDois = new Conta();

$contaUm -> transferir(100, $contaDois);
$contaUm->transferir(100, $contaDois);

var_dump($contaUm);
var_dump($contaDois);