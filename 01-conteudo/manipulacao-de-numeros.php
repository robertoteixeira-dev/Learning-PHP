<?php 
/*MANIPULAÇÃO DE NÚMEROS*/

$valor = 4 * 2.5;
$valor_convertido = (int) $valor; //Converte pra número inteiro
$valor_convertido = (float) $valor; //Converte pra float

$valor1 = 100;
$valor2 = 5.75;
$valor3 = "teste";

var_dump(is_int($valor1));
var_dump(is_int($valor2));
var_dump(is_int($valor3));
//Também existe o is_float e is_numeric para saber se é um número, se é inteiro


?>













