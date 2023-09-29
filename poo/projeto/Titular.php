<?php
class Titular
{
    public string $nome;
    private string $cpf;

    public function __construct(string $nome, string $cpf)
    {
        if (!$this->validaNomeTitular($nome)){
            $this -> nome = $nome;
        }
        if (!$this->validaCpf($cpf)){
            $this -> cpf = $cpf;
        }
    }
    public function getNome(): string
    {
        return $this-> nome;
    }
    public function getCpf(): string
    {
        return $this-> cpf;
    }

    private function validaNomeTitular($nomeTitular){
        return strlen($nomeTitular) < 5;
    }
    private function validaCpf($cpfTitular){
        return strlen($cpfTitular) == 11;
    }
}