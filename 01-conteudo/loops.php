<?php
/*
While - Vai repetir enquanto for verdadeiro
Do While - Executa algo e depois faz o loop
For - Vai referir uma quantidade de vezes
Foreach - Para cada item 
*/

//WHILE
$x = 0;
while ($x <= 100){
    echo "O número é: $x <br>";
    $x+=10;
}

echo "<br></br>";

$y = 1;
while ($y <= 5){
    echo "O número é: $y <br>";
    $y++;
}

echo "<br></br>";

//DO WHILE
$a = 1;
do {
    echo "O número é: $a <br>";
    $a++;
} while ($a <= 5);


echo "<br></br>";

//FOR 
for ($b = 0; $b <= 10; $b++){
    echo "O número é: $b <br>";
}


echo "<br></br>";

//FOREACH
$cores = ["azul", "amarelo", "verde"];

foreach ($cores as $cor){
    echo "A cor é $cor <br>";
}



?>