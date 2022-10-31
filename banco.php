<?php

require_once 'src/Modelo/Conta/Conta.php';
require_once 'src/Modelo/Endereco.php';
require_once 'src/Modelo/Pessoa.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/CPF.php';

use PHP\Banco\Modelo\Conta\Titular;
use PHP\Banco\Modelo\Conta\Conta;
use PHP\Banco\Modelo\CPF;
use PHP\Banco\Modelo\Endereco;


$endereco = new Endereco('Londrina', 'Aurora', 'Av Jose Gabriel de Oliveira', '915');
$enzo = new Titular(new CPF('123.456.789-10'), 'Enzo Seehagen', $endereco);
$primeiraConta = new Conta($enzo);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $endereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
