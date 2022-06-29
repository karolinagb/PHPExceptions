<?php

//Podemos passar anotações para a IDE
//Queremos informar que essa função lança uma exceção
//Anotations são definimos assime  com @
//throws é para informar especificamente que essa função lança uma exceção
/**
 * @throws Exception
 */
function funcaoQueLancaExcecao()
{

}

//Dessa forma com anotações a IDE informaria que esse metodo gera uma exceção. No caso do vs code nao informou
funcaoQueLancaExcecao();