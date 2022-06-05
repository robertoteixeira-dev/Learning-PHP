<?php
/*
print_r($argv);
printf($argv[1]);

echo "\n\n";
*/
// php 03-exercicio.php

$file = file_get_contents("strings.txt");

//echo $file;

### SANITIZE THE STRING 

function sanitize(){
    global $file;

    $file = preg_replace("/\s+/", " ",$file);
    $file = preg_replace("/\s\./", ".",$file);
    $file = preg_replace("/\t+/", "\t",$file);
    $file = preg_replace("/^(\.)\n+/", "\n",$file);
    $file = preg_replace("/(\.)+/", ".",$file);
    $file = preg_replace("/\.(\w)/", '. \1', $file);
    
    return $file;
}

echo sanitize($file);

echo "\n\n";

### HOW MANY WORDS ENDS WITH ING
// php strings.php
function endsWithIng(){
    global $file;

    return preg_match_all("/(.*?)ing/", $file); 

}

echo endsWithIng($file);

echo "\n\n";

### HOW MANY WORDS STARTS WITH DIS 

function startsWithDis(){
    global $file;

    return preg_match_all('/dis(.*?)/', $file); 

}

echo startsWithDis($file);


/*
$file = file_get_contents("strings.txt");

$file = preg_replace("/\s+/", " ",$file);
$file = preg_replace("/\s\./", ".",$file);
$file = preg_replace("/\t+/", "\t",$file);
$file = preg_replace("/^(\.)\n+/", "\n",$file);
$file = preg_replace("/(\.)+/", ".",$file);
$file = preg_replace("/\.(\w)/", '. \1', $file);

echo $file;

$matches = Array();

$countDis = preg_match_all('/dis(.*?)/', $file);
//echo implode(' ', $matches);

echo "\n\n";

echo $countDis;

$countIng = preg_match_all("/(.*?)ing/", $file); 

echo "\n\n";

echo $countIng;

/*

Correct spacing 
- one space between each word
- the file has multiple spaces represented 
either spaces, tabs or line break
when a period is not present

- count how many words start with dis
- count how many word end with ing

\s Match a whitespace character (espaço em branco)


*/






?>