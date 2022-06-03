<?php

//it print an integer with the current time
echo time() . '<br>'; 

//To add time to the current time, exemplo, adding 5 days

$currentTime = time();

echo $currentTime + 5 * 24 * 60 * 60 . '<br>';

// subtract time 

echo $currentTime - 60 * 60 * 24 . '<br>';

# FORMAT 

//Current date and time 
echo date('m/d/Y g:ia') . '<br>';

//date and time in the fiture / in the pass
echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . '<br>';

echo date('m/d/Y g:ia', $currentTime - 60 * 60 * 24 ) . '<br>';

//Current time zone
echo date_default_timezone_get() . '<br>';

// Change the time zone
date_default_timezone_set('UTC');

echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . '<br>';

echo date('m/d/Y g:ia', $currentTime - 60 * 60 * 24 ) . '<br>';

//current time zone
echo date_default_timezone_get() . '<br>';

/*
Its good to put the time zone in UTC
and change it to the user when its necessary

*/

echo mktime(0, 0, 0, 4, 10, null);

echo '<br>';

echo date('m/d/Y g:ia', mktime(0, 0, 0, 4, 10, null));

//DATE_PARSE
$date = date('m/d/Y g:ia', strtotime('second frida of January'));

print_r(date_parse($date));





?>