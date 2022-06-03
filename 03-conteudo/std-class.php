<?php
/*
PHP std class can be used to create generic
objects and some functions 

*/

#JSON STRING
$str = '{"a":1, "b":2, "c":3}';

// json decore into an array
// pass it as true so return ir as an associative array
//$arr = json_decore($str, true); 

/*
If we dont put the true we get an object
which is an instance of std class
and the keys of that array will become 
the properties of the class and the values
will become the values of those properties
*/
$arr = json_decore($str); 

var_dump($arr->a);

#CREATE OBJECT

$obj = new \stdClass();

$obj->a = 1;
$obj->b = 2;

var_dump($obj);

#CASTING

$array = [1, 2, 3];

$obje = (object) $array;

var_dump($obje->{1});



?>