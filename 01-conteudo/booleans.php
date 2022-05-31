<?php

$isComplete = -0; 

if($isComplete){
    echo "The project is complete";
}else{
    echo "The project is not complete yet";
}

//There are other data types that can be converted into boolean

// integers 0 or -0 = false
// float 0.0 or -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

// I can change the boolean value putting (string) first $isComplete = (string) true;

//TO SEE IF IS BOOLEAN
// is_bool($isComplete)
// var_dump($isComplete)


?>