<?php

/*
Imprimir o quadrado dos primeiros 40
números naturais
*/

for($i = 0; $i <= 40; $i++){
    echo ($i * $i)."<br/>";
}

$counter = 0;
while($counter <= 40){
    $cuadrado = $counter*$counter;
    echo $cuadrado;
    $counter++;
}





?>