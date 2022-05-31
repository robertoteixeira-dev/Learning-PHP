<?php
$cor = "Verde";
$cor = "Azul"; 
//O echo sempre vai pegar a ultima, pois eu tecnicamente mudei o valor da variavel
//Mas se a variável estiver escrita diferente, ele entende como uma variável diferente. Exemplo: $COR
echo $cor;
//NÃO PODE INICIAR UMA VARIÁVEL COM NÚMEROS
//Também não posso colocar palavras reservadas do PHP
//Posso iniciar com _
$_exemplo = "teste";

$x = 10;
$y = 5;
echo $x + $y;

function teste(){
    //Ele não vai reconhecer o valor dentro da função
    //Para funcionar, você tem que passar a variavel para global
    global $x, $y, $z;
    echo "O valor de x dentro da função é: $x";

    //A mesma coisa se eu criar uma variável dentro da função
    $z = $x + $y;
    echo "O valor de z é: $z";
    //Para mostrar o valor de z fora da função ela tem que ser global
}
teste();

echo "<br>O valor de x fora: $x";
echo "<br>O valor de z fora: $z";


/*
A VARIABLE VARIABLES
It take the value of a variable and put as the name
of another variable
*/

$foo = 'bar';

$$foo = 'baz';

echo $foo, $bar;
echo "$foo, ${$foo}";



?>




