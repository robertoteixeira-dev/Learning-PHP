<?php 

/*
A control structure allows to group multiple
statements and control the flow of the code




DIFFERENCE BETWEEN ELSEIF AND ELSE IF:
- 

*/

$hora = 12;

if($hora < 12){
    echo "Bom dia";
}elseif($hora < 18){
    echo "Boa tarde";
}else{
    echo "Boa noite";
}

$cor = "Vermelho";

switch($cor){
    case "Vermelho":
        echo "A cor é Vermelho";
        break;
    case "Azul":
        echo "A cor é Azul";
        break;
    case "Rosa":
        echo "A cor é Rosa";
        break;
    default:
    echo "A cor".$cor." não é conhecida";
}
//We can use two cases to the same echo and break

?>