<?php

$firstName = 'Roberto'; // In '' you can not use variables
$middleName = 'Rangel';

$lastName = "$firstName Teixeira"; // with "" you can use variables 
//It will show the full name
// You can do like this as well: "{$firstName} Teixeira";

echo $firstName;
echo $lastName;

$name = $firstName . ' ' . $middleName;
echo $name;

//To acess a letter in the string. Each letter is an index as an array

echo $name[1];
echo $name[-2];

//We can change the letter

echo $name[2] = 'B';
echo $name;

var_dump($name);

/*
These are ways to handle long and multiline strings
that may contain complex expressions and both single
and doble quotes

1. HEREDOC 
- '' and ""
- Here you can have variables

$str = <<<MYTEXT
Line 1 $x
Line 2
Line 3 ' "
MYTEXT;
 
echo $str;


2. NOWDOC 
- ''
- Here you can't have variables


*/

//HEREDOC
$str = <<<MYTEXT
Line 1 
Line 2
Line 3
MYTEXT;
 
echo $str;

//NOWDOC
$new_time = date("Y-m-d H:i:s", strtotime('+2 hours'));


?>