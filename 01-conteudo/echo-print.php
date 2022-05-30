<?php 
//TIPOS DE SAÍDA


//ECHO
echo "Hi";

$nome = "Roberto";
$sobrenome = "Teixeira";
echo $nome;

//Eu posso chamar a variável diretamente se estou usando aspas duplas
echo "<br>O nome do programador é $nome $sobrenome"; 

//Se eu utilizo aspas simples, tenho que concatenar
echo '<br>O nome do programador é ' .$nome. ' ' .$sobrenome;

//Você pode usar aspas duplas fora e dentro usar aspas simples
echo "<a href='$nome'>";

//PRINT - É mais lento que o echo
print $nome; 

?>