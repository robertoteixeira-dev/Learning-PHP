<?php
/*
MANIPULAÇÃO DE STRINGS

*/

//strlen - Vai contar quantos caracteres tem 
echo strlen('Oi pessoal'); //Vai mostrar 10

echo "<br/><br/>";

$palavra = "Beleza pessoal";
echo strlen($palavra);

echo "<br/><br/>";

//str_word_count() - Vai contar quantas palavras tem
echo str_word_count($palavra);

echo "<br/><br/>";

//strrev(); - Pra colocar uma palavra detrás pra frente
echo strrev('Roberto');

echo "<br/><br/>";

//strpos() - Mostra a posição da palavra em uma string
echo strpos("Oi tudo bom", "tudo");

echo "<br/><br/>";

//str_replace() - substituir uma palavra/caracter no seu código
$palavra = "Olá mundo";
echo str_replace("mundo", "Roberto", $palavra);

$data = "25-08-2021"; //Quero mudar pra /
$data_formatada = str_replace("-","/", $data);
echo $data_formatada;





?>