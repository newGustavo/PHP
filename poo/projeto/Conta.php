<?php
require 'Titular.php';
class Conta
{
    private Titular $titular;
    private float $saldoConta;
    
    // o static é um atributo que se refere a classe como um todo, nesse exemplo a gente calcula o número de instancias da classe;
    private static float $numeroDeContas = 0;
    public function __construct(Titular $titular)
    {
        $this -> titular = $titular;
        $this -> saldoConta = 0;
        Conta::$numeroDeContas++; // poderia ser self::$numeroDeContas
    }

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
            echo "Valor ou saldo invalido!" . PHP_EOL;
            return;
        }
        $this-> sacar($valor);
        $contaDestino->depositar($valor);
    }

    public function getSaldo(): string
    {
        return $this-> saldoConta;
    }
    public static function getNumeroDeContas(): float
    {
        // nesse caso, não queremos acessar a instancia e sim a classe em si. 
        // acessamos colocando o nome da classe (ou self) :: $atributo
        return  self::$numeroDeContas;
    }
    public function getNomeTitular(): string
    {
        return $this->titular->getNome();
    }
    public function getCpfTitular(): string
    {
        return $this->titular->getCpf();
    }

}