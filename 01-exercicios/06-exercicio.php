<?php

/*
Imprimir todos os números da tabuada 
de 1 a 10 em HTML

*/


echo "<table border='1>'<tr>"; //Inicio

echo "<tr>"; //1ª Fila
    for($counter = 1; $counter <= 10; $counter++){
        echo "<td> Tabuada do $counter </td>";
    }

echo "</tr>"; //Final

echo "<tr>"; //2ª Fila
    for($i = 1; $i <= 10; $i++){
        echo "<td>";
            for($x = 1; $x <= 10; $x++){
                echo "$i x $x = ".($i*$x)."<br>";
            }
        
        echo "</td>";
    }

echo "</tr>"; //Final

echo "</table>"; //Fim


?>