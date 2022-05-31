<?php

$array1 = [1, 2, 3];

$array2 = array(4, 5, 6);

//We can not put negative numbers to access an index $array[-1];

echo $array1[2];

//TO SEE IF SOMETHING EXIST
var_dump(isset($array1[2]));

//TO CHANGE ONE ITEM OF AN ARRAY
$array1[1] = 10;

//TO SHOW THE COMPLETE ARRAY
var_dump($array1);

print_r($array1);

echo '<pre>';
print_r($array1);
echo '</pre>';

//TO SEE THE NUMBER OF ELEMENTS
echo count($array1);

//ADD AN ELEMENT AT THE END OF THE ARRAY
$array1[] = 15;

array_push($array1, 25, 33);

echo '<pre>';
print_r($array1);
echo '</pre>';

//ASSOCIATED ARRAY

//keys => value 
$array1 = [
 1 => '1',
 10 => '2',
 3 => '3',
 15 => '4',
 25 => '5',
 33 => '6'
];

echo '<pre>';
print_r($array1);
echo '</pre>';

echo $array1[10];

//Push another element 
$array1[22] = '20';

/*
VARIABLES AS KEY
//I can create a variable and use it as a key
$x = 50;
$array1[$x] = 23;

----------
ARRAYS AS VALUES
I can also put the value as another array of that specific key
and to acess one key of that key is just:
echo $array1[10][5];

*/ 

//REMOVE ELEMENTS FROM ARRAY

echo array_pop($array1); //It will remove the last element

echo array_shift($array1); //It will remove the first element


uset($array2[1]); //If you dont specify the index it will remove the hall array

//REMOVER UM NUMERO ALEATORIO DO ARRAY

array_rand($array2);

//BUSCAR UM ELEMENTO DO ARRAY
array_search(10, $array1);

//CONTAR QUANTOS ELEMENTOS TEM
//- count
//- sizeof





?>