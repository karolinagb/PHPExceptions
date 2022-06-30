<?php

//um arquivo php tem duas principais formas de instrução:

//instruções de declaração de símbolos = criação de classes, funções
function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

    //Temos que tratar as exceções para que o php continue a execução do programa
    try{
        funcao2();
    }
    //catch = pegar de pegar o erro ou exception
    // catch(RuntimeException $erro){
    //     echo "Na função 1 resolvi o problema da função 2" . PHP_EOL;
    // }
    // catch(DivisionByZeroError $erro){
    //     echo "Erro ao dividir um número por 0" . PHP_EOL;
    // }

    //multi catch ou pegar vários problemas de uma vez:
    //throwable = pega erro e exceção - Podemos usar quando temos situações genericas
    //Error = pega erros  - é bom especificar qual é para eu entender esse erro melhor
    //Exception = pega exceções - é bom especificar qual é para eu entender esse erro melhor
    catch(Throwable $problema){
        echo $problema->getMessage() . PHP_EOL;
        echo $problema->getLine() . PHP_EOL;
        //pode pegar como array ou formato como string
        echo $problema->getTraceAsString() . PHP_EOL;
        echo "Erro" . PHP_EOL;

        //posso tratar a execao mas relançar ela para a main resolver tb
        throw new RuntimeException(
            'Exceção foi tratada, mas pega aí', 
            $problema->getCode(),
            //Qual foi a problema anterior
            $problema
        );
    }

    //Fatal erro = eror fatal é quando acontece uma exceção que ninguem sabe lidar e isso interrompe a execução do programa
    //É comum dizermos que matamos esse processo

    //Quero tirar uma foto de como está a pilha de execução nessa linha
    //debug_backtrace() - trilha da pilha que foi executado ate aq
    // var_dump(debug_backtrace());
    //Alternativa ao var_dump:
    // print_r(debug_backtrace());

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    
    //divide tratando os numeros como inteiros
     $divisao = intdiv(5, 0);   //DivisionByZeroError

    //Criando array com tamanho fixo no php
    // $arrayFixo = new SplFixedArray(2);

    // $arrayFixo[3] = 'Valor';


    // for ($i = 1; $i <= 5; $i++) {
    //     echo $i . PHP_EOL;
    // }

    //terceiro parametro = posso lançar outra excecao
    $exception = new RuntimeException('Teste', 1);
    throw $exception;

    echo 'Saindo da função 2' . PHP_EOL;
}

try{
    //instruções de execução = vai ser executado quando executarmos o arquivo
    echo 'Iniciando o programa principal' . PHP_EOL;
    funcao1();
    echo 'Finalizando o programa principal' . PHP_EOL;
}
catch(RuntimeException $problema){
    echo $problema->getMessage() . PHP_EOL;
    echo $problema->getCode() . PHP_EOL;
    //Pegar exceção anterior a essa atual que foi mandada pra main
    echo $problema->getPrevious() . PHP_EOL;
}

