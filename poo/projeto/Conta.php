<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldoConta = 0;

    public function sacar(float $valor) 
    {
        if ($valor > $this-> saldoConta){
            echo "Saldo insuficiente!" . PHP_EOL;
            return;
        }
        $this -> saldoConta -= $valor;  
        
    }

    public function depositar(float $valor)
    {
        if ($valor < 0){
            echo "O valor do deposito precisa ser maior que 0!" . PHP_EOL;
            return;
        }
        $this->saldoConta += $valor;
    }
    public function transferir(float $valor, Conta $contaDestino)
    {
        if ($this-> saldoConta < 0){
            echo "Saldo insuficiente!" . PHP_EOL;
            return;
        }
        $this-> sacar($valor);
        $contaDestino->depositar($valor);
    }
}