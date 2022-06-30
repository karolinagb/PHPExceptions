<?php

//Podemos herdar de DomainException já que estamos criando
//uma classe de excecao que faz sentido no meu dominio
class MinhaExcecao extends Exception{
    public function exibeMensagem()
    {
        echo "Teste mensagem";
    }
}

try {
    throw new MinhaExcecao();
} catch (MinhaExcecao $ex) {
    $ex->exibeMensagem();
}
