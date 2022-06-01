<?php

/*
01 EXEMPLO: Tabuada de 1 a 10
*/

// ----------------------------------------
function table($number){
    echo "A tabuada do: $number <br>";

    for($i = 1; $i <= 10; $i++){
        $counter = $number*$i;
        echo "$number x $i = $counter <br>";
    }
}

if(isset($_GET['number'])){
    table($_GET['number']);
    
}else{
    echo "Não há número para calcular";
}


for($i = 0; $i <= 10; $i++){
    table($i);
}



/*
02 EXEMPLO: Calculadora
*/

//----------------------------------------
function calculadora($n1, $n2){
    $soma = $n1 + $n2;
    $sub = $n1 - $n2;
    $mult = $n1 * $n2;
    $div = $n1 / $n2;

    echo "A soma: $soma </br>";
    echo "A subtração: $sub </br>";
    echo "A multiplicação: $mult </br>";
    echo "A divisão: $div </br>";
}

calculadora(5,10);



/* ----------------------------------------
PROPIEDADES OPCIONAIS 

Posso colocar uma propiedade opcional

($n1, $n2, $negrito = false)

Agora posso fazer condicionais para que,
caso seja true, por em negrito

if($negrito = true){
    echo "<h1>";
}

calculadora(10, 5, true);

*/



/* ----------------------------------------
RETURN

Dentro das funções mais correto é utilizar o return 
ao invés de utilizar o echo 
*/



/* ----------------------------------------
FUNÇÕES DENTRO DE OUTRAS FUNÇÕES 
*/

function getName($name){
    $text = "O nome é: $name";
    return $text;
}

function giveName($name, $lastName){
    $text = getName($name)."<br>"."O sobrenome é: $lastName";
    return $text;
}

echo giveName("Roebrto", "Teixeira");



/* ----------------------------------------
VARIAVEIS LOCAIS 
São definidas dentro de uma função e não podem ser
usadas fora da função

$n1 = 10;
$n2 = 5;

VARIAVEIS GLOBAIS 
São declaradas fora da função e estão disponíveis dentro
e fora das funções

global $n1 $n2;

*/



/* ----------------------------------------
FUNÇÕES VARIAVEIS
Podemos usar variaveis para armazenar o nome de uma 
função 
*/

function goodMorning(){
    return "Hello, good morning";
}

function goodEvening(){
    return "Hello, good evening";
}

function goodNight(){
    return "Hello, good night";
}

$time = "goodMorning";

echo $time();




/* ----------------------------------------
FUNÇÕES PRÉ-DEFINIDAS
*/
$name = "Roberto";

echo var_dump($name);
echo "<br>";

echo date('d-m-y'); //Mostra o dia, mês e ano
echo "<br>";

echo time(); //Mostra a hora em formato unix 
echo "<br>";

echo sqrt(16); //Mostra a raiz quadrada
echo "<br>";

echo rand(); //Número aleatorio
echo "<br>";

echo rand(10,40); //Número aleatório entre 10 e 40
echo "<br>";

echo pi(); //O PI
echo "<br>";

echo round(7.8912); //Arredonda pra 8
echo "<br>";

echo round(7.8912, 1); //Arredonda pro número decimal, 7,9
echo "<br>";

echo gettype($name); //Mostra o tipo de dado
echo "<br>";

// is_string - Mostra se é string, posso usar em condicional por exemplo
// is_float
// is_int 

// isset - Verifica se a variavel existe

// trim - limpa os espaços antes e depois de um conteudo de uma variavel. Ex (trim($name));

// unset - Eliminar variaveis ou indices de arrays. Ex: unset($name);

// empty - Verifica se uma variavel está vazia

// strpos - Encontrar em que posição está um caracter 

// str_replace - Substituir um conteudo de um string. Ex: str_replace("Rangel", $name);

// strtoupper / strlower - Muda pra maiuscula ou minuscula

?>