<?php

$cores = ["verde", "azul", "vermelho"];
$nomes = array("roberto", "rangel", "vitor");


echo $cores[0]; //Mostra o verde

//Trocar informações
$cores[2] = "amarelo";
echo $cores[2];

//Ver a QUANTIDADE de itens 
$quantidade = count($cores);
echo $quantidade;

echo "A quantidade no array é: ".count($cores);

//Mostrar todos os itens com o loop FOR
for ($i = 0; $i < $quantidade; $i++){
    echo $cores[$i];
    echo "<br>";
}

//Mostrar todos os itens com o loop FOREACH
foreach ($cores as $cor){
    echo $cor."<br>";
}

//Atribuindo KEYS para cada item
$idade = array("Roberto"=>"24", "Vitor"=>"Nascimento");
//Agora achamos o item através de uma chave e não através da posição
echo $idade["Roberto"];

$idade["Roberto"] = "Teixeira";

echo $idade["Roberto"];
//Mostrando as informações em frase
foreach ($idade as $key => $valor){
    echo "A nome é $key e o sobrenome é $valor <br>";
}

//REORDEDAR ITENS 
$num = [10,20,33,2,14,26];
sort($num); //Organiza do menor pro maior

foreach ($num as $n){
    echo $n. "<br>";
}

/*
//Array de indice (posições)
1. sort - Do menor pro maior
2. rsort - Do maior pro menor

//Se for uma matriz com chaves ao inves de indice (posições)
1. asort - Do menor pro maior, de acordo com o valor e não com a chave ou indice
2. ksort - Ordena de acordo com a chave
3. arsort - Ordena pelo valor descendente (maior pro menor)
4. krsort - Ordena pelo valor ascendente (do menor pro maior)

*/



?>