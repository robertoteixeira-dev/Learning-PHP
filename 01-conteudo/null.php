<?php

$x = null;

echo $x;

var_dump($x);

var_dump(is_null($x));

var_dump($x === null); //It will returns true or false

//TO DESTROY A VARIABLES 
// unset($x);

//CASTING - changing 
var_dump((string) $x);
var_dump((array) $x);

?>