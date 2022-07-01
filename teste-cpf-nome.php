<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

try{
    $cpf = new CPF('123');
}
catch(InvalidArgumentException){
    echo "CPF Inválido!" . PHP_EOL;
    echo "Digite um cpf como do exemplo: 111.222.333-99" . PHP_EOL;
}

try{
    $pessoa = new Titular(new CPF('123.456.789-99'), 'Kar', new Endereco('A', 'B', 'C', 'D'));
}
catch(DomainException $e){
    echo $e->getMessage() . PHP_EOL;
    // echo "Nome precisa ter pelo menos 5 caracteres" . PHP_EOL;
}
finally{
    echo "Ainda assim: Olá :)";
}