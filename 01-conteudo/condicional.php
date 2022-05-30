<?php 

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


?>