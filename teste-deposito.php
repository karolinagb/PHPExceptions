<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente
(
    new Titular(new CPF('123.456.789-99'), 'Karolina Bento', new Endereco('A', 'B', 'C', 'D'))
);

try{
    $contaCorrente->deposita(-100);
}
catch(InvalidArgumentException $exception){
    echo "Valor a depositar precisa ser positivo";
}