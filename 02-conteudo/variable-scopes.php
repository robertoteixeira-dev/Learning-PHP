<?php

/*
Variable scope indicates the boudary where the variable can
be accessed. We have the global and the local scope

*/

$x = 5;

//To acess this variable in another file
// include('functions-03.php'); //name of the file and you can also change the value there

function hello(){
    global $x;
    
    //We could also change the variable $x = 10;

    // $GLOBALS['x']; - another way using the superglobals 

    echo $x;
}

hello();
//We could also put $x as the argument hello($x)

/*
STATIC VARIABLE 
- It's a regular variable with the local scope 
- The difference is that the regular variable get destroyed 
outside of the scope while the static variable does not 

*/

//CALLIING A VALUE AFTER DOING SOMETHING IN ANOTHER FUNCTION

function getValue(){
    $value = someVeryExpensiveFunction();

    // some more processing with $value

    return $value;

    /*
    I could use static variable here to cache this:

    static $value = null;

    if($value === null){
        $value = someVeryExpensiveFunction();
    }

    return $value;
    
    */
}

function someVeryExpensiveFunction() {
    sleep(2); //It will make the function way 2 seconds

    return 10;
}

echo getValue() . '<br/>';





?>