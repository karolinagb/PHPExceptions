<?php

//É uma exceção do domínio da minha aplicação
class SaldoInsuficienteException extends DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual)
    {
        $mensagem = "Você tentou sacar $valorSaque, mas tem apenas $saldoAtual em conta.";
        parent::__construct($mensagem);
    }
}