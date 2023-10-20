<?php
namespace PHP\POO\Modelo\Conta;
use PHP\POO\Modelo\CPF;
use PHP\POO\Modelo\Endereco;
use PHP\POO\Modelo\Pessoa;

class Titular extends Pessoa
{
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}
