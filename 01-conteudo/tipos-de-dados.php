<?php 
/*
TIPOS DE DADOS

- String: Palavras
- Integer: Qualquer número inteiro
- Float: Números decimais
- Boolean: True/False
- Array: Matriz de dados
- Object: Objetos que contem atributos dentro dele
- Null: Nulo

*/

/*
DATA TYPES AND TYPE CASTING

1. Scalar Ttypes

- String: Palavras e frases
- Integer: Qualquer número inteiro (no decimal) 1, 2, 3
- Float: Números decimais (decimal) 1.6, 2.4, 3,3
- Boolean: True/False

2. Compound Types

- Array: Matriz de dados 
$companies = [1 ,2, 3, 'a, true];  
echo $companies;
print_r($companies);


- Object: Objetos que contem atributos dentro dele
- Callable
- Iterable

3. Special Types

- Resouce
- Null: Nulo


PHP is dynamically typed or also known as weekly 
typed language where you are not required to define the type
of your variable and also the type of the variable can
change after it has been defined. 

Dynamically typed language means that the type checking 
happens at run time while statically typed language maeans
that type checking happens at compile time (JAVA, C#)

PHP is more flexible 


TO SEE THE TYPE OF THE VARIABLE

var_dump($variable);
gettye($variable);



*/


//STRING
$exemplo1 = "Roberto"; //String

//INTEGER
$exemplo2 = 24;
$exemplo3 = -2; // Mesmo sendo negativo ainda é inteiro

//Para ver o tipo e valor da variável
var_dump($exemplo2);

//FLOAT
$exemplo4 = 3.5;
var_dump($exemplo4);

//BOOLEAN
$learning = true;
echo $learning;
var_dump($learning);

//ARRAY (MATRIZES)

$filmes =  array("Homen Aranha","Doutor Estranho","Frozen");

var_dump($filmes);

echo $filmes[2];

//OBJETOS

//No JS tudo são objetos, já aqui no PHP os objetos precisam ser criados através de classes instanciados (OOP)

class filme {
    public $nome;
    public $categoria;

    public function __construct($nome,$categoria){
        $this->nome = $nome;
        $this->categoria = $categoria;
    }
    public function mensagem(){
        return "O filme é $this->nome e a categoria é $this->categoria";
    }
}
//Agora eu posso usar minha função
$filme = new filme("Harry Potter", "Fantasia");
echo $filme->mensagem();
echo $filme->categoria;

//NULL 

$x = null;
var_dump($x);

function sum($x, $y){
    return $x + $y;
}

echo sum(2, 3);
// We have to specify that we want a integer, so put int

function sum2(int $x2, int $y2){
    //here, if we want to, we can change puting $x = 5.5 and changing it into float
    return $x2 + $y2;
}

echo sum2(2, 3);

// I can put something to specify all as integer

// declare(strict_types=1); it should be in the top
// I can change it into float after if I want to puting float $x for example


?>





