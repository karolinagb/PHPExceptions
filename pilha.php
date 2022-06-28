<?php

//um arquivo php tem duas principais formas de instrução:

//instruções de declaração de símbolos = criação de classes, funções
function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    funcao2();

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
    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    echo 'Saindo da função 2' . PHP_EOL;
}

//instruções de execução = vai ser executado quando executarmos o arquivo
echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
