<?php

/*
Um programa que mostre todos os números
entre dois números que foram inserido por
GET

*/

if(isset($_GET['n1']) && isset($_GET['n2'])){
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];

    while($n1 <= $n2){
        $between = $n1++;
        echo $between."<br/>";
    }
}else{
    echo "Escolha os números";
}

/*
FOR 
for($i = $n1; $i <= $n2; $i++){
    echo 
}
*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="text" name="n1" placeholder="Digite n1 aqui"><br>
        <input type="text" name="n2" placeholder="Digite n2 aqui"><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>