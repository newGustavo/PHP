<?php
require_once 'CPF.php';
require_once 'Endereco.php';

class Pessoa 
{
    public $nome;
    public $cpf;

    public Endereco $endereco;

    public function __construct(string $nome, CPF $cpf, Endereco $endereco)
    {
        $this-> nome = $nome;
        $this-> cpf = $cpf;
        $this-> endereco = $endereco
    }


}