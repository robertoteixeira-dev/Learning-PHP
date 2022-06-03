<?php

//$array = [1, 2, 2, 2, 3, 3];

$array = array_slice($argv, 1);

function histogram(array $value) {
    
    $result = print_r(array_count_values($value), true);

    return $result;
}

echo histogram($array); 
//It returns the associative array 

/*echo '<br/>';

echo histogram([1, 2, 2, 2, 3, 3,]); 
//It also returns the associative array */


?>