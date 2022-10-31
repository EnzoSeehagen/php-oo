<?php

use PHP\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca, Titular};
use PHP\Banco\Modelo\{CPF, Endereco};


require_once 'autoload.php';

$conta01 = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Enzo Fernandes',
        new Endereco('Londrina', ' Aurora', 'Av José gabriel de Oliveira', '915')
    )
);
$conta01->deposita(500);
$conta01->saca(100);
echo $conta01->recuperaSaldo();

