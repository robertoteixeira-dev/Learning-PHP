<?php

print_r($argv);
printf($argv[1]);

echo "\n\n";

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