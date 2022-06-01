<?php

$array = [1, 2, 3, 4, 5];

function median(array $value) {

    return array_sum($value)/count($value);

}

echo median($array); // It returns 3

echo '<br/>';

echo median([1, 2, 3, 4, 5]); // It also returns 3


?>