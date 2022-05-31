<?php
/*
São aqueles sinais que usamos pra atribuir, comparar ou fazer calculos com valores
Ex: + - * / = ++ -- += &&

1) Operadores Aritiméticos (matemáticos);
2) Operadores de Atribuição;
3) Operadores de Sequência (concatenação);
4) Operadores de Comparação
5) Operadores Condicional (Ternário);
6) Operadores Lógicos

*/
//SÃO OS MESMOS DO JAVASCRIPT, menos o de concatenação

//No Javascript

/*
var nome = "Roberto";
var sobrenome = "Teixeira";
var nome-completo = nome + sobrenome;
*/

//PHP
$nome = "Roberto";
$sobrenome = "Teixeira";
$nomeCompleto = $nome . $sobrenome;

// OPERATORS

/*
- If an operator takes 1 value, is called: unary operator
- If it takes 2 values, its called binary operator
- If it takes 3 values, its called ternary operator
*/

// ARITMETIC OPERATORS (+ - * / % **)

$x = 10;
$y = 5;

var_dump($x + $y);
/*
- Some expressions changes the data type
- The data type will always be float unless its both interger

if you are dividing by 0, you can use fdiv to work

- fmod is used to do division with float number 
*/



// ASSIGNMENT OPERATORS (= += -= *= /= %= **=)

$a = 5;
$b = $c = 10;
$d = ($f = 10) +5; //DO NOT DO THIS

$a += 3;
echo $a; //it returns 8 



// STRING OPERATORS (. .=)

$h = 'Hello';
$i = $h . 'World';
echo $i;

/*
It is the same to do:
$h = 'Hello';
$h .='World';
*/



// COMPARISON OPERATORS (== === != <> !== < > <=> ?? ?:)
$j = 5;
$k = 5;

var_dump($j == $k);
/*
=== compare also the type, so if you have 5 and '5' 
it will return true and falso 

<> is the same as !=

<=> 

*/

$r = 'Hello World';
$t = strpos($r, 'H');

if ($t === false) { //If I use == it will return not found
    echo 'H not found';
}else{
    echo 'H found at index ' . $y;
}

// ?? and ?: are conditional operators

$result = $y === false ? 'H not found' : 'H found at index ' . $y;

echo $result;
//When you are stacking ternary operators always use parenteses because it can return an error and its more readable

// ?? - used when working with undefined array keys or undefined variables
$p = null;
$o = $p ?? 'hello'; //It returns only if its null

var_dump($o);



// ERROR CONTROL OPERATORS ( @ )

/*
It will simply suppress any errors from the 
expression that you put the @
*/

$q = @file('file.txt'); //DO NOT USE THIS



// INCREMENT/DECREMENT OPERATORS ( ++ -- )
for($i = 0; $i <= 10; $i++){
    echo $i;
}



// LOGICAL OPERATORS ( && and || or ! not )
// in PHP exist and / xor but it its used to precedence




// BITWISE OPERATORS ( & | ^ ~ << >> )
//Binary 0 and 1


// ARRAY OPERATORS ( + == === "= <> !== )
$q = [1, 2, 3];
$l = [4, 5, 6, 7, 8];

$z = $q + $l;
print_r($z);
// == would be false because they are not the same
// === woudl return false


// EXCUTION OPERATORS ( `` )




// TYPE OPERATORS ( instanceof )




// NULLSAFE OPERATORS - PHP ( ? )




?>