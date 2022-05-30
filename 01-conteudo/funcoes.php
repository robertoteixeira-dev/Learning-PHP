<?php 
function escreverMensagem(){
    echo "Olá tudo bom?";
}

escreverMensagem();
//Funções não sao case sensitive, então não importa se depois voce escreve o nome diferente

echo "<br></br>";

function escrever($nome, $sobrenome){
    echo "Olá, $nome $sobrenome. Tudo bom?<br>";
}

escrever("Roberto", "Teixeira");

echo "<br></br>";
//Podemos proteger nossa função de ter dados incorretos ingresados
function soma(int $valor1, int $valor2){
    return $valor1 + $valor2;
}

echo soma(10, 15);

echo "<br></br>";
//Podemos passar um valor padrão pré-definido
function fazerCafe($tipo = "cappuccino"){
    return "Fazendo uma xícara de: $tipo <br>";
}

echo fazerCafe("expresso");
echo fazerCafe(); //Se coloco null aqui dentro, não aparece nada




?>