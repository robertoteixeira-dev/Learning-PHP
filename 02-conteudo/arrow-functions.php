<?php

// VARIABLE FUNCTIONS - You can call functions from a variable

function sum(int|float ...$numbers): int|float {
    
    return array_sum($numbers);
}

$x = 'sum';
// Here PHP look fora variable with the same name as the function

/*
We could put in a IF

if (is_callable($x)){
    echo $x(1, 2, 3);
}else{
    echo 'Not callable';
}

*/

echo $x(1, 2, 3);


echo '<br/>';


// ANONYMOUS FUNCTIONS - Functions that have no name

function (int|float ...$numbers): int|float {
    return array_sum($numbers);
}; //Now we need to put ; at the end

/*
We could put in a variable:

$sum = function (int|float ...$numbers): int|float {
    return array_sum($numbers);
};

echo $sum(1, 2, 3);

LOCAL VARIABLES
- In anonymous functions we could put ) use ($x):
to acess a variable that is outside 

CHANGE THE VALUE OF THE VARIABLE IN THE FUNCTION

use (&$x):

& - This will allow you to change the value of the variable

*/


echo '<br/>';


/*
CALLABLE TYPE AND CALLBACK FUNCTIONS

- When a function is passed to another function as
an argument and then is called within that function
its called a callback function

*/
$array = [1, 2, 3];

$array2 = array_map(function($element) {
    return $element * 2;
}, $array);

echo '<pre>';
print_r($array);

print_r($array2);
echo '<pre/>';

/*
We could also create a variable and pass as the argument
Or we could create a function with a name as 
pass it in the argument as a string

IG WE WANT TO PASS THE RESULT OF THE FUNCTION 
IN THE OTHE FUNCTION 


$sum = function (callable $callback, int|float ...$numbers): int|float {
    
    return $callback(array_sum($numbers));

}; 

echo $sum('foo' 1, 2, 3, 4);

$array = [ 1, 2, 3, 4];

function foo($element) {
    return $element * 2;
}

*/


echo '<br/>';


/*
ARROW FUNCTION
- Its a cleaner syntax of an anonymous function with a few
differences
- Its useful as an inline callback function


*/

$array3 = [1, 2, 3, 4]; 
// IF WHE WANT TO MULTIPLY EVERY ELEMENT BY ITSELF

$array4 = array_map(function($number) {
    return $number * $number;
}, $array3);

echo '<pre>';
print_r($array4);
echo '<pre/>';

//NOW IF WE WANT TO DO THIS WITH AN ARROW FUNCTION

$array5 = array_map(fn($number) => $number * $number, $array3);

echo '<pre>';
print_r($array5);
echo '<pre/>';

/*
- One of the few differences is that we could access the variables
from the parent scope within the arrow functions without the need to use
the use key word

So, if we define a variable:
    $y = 5;
    We can put it as an argument 
*/











?>