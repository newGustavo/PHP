<?php

require_once 'Pessoa.php';
require_once 'Endereco.php';

class Funcionario extends Pessoa
{
    private $cargo;

    public function __construct(string $cargo, $nome, CPF $cpf, Endereco $endereco)
    {
        $this-> endereco = $endereco;
        $this-> cargo = $cargo;
        $this-> nome = $nome;
        $this-> cpf = $cpf;
    }
}