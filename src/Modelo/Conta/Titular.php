<?php

namespace PHP\Banco\Modelo\Conta;

use PHP\Banco\Modelo\Pessoa;
use PHP\Banco\Modelo\CPF;
use PHP\Banco\Modelo\Endereco;

class Titular extends Pessoa
{
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco() : Endereco
    {
        return $this-> $endereco;
    }
}
