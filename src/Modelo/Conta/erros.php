<?php

//Informar quais erros quero reportar
// ini_set('error_reporting', E_ALL);

//Posso usar a seguinte função:
error_reporting(E_ALL);


//ativar log de erros:
ini_set('log_errors', 1);

//exibir ou nao exibir (0 ou 1) todos os erros:
ini_set('display_errors', 1);

//arquivo onde vai salvar os logs:
ini_set('error_log', 'caminhoarquivo');