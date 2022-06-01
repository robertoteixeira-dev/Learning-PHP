<?php

function doSomething(){
    return 'Hello World';
}

doSomething();
// echo doSomething();


echo "<br/>";

//We can put a function inside of an IF

// FUNCTION INSIDE A FUNCION - ITS NOT GOOD TO DO THIS
foo(); //You have to invoce this one FIRST
bar(); 

function foo()
{
    echo 'Foo';

    function bar() {
        echo'Bar';
    }
}

//I can specify the type of the data 
// function foo(): int {} ... 
// I can also put declara(strict_types=1); at the beggining to specify as int
// If I put (): void it means that nothing is going to be returned
// if I put (): ?int it means that null values are acceptable
// (): int|float|array - means that can be one or another 
// (): mixed - means that can any type but it better to be specific 

// declare(strict_types=1); - It has to be at the top

function arg(int|float $x, int|float $y){
    return $x + $y;
}
echo arg(5,20);

//VARIABLE FUNCTION
function sum(int|float $x, int|float $y, int|float ...$numbers): int|float {
    $sum = 0;

    foreach($numbers as $number){
        $sum += $number;
    }
    
    return $sum;
}
//This way we can pass as many arguments as we want when caling the function
echo sum(10, 15, 20, 25, 10);

/*
ANOTHER WAY
function sum(int|float $x, int|float $y, int|float ...$numbers): int|float {
    return array_sum($numbers);
}

echo sum(10, 15, 20, 25, 10);


IN AN ARRAY ITS GOOD TO USE THE SPLAT OPERATOR TO CALL ONE ELEMENT EACH

$numbers = [1, 2, 3];

echo sum(10, 15, 20, ...$numbers);

- We have to call the arguments in the order that we put them
- or we can put echo foo(y: $y, x: $x); And now the order doesnt matter

ASSOCIATIVE ARRAY KEYS
- Those keys will be treated as the argument names


*/





?>