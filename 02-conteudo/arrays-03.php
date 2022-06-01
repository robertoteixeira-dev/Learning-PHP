<?php

function prettyPrintArray(array $value){
    echo '<pre>';

    print_r($value);

    echo '</pre>';
}

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

//SEPARATE THE ARRAY INTO CHUNKS
prettyPrintArray(array_chunk($items, 2)); 
//If you want to preser the key, put true at the end

echo "<br/>";

//ARRAY COMBINED - create an array from given keys and values

$array1 = ['a', 'b', 'c'];
$array2 = [5, 10, 15];

prettyPrintArray(array_combine($array1, $array2));

echo "<br/>";

/*

ARRAY FILTER
- It itrates over each array value and it passes the value
to the given callback. If the return of that callback is true
then the value is returned into the resulting array. 
Otherwise the element will be discarded

*/

$array = [1, 2, 2, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// array_filter(array $array, callable|null $callback = null, int $mode = 0): array
$even = array_filter($array, fn($number) => $number % 2 === 0, ARRAY_FILTER_USE_BOTH);

//ARRAY_FILTER_USE_KEY

$even = array_values($even); // It will return all values of array indexed 

prettyPrintArray($even);


echo "<br/>";

//GET THE KEYS
$array3 = ['a' => 5, 'b' => 10, 'c' => 15, 'd' => 5, 'e' => 10];

$keys = array_keys($array3); //If we want to specify which keys do we want, put: ,10 for example


prettyPrintArray($keys);



//ARRAY MAP - It apply a callback to each element of the array

$array4 = [1, 2, 3, 4, 5];

$array4 = array_map(fn($number) => $number * 3, $array4);

prettyPrintArray($array4);


echo "<br/>";


// ARRAY MERGE

$array5 = [1, 2, 3];
$array6 = [4, 5, 6];
$array7 = [7, 8, 9];

$merged = array_merge($array5, $array6, $array7);

prettyPrintArray($merged);


echo "<br/>";


// ARRAY REDUCE - It will reduce the array into a single value

//array_reduce(array $array, callable $callback, mixed $initial = null): mixed

$invoiceItems = [
    ['price' => 9.99, 'qty' => 3, 'desc' => 'Item 1'],
    ['price' => 29.99, 'qty' => 1, 'desc' => 'Item 2'],
    ['price' => 149, 'qty' => 1, 'desc' => 'Item 3'],
    ['price' => 14.99, 'qty' => 2, 'desc' => 'Item 4'],
    ['price' => 4.99, 'qty' => 4, 'desc' => 'Item 5'],
];

$total = array_reduce($invoiceItems, 
fn($sum, $item) => $sum + $item['qty'] * $item['price']);
//We can pass an initial value, puttint after price'], 500 for example

echo $total;


echo "<br/>";


// ARRAY SEARCH - Finding the key

$array8 = ['a', 'b', 'c', 'd'];

$key = array_search('b', $array8);

var_dump($key);


echo "<br/>";


// FIND DIFFERENCES BETWEEN TWO ARRAYS

$array9 = [1, 2, 3];
$array10 = [1, 3, 4, 5, 6];

//THIS ONE SHOWS THE DIFFERENT VALUES
// prettyPrintArray(array_diff($array9, $array10)); 


//THIS ONE SHOWS THE DIFFERENT KEYS
// prettyPrintArray(array_diff_assoc($array9, $array10)); 
prettyPrintArray(array_diff_key($array9, $array10)); 


echo "<br/>";


// SORT ARRAYS

$array11 = ['a' => 7, 'b' => 15, 'c' => 75, 'd' => 115, 'e' => 10];

asort($array11); // Reorganiza os valores

// ksort($array11); // Reorganiza as keys

// usort($array11, fn($a, $b) => $a <=> $b);

prettyPrintArray($array11);


echo "<br/>";


// ARRAY DESTROCTURE

$array12 = [1, 3, 4];

list($a, $b, $c) = $array12;
// [($a, $b, $c)] = $array12;

echo $a . ', ' . $b . ', ' . $c . '<br>';




?>