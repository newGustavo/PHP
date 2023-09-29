<?php
require_once 'Conta.php';
require_once 'Titular.php';

$titular0 = new Titular('Gustavo', '031.866.572-70');
$conta0 = new Conta($titular0);
$conta1 = new Conta(new Titular('Zuleide', '217.252.682-72'));

echo "Saldo: {$conta0->getSaldo()}" . PHP_EOL;
echo "Saldo: {$conta1->getSaldo()}" . PHP_EOL;

$conta0->depositar(3000);

$conta0->transferir(1500, $conta1);

$conta1->sacar(100);
$conta1->depositar(100);

echo "Saldo: {$conta0->getSaldo()}" . PHP_EOL;
echo "Saldo: {$conta1->getSaldo()}" . PHP_EOL;

echo PHP_EOL;
echo "Conta0: Nome: {$conta0->getNomeTitular()}, CPF: {$conta0->getCpfTitular()}" . PHP_EOL;
echo "Saldo: {$conta0->getSaldo()}" . PHP_EOL;
echo 'breakrow' . PHP_EOL;
echo PHP_EOL;
echo "Conta1: Nome: {$conta1->getNomeTitular()}, CPF: {$conta1->getCpfTitular()}" . PHP_EOL;
echo "Saldo: {$conta1->getSaldo()}" . PHP_EOL;
echo 'breakrow' . PHP_EOL;
echo PHP_EOL;
echo Conta::getNumeroDeContas();