<?php

$x = 3.3;
$y = 13.5e-3;
$y = 13_000.5;

//DO NOT COMPARE FLOATING NUMBERS BECAUSE IT WILL HAPPENS 
$a = floor((0.1 + 0.7) * 10); //It returns 7
$b = ceil((0.1 + 0.7) * 10); //It returns 8 which is the correct
$c = ceil((0.1 + 0.2) * 10); // It return 4 which is wrong



echo $x;
echo $y;

// PHP_FLOAT_MAX
// PHP_FLOAT_MIN

// PHP_FLOAT_MAX * 2 - Returns inf because is infinite

//var_dump(is_infinite($variable));

//TO SEE IF ITS A NUMBER

var_dump(is_nan($x));
var_dump(is_nan(log(-1)));


//CASTING - Changing the data type

$g = 5; //Here is int
var_dump((float) $g); // Now is float


?>